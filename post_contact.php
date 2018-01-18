<?php
session_start();
$errors = array();

if(!array_key_exists('name', $_POST) || $_POST['name'] == '') {
    $errors ['name'] = "Vous n'avez pas renseigné votre nom";
}

if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors ['mail'] = "Vous n'avez pas renseigné votre email";
}

if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors ['message'] = "Vous n'avez pas renseigné votre message";
}
//On check les infos transmises lors de la validation
if(!empty($errors)){
    $_SESSION['errors'] = $errors;//on stocke les erreurs
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php#cta');
}

else{
    $_SESSION['success'] = 1;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'FROM:' . htmlspecialchars($_POST['email']);
    $to = 'cdeazevedome@gmail.com';
    $subject = 'Message envoyé par ' . htmlspecialchars($_POST['name']) .' - <i>' . htmlspecialchars($_POST['email']) .'</i>';
    $message_content = '
  <table>
  <tr>
  <td><b>Emetteur du message:</b></td>
  </tr>
  <tr>
  <td>'. $subject . '</td>
  </tr>
  <tr>
  <td><b>Contenu du message:</b></td>
  </tr>
  <tr>
  <td>'. htmlspecialchars($_POST['message']) .'</td>
  </tr>
  </table>
  ';
    mail($to, $subject, $message_content, $headers);
    header('Location: index.php#cta');
}