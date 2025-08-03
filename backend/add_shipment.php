<?php
$code = $_POST["code"] ?? "";
$status = $_POST["status"] ?? "";
$location = $_POST["location"] ?? "";
$updated = $_POST["updated"] ?? "";

if ($code && $status && $location && $updated) {
  $file = "data.json";
  $data = json_decode(file_get_contents($file), true);

  $data[$code] = [
    "status" => $status,
    "location" => $location,
    "updated" => $updated
  ];

  file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
  echo "Ýük üstünlikli girizildi!";
} else {
  echo "Maglumat doly däl!";
}
?>
