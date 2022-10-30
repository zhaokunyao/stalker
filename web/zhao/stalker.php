<?PHP

$json = file_get_contents("php://input");
$time = time();
$msg  = sprintf("%s\t%s".PHP_EOL, $time, $json);
error_log($msg, 3, "/tmp/php.stalker.log");

header("Content-Type: application/json");
$ret = array(
        "error_code" => 0,
        "error_msg" => "ok",
);
echo json_encode($ret);
