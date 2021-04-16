<?php
$message ='<!doctype html>
<html lang="en">
            <head>
                 <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <style>
                    body{
                        background:  #b3f0ff;
                        font-size: 1.3em;
                    }
                </style>
                <title>Hello, world!</title>
            </head>
            <body>
            <tr>
            <td>
            '. $array["date"]. ' ' . $array["time"] .'
            </td>
            </t>
                <h2>beste bezoeker,</h2>
                <p>u heeft u onlangs geregistreerd voor de site http://prg-zelf/index.php?content=home</p>
                <p>klik <a href="http://prg-zelf/index.php?content=activate&id='.
                $id. '&pwh='.$array['password_hash'].'">hier</a> voor de activeren en het wijzigen van het wachtwoord van uw account</p>
                <p>dankuwel voor het registreren</p>
                <p>Met vriendelijke groet,</p>
                <p>Gabrielle Spits</p>
                <p>CEO pmalg</p>
                

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            </body>
        </html>';

?>