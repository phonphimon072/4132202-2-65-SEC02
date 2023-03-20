<?php
require "conDB.php";

$id = $_POST['ID'];
$name = $_POST['name'];
$pre_name = $_POST['pre_name'];
$subject_id = $_POST['subject_id'];

try{
    $sql = "INSERT INTO tb_register 
            VALUES('$id','$pre_name','$name','$subject_id')";
    $result = $mysqli->query($sql);

    if($mysqli->errno == null)
        header("Location:/add.php");
}
catch(Exception $e){
    echo $e->getMessage();
}
?>