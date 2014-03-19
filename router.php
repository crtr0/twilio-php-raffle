<?php
// router.php
$path = pathinfo($_SERVER["SCRIPT_FILENAME"]);
if ($path["extension"] == "mp3") {
    header("Content-Type: audio/mpeg");
    readfile($_SERVER["SCRIPT_FILENAME"]);
}
else {
    return FALSE;
}
?>
