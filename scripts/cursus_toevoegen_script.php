<?php
include("./scripts/connect_db.php");
include("./scripts/functions.php");


$vak = sanitize($_POST["vak"]);
$cursus = sanitize($_POST["cursus"]);
$opleiding = sanitize($_POST["opleiding"]);
$semester = sanitize($_POST["semester"]);
$periode = sanitize($_POST["periode"]);
$cohort = sanitize($_POST["cohort"]);

$sql = "INSERT INTO `cursus` (
                    `cursusid`, 
                    `vak`, 
                    `cursus`, 
                    `opleiding_id`, 
                    `semester`, 
                    `periode`, 
                    `cohort`)
            VALUES (NULL, 
                    '{$vak}', 
                    '{$cursus}', 
                    '{$opleiding}', 
                    '{$semester}', 
                    '{$periode}', 
                    '{$cohort}');";

$result = mysqli_query($conn,$sql);

if($result)
{
    header("Location: ./index.php?content=message&alert=cursus-toegevoegd");
}
else
{
    header("Location: ./index.php?content=message&alert=cursus-error");
}

?>