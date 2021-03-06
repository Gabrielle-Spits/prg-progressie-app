<?php
$alert= (isset($_GET["alert"]))? $_GET["alert"]: "default";
$id= (isset($_GET["id"]))? $_GET["id"]: "";
$pwh= (isset($_GET["pwh"]))? $_GET["pwh"]: "";

switch($_GET["alert"])
{
    case 'no-email' :
        echo '<div class="alert alert-primary w-50 mx-auto mt-5" role="alert">
                U heeft geen email ingevuld, probeer het opnieuw...
            </div>';
        header("Refresh: 3; url=./index.php?content=register");
    break;
    case 'email-bestaat' :
        echo '<div class="alert alert-primary w-50 mx-auto mt-5" role="alert">
                Dit email staat al in de database.
            </div>';
        header("Refresh: 3; url=./index.php?content=register");
    break;
    case 'registratie-succes' :
        echo '<div class="alert alert-success w-50 mx-auto mt-5" role="alert">
                u bent met succes aangemeld u ontvangt een activatiemail voor het voltooien van het registreren.
            </div>';
        header("Refresh: 3; url=./index.php?content=home");
    break;
    case 'registreren-fall' :
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
                helaas het is fout gegaan probeer het opnieuw
            </div>';
        header("Refresh: 3; url=./index.php?content=registreren");
    break;
    case 'hacker-alert' :
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
                u heeft geen rechten op deze pagina
            </div>';
        header("Refresh: 3; url=./index.php?content=home");
    break;
    case 'leeg-wachtwoord' :
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
                u heeft een van beide wachtwoordvelden niet ingevoerd. Probeer het opnieuw
            </div>';
        header("Refresh: 3; url=./index.php?content=activate&id=$id&pwh=$pwh");
    break;
    case 'niet-gelijk-wachtwoord' :
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
                u heeft twee andere wachtwoorden ingevuld. probeer het opnieuw...
            </div>';
        header("Refresh: 3; url=./index.php?content=activate&id=$id&pwh=$pwh");
    break;
    case 'al-geactiveerd' :
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
            u acount is al actief, log in met uw zelfgekozen wachtwoord en emailadres.
            </div>';
        header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'update-gelukt' :
        echo '<div class="alert alert-success w-50 mx-auto mt-5" role="alert">
                u bent succesvol geregistreerd u wordt doorgestuurd naar onze login page
            </div>';
        header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'update-error' :
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
                het registratieproces is niet gelukt, kies een nieuw wachtwoord
            </div>';
        header("Refresh: 3; url=./index.php?content=activate&id=$id&pwh=$pwh");
    break;
    case 'no-match-pwh':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" text-center role="alert">
        u activatielink gegevens zijn niet correct, registreer opnieuw
    </div>';
    break;
    case 'login-form-empty':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" text-center role="alert">
        een van beide velden is leeg probeer het opnieuw
    </div>';
    header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'email-onbekend':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" text-center role="alert">
        deze email is niet bekend in onze database probeer het opnieuw
    </div>';
    header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'acount-niet-geactiveerd':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" text-center role="alert">
        u acount is nog niet geactiveerd. check u mail <span class="badge badge-danger p-2">'. $email .'</span> voor het klikken op de activatielink
    </div>';
    header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'no-pw-match':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" text-center role="alert">
        u ingevulde wachtwoord voor het emailadres<span class="badge badge-danger p-2">'. $email .'</span> is onjuist probeer het opnieuw
    </div>';
    header("Refresh: 3; url=./index.php?content=login");
    break;
    case 'uitloggen':
        echo '<div class="alert alert-success w-50 mx-auto mt-5" text-center role="alert">
        u bent met succes uitgelogd u wordt doorgestuurd naar de home page
    </div>';
    header("Refresh: 3; url=./index.php?content=home");
    break;
    default:
        header("./index.php?content=home");
    break;
    case 'autoriteit-error':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" text-center role="alert">
        u bent niet ingelogd, u wordt doorgestuurd naar de home page
    </div>';
    header("Refresh: 3; url=./index.php?content=home");
    break;
    case 'autoriteit-error-rollen':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" text-center role="alert">
        u heeft geen rechten op deze pagina, u wordt doorgestuurd naar de home page
    </div>';
    header("Refresh: 3; url=./index.php?content=home");
    case 'geen-organisatie':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" text-center role="alert">
        u hoort niet bij de organisatie van MBO Utrecht, u wordt doorgestuurd naar de home page
    </div>';
    header("Refresh: 3; url=./index.php?content=home");
    break;
}

?>