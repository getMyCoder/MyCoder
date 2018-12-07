<?php
header('Content-Type:text/html;charset=utf-8');
$url = $_GET["user"];
$title = $_GET["title"];
$href = $_GET["href"];
if ($url && $title && $href) {
    $Reads = file_get_contents("json.json");
    $SetReads = json_decode($Reads, true);
    $ArrLength = count($SetReads);
    $SetReads[$ArrLength]["url"] = $url;
    $SetReads[$ArrLength]["title"] = $title;
    $SetReads[$ArrLength]["href"] = $href;
    $SetW = json_encode($SetReads);
    file_put_contents("json.json", $SetW);
    echo "success";
}
?>