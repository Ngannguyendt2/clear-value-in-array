<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Number need find:<input type="text" name="number"> <br>
    <input type="submit" value="Clear">
</form>
<?php
$number=$_POST['number'];
$array=[1,3,2,4,6,75,65];
function clearValueInArray($arr,$number){
    foreach ($arr as $key=> $value){
        if($number==$value){
            array_splice($arr,$key,1);
        }
    }
    return $arr;
}
var_dump(clearValueInArray($array,$number));

?>
</body>
</html>
