<?php
include("./scripts/connect_db.php");
include("./scripts/functions.php");

$id = sanitize($_GET["id"]);

$sql= "DELETE FROM `cursus` WHERE `cursus`.`cursusid` = $id";

$result= mysqli_query($conn,$sql);

if($result)
{
    header("Location: ./index.php?content=message&alert=cursus-verwijderd");
}
else
{
    header("Location: ./index.php?content=message&alert=cursus-error");
}
?>