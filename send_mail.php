<?php
try {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];
  $contact = $_POST['contact'];
  $type = $_POST['type'];
  $to = "hr@sankeysolutions.com";
  if($type == "ceo") {
      $to = "suhas@sankeysolutions.com";
  }
  $resp = mail($to,'Query from website',
  ' Name : ' . $name . '
    Email : ' . $email .'
    Comment : ' . $comment .'
    Contact : ' . $contact .'');
  echo $resp;
} catch(Exception $ex){
  echo $ex;
}
?>