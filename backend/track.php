header('Content-Type: application/json');
$code = $_GET['code'] ?? '';

$data = json_decode(file_get_contents("data.json"), true);

if (isset($data[$code])) {
  echo json_encode([
    "found" => true,
    "status" => $data[$code]["status"],
    "location" => $data[$code]["location"],
    "updated" => $data[$code]["updated"]
  ]);
} else {
  echo json_encode(["found" => false]);
}
