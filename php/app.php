<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $textarea = htmlspecialchars($_POST["textarea"]);
    echo "message send, $nombre. thanks!";
}
?>
