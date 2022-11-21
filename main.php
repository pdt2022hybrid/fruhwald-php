<!DOCTYPE html>
<html>
<body>

<?php

date_default_timezone_set ('Europe/Bratislava');
echo date ("Y-m-d H:i <br>");
$time = date ("Y-m-d H:i");
$h = date ("H");
//file_put_contents ("file.txt","$time");
echo "<br>";
if($h >= 8 ){
    echo "si pomaly slabko!";
};
echo "<br>";
file_put_contents("file.txt", "$time,\n", FILE_APPEND);
$log = file_get_contents("file.txt");
$replace = str_replace(",", "\n", $log);
echo $replace;

?>

</body>
</html>
