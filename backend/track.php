<?php
header('Content-Type: application/json');

$code = $_GET['code'] ?? '';

$shipments = [
  "TRK123456" => [
    "status" => "Ýolda",
    "location" => "Aşgabat",
    "updated" => "2025-08-03 12:45"
  ],
  "TRK654321" => [
    "status" => "Iberildi",
    "location" => "Türkmenbaşy",
    "updated" => "2025-08-02 09:30"
  ]
];

if (array_key_exists($code, $shipments)) {
  echo json_encode([
    "found" => true,
    "status" => $shipments[$code]["status"],
    "location" => $shipments[$code]["location"],
    "updated" => $shipments[$code]["updated"]
  ]);
} else {
  echo json_encode(["found" => false]);
}
?>
