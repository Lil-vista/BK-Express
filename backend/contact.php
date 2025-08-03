<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"] ?? "";
  $email = $_POST["email"] ?? "";
  $message = $_POST["message"] ?? "";

  // Bu ýerde maglumatlar e-poçta ýa-da faýla ýazylýar
  $log = "Ady: $name\nE-poçta: $email\nHaty: $message\n---\n";
  file_put_contents("messages.txt", $log, FILE_APPEND);

  echo "Ugratdyňyz!";
}
?>
