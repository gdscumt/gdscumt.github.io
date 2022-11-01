<?php
$toEmail = "gdscumt@gmail.com";
$mailHeaders = "From: " . $_POST["email"] . "<" . $_POST["email"] . ">\r\n";
if (mail($toEmail, $_POST["email"], $_POST["email"], $mailHeaders)) {
    print "<p class='success'>Mail Sent.</p>";
} else {
    print "<p class='Error'>Problem in Sending Mail.</p>";
}
