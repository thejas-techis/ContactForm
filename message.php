<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "thejasbm22@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      try {
        $aa = mail($receiver, $subject, $body, $sender);
        echo 'success' . $aa;
      } catch (Exception $e) {
        echo $e->getMessage();
      }
    }
  }
      // if(/z
  //   }else{
  //     echo "Enter a valid email address!";
  //   }
  // }else{
  //   echo "Email and message field is required!";
  // }
?>
