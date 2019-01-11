<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo = "deltatactical1234@gmail.com";
    $headers = "From :". $mailFrom;
    $msg = "New Client Submission from ".$name.".\n\n".$message;

    mail($mailTo, $phone, $txt, $headers);
    header("Location: index.php?mailsend");
}


?>