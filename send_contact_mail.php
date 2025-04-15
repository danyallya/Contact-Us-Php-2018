<?php
if (!empty($_POST["send"])) {
    $phone = $_POST["userPhone"];
    $email = $_POST["userEmail"];
    $stock = $_POST["stock"];
    $content = $_POST["content"];

    $toEmail = "helbadboy.outsider@gmail.com";
    $mailHeaders = "From: " . $phone . "<" . $email . ">\r\n";
    if (mail($toEmail, $stock, $content, $mailHeaders)) {
        $message = "Your contact information is received successfully.";
        $type = "success";
    }
}
require_once "contact-view.php";
?>