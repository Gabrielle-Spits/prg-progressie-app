<?php
include("./scripts/connect_db.php");
include("./scripts/functions.php");

$id = sanitize($_POST["id"]);
$vak = sanitize($_POST["vak"]);
$cursus = sanitize($_POST["cursus"]);
$opleiding = sanitize($_POST["opleiding"]);
$semester = sanitize($_POST["semester"]);
$periode = sanitize($_POST["periode"]);
$cohort = sanitize($_POST["cohort"]);

$sql ="UPDATE `cursus` SET 
                            `vak` = '{$vak}', 
                            `cursus` = '{$cursus}', 
                            `opleiding_id` = '{$opleiding}', 
                            `semester` = '{$semester}', 
                            `periode` = '{$periode}',
                            `cohort` = '{$cohort}' 
                        WHERE `cursusid` = '{$id}';";

$result= mysqli_query($conn,$sql);

if($result)
{
    header("Location: ./index.php?content=message&alert=cursus-geupdate");
}
else
{
    header("Location: ./index.php?content=message&alert=cursus-update-error");
}
?>