<?php 
    // maak de laden van $_SESSION array leeg met unset
    unset($_SESSION["id"]);
    unset($_SESSION["rollen"]);

    //verwijder het session_start bestand leeg
    session_destroy();

    header("Location: ./index.php?content=message&alert=uitloggen");    
?>