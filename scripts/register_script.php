<?php


if(empty($_POST["email"]))
{
    header("Location: ./index.php?content=message&alert=no-email");
}
else
{
    include("./scripts/connect_db.php");
    include("./scripts/functions.php");

    $email = sanitize($_POST["email"]);

    $sql = "SELECT * from `register/inloggen` Where `email` = '$email'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result))
    {
        header("Location: ./index.php?content=message&alert=email-bestaat");

    }
    else
    {
        $chop_email = explode("@", $email);

        if(!strcmp("mboutrecht.nl",$chop_email[1]))
        {
            $sql = "SELECT `medewerkerafkorting` FROM medewerker WHERE `medewerkerafkorting` = '$chop_email[0]'";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result))
            {
                $array = mk_password_hash_from_microtime();
                $rollen ="docent";

                $sql = "INSERT INTO `register/inloggen` 
                                                        (`id`, 
                                                        `email`, 
                                                        `wachtwoord`, 
                                                        `rollen`,
                                                        `geactiveerd`)
                        VALUES                       
                                                        (NULL,
                                                        '$email',
                                                        '{$array["password_hash"]}', 
                                                        '{$rollen}',
                                                        0)";
                  if(mysqli_query($conn,$sql))
                  {
                      $id= mysqli_insert_id($conn);
                      $mbo_id = explode("@", $email)[0];
                    //   echo $id; echo $mbo_id;exit();

                      $sql = "UPDATE `medewerker`
                                SET  `register_id`= $id
                                WHERE `medewerkerafkorting` = '{$mbo_id}'";

                    if(!mysqli_query($conn,$sql))
                    {
                        header("Location: ./index.php?content=message&alert=registreren-fall");
                    }
      
                      $to = $email;
                      $subject ="activatiecode voor uw account van http://prg-zelf/index.php?content=home";
                      include("./scripts/alt-email.php");
      
                              $headers = "MIME-Version: 1.0\r\n";
                              $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                              $headers .= "From: admin@pma.com\r\n";
                              $headers .= "Cc: moderator@pma.com\r\n";
                              $headers .= "Bcc: root@hockeylg.org";
                              
                 
                              mail($to, $subject,$message,$headers);
                 
                 
                              header("Location: ./index.php?content=message&alert=registratie-succes");
                  } 
                  else
                  {
                          header("Location: ./index.php?content=message&alert=registreren-fall");
                  }      
            }
            else 
            {
                header("Location: ./index.php?content=message&alert=geen-organisatie");
            }
        }
        else if(!strcmp("student.mboutrecht.nl",$chop_email[1]))
        {
            $sql = "SELECT `studentnummer` FROM student  WHERE `studentnummer` = '$chop_email[0]'";
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result))
            {
                $array = mk_password_hash_from_microtime();
                $rollen ="student";

                $sql = "INSERT INTO `register/inloggen` (`id`, 
                                                    `email`, 
                                                    `wachtwoord`, 
                                                    `rollen`,
                                                    `geactiveerd`)
                        VALUES                       (NULL,
                                                    '$email',
                                                    '{$array["password_hash"]}', 
                                                    '{$rollen}',
                                                    0)";
                if(mysqli_query($conn,$sql))
                {
                    $id= mysqli_insert_id($conn);

                    $student_id = explode("@", $email)[0];

                    $sql=  "UPDATE `student`
                            SET `register_id` = $id
                            WHERE `studentnummer` = '{$student_id}'";

                    if(!mysqli_query($conn,$sql))
                    {
                        header("Location: ./index.php?content=message&alert=registreren-fall");
                    }
    
                    $to = $email;
                    $subject ="activatiecode voor uw account van http://prg-zelf/index.php?content=home";
                    include("./scripts/alt-email.php");

                            $headers = "MIME-Version: 1.0\r\n";
                            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                            $headers .= "From: admin@pma.com\r\n";
                            $headers .= "Cc: moderator@pma.com\r\n";
                            $headers .= "Bcc: root@hockeylg.org";
                            
               
                            mail($to, $subject,$message,$headers);
               
               
                            header("Location: ./index.php?content=message&alert=registratie-succes");
                } 
                else
                {
                        header("Location: ./index.php?content=message&alert=registreren-fall");
                }       
            }
            else 
            {
                header("Location: ./index.php?content=message&alert=geen-organisatie");
            }
        }
        else 
        {
              header("Location: ./index.php?content=message&alert=geen-organisatie");
        }
    
    }
}

?>