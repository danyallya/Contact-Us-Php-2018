<?php
if (!empty($_POST["send"])) {
    $phone = $_POST["userPhone"];
    $email = $_POST["userEmail"];
    $stock = $_POST["stock"];
    $content = $_POST["content"];

    $conn = mysqli_connect("localhost", "root", "test", "blog_samples") or die("Connection Error: " . mysqli_error($conn));
    mysqli_query($conn, "INSERT INTO tblcontact (user_phone, user_email,stock,content) VALUES ('" . $phone . "', '" . $email . "','" . $stock . "','" . $content . "')");
    $insert_id = mysqli_insert_id($conn);
    //if(!empty($insert_id)) {
    $message = "Your contact information is saved successfully.";
    $type = "success";
    //}
}
require_once "contact-view.php";
?>