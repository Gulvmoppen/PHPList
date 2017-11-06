<?php
include Video.php;
include ArrayData.php;

$data = array();

function addData(){
$n1 = $_POST["videoname"];
$n2 = $_POST["videotype"];
$n3 = $_POST["videolength"];

$tempAftale = new Video();
$tempAftale->navn = $n1;
$tempAftale->type = $n2;
$tempAftale->tid = $n3;

array_push($data, $tempAftale);

?>

<html>
<body>
Added Video name <?php echo $_GET["videoname"]; ?><br>
The video type is: <?php echo $_GET["videotype"]; ?>
The length of video is: <?php echo $_GET["videolength"]; ?>

</body>
</html>





