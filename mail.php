
<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");
   $errors = [];

   if (!empty($_POST)) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
     
      if (empty($name)) {
          $errors[] = 'Niepodano imienia';
      }
   
      if (empty($email)) {
          $errors[] = 'Niepodano adresu email';
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errors[] = 'Adres email niepoprawny';
      }
   
      if (empty($message)) {
          $errors[] = 'Nie podano treści wiadomości';
      }
   }
   if (empty($errors)) {
        $toEmail = 'pabichwiktor@gmail.com';
        $emailSubject = 'Nowa wiadomość z formularza kontaktowego';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);
        $mail_result = mail($toEmail, $emailSubject, $body, $headers);
        var_dump($mail_result);

        if ($mail_result) {
            // header('Location: thank-you.php');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
?>