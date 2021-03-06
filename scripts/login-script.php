<?php 
 include("./scripts/connect_db.php");
 include("./scripts/functions.php");

 $email = sanitize($_POST["email"]);
 $password = sanitize($_POST["Wachtwoord"]);

 if(empty($email) || empty($password))
 {
     header("Location: ./index.php?content=message&alert=login-form-empty");
 }
 else
 {
    $sql="SELECT * FROM `register/inloggen` WHERE `email` = '$email'";

    $result=mysqli_query($conn,$sql);

    if(!mysqli_num_rows($result))
    {
        header("Location: ./index.php?content=message&alert=email-onbekend");
    }
    else
    {
        $record= mysqli_fetch_assoc($result);

        if(!$record["geactiveerd"])
        {
          header("Location: ./index.php?content=message&alert=acount-niet-geactiveerd&email=$email");
        }
        elseif(!password_verify($password,$record["wachtwoord"]))
        {
            header("Location: ./index.php?content=message&alert=no-pw-match");
        }
        else
        {
            $_SESSION["id"] = $record["id"];
            $_SESSION["rollen"] = $record["rollen"];
            //'admin','super-admin','moderator','root','customer'
              switch($record["rollen"])
              {
                case'customer':
                  header("Location: ./index.php?content=home-c");
                break;
                case'root':
                  header("Location: ./index.php?content=home-r");
                break;
                case'moderator':
                  header("Location: ./index.php?content=home-m");
                break;
                case'admin':
                  header("Location: ./index.php?content=home-a");
                break;
                case'student':
                  header("Location: ./index.php?content=home-s");
                break;
                case'docent':
                    header("Location: ./index.php?content=home-d");
                  break;
                default: 
                header("Location: ./index.php?content=home");
              break;
            }
        }
    }
 }