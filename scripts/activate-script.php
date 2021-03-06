<?php

include("./scripts/connect_db.php");
include("./scripts/functions.php");

$id = sanitize($_POST["id"]);
$pwh = sanitize($_POST["pwh"]);
$password = sanitize($_POST["Wachtwoord"]);
$passwordcheck = sanitize($_POST["Wachtwoordcheck"]);


if(empty($_POST["Wachtwoord"]) || empty($_POST["Wachtwoordcheck"])) 
{
    header("Location: ./index.php?content=message&alert=leeg-wachtwoord&id=$id&pwh=$pwh");
}
elseif(strcmp($password , $passwordcheck))
{
    header("Location: ./index.php?content=message&alert=niet-gelijk-wachtwoord&id=$id&pwh=$pwh");
}
else
{
        $sql = "SELECT * FROM `register/inloggen` WHERE `id` = $id";

        $result= mysqli_query($conn, $sql);

        if(mysqli_num_rows($result))
        {
            $record = mysqli_fetch_assoc($result);

            if($record["geactiveerd"])
            {
                header("Location: ./index.php?content=message&alert=al-geactiveerd");
            }
            else
            {
                if(!strcmp($record["wachtwoord"],$pwh))
                {
                    $password_hash = password_hash($password,PASSWORD_BCRYPT);

                    $sql ="UPDATE `register/inloggen` 
                    SET `wachtwoord` = '$password_hash', 
                        `geactiveerd` = 1
                    WHERE `id` = $id
                    AND   `wachtwoord` ='$pwh'";

                    if(mysqli_query($conn,$sql))
                    {
                        header("Location: ./index.php?content=message&alert=update-gelukt");
                    }
                    else
                    {
                        header("Location: ./index.php?content=message&alert=update-error&id=$id&pwh=$pwh");
                    }
                }
                else{
                    header("Location: ./index.php?content=message&alert=no-match-pwh");
                }
            }
        }
}
?>