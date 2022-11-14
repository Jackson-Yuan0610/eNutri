<!DOCTYPE html>
<html>
<head></head>
<body>
<script>
var j1 = "hello";
var j2 = "world";
location.href = "test2.php?p1=" + j1 + "&p2=" + j2;
</script>
</body>
</html>
The source code of test2.php is as follows:
<?php
if (isset($_GET["p1"]) && isset($_GET["p2"])) {
 $p3 = $_GET["p1"] . " " . $_GET["p2"];
 echo $p3;
}
?>