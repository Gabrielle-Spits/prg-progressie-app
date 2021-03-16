<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<ul  class="navbar-nav">
    <?php        
        if (isset($_SESSION["id"]))
        {
                switch($_SESSION["rollen"])
                {
                        case 'admin':
                                echo'<li class="nav-item">
                                        <a class="nav-link" href="./index.php?content=home-a">home-admin<span
                                        class="sr-only">(current)</span></a>
                                </li>';
                        break;
                        case 'root':
                                echo'<li class="nav-item">
                                <a class="nav-link" href="./index.php?content=home-r">home-root<span
                                class="sr-only">(current)</span></a>
                                </li>';
                        break;
                        case 'moderator':
                                echo'<li class="nav-item">
                                <a class="nav-link" href="./index.php?content=home-m">home-moderator<span
                                class="sr-only">(current)</span></a>
                                </li>';
                        break;
                        case 'customer':
                                echo'<li class="nav-item">
                                <a class="nav-link" href="./index.php?content=home-c">home-customer<span
                                class="sr-only">(current)</span></a>
                                </li>';
                        break;
                        case 'student':
                                echo'<li class="nav-item">
                                <a class="nav-link" href="./index.php?content=s">home-student<span
                                class="sr-only">(current)</span></a>
                                </li>';
                        break;
                        case 'docent':
                                echo'<li class="nav-item">
                                <a class="nav-link" href="./index.php?content=d">home-docent<span
                                class="sr-only">(current)</span></a>
                                </li>';
                                echo'<li class="nav-item">
                                <a class="nav-link" href="./index.php?content=overzicht-studenten">overzicht-studenten<span
                                class="sr-only">(current)</span></a>
                                </li>';
                                echo'<li class="nav-item">
                                <a class="nav-link" href="./index.php?content=cursus">cursussen<span
                                class="sr-only">(current)</span></a>
                                </li>';
                        break;
                }
        }
        else
        {
                echo'<li class="nav-item">
                <a class="nav-link" href="./index.php?content=home">home<span
                class="sr-only">(current)</span></a>
                </li>';
        }                              
    ?>
</ul>
<ul class="navbar-nav ml-auto">
    <?php

        if(isset($_SESSION["id"]))
        {
                echo' <li class="nav-item">
                <a class="nav-link" href="./index.php?content=uitloggen">uitloggen<span
                class="sr-only">(current)</span></a>
                </li>';
        }
        else
        {
                echo' <li class="nav-item">
                <a class="nav-link" href="./index.php?content=register">registreren<span
                class="sr-only">(current)</span></a>
                </li>';
                echo'<li class="nav-item">
                <a class="nav-link" href="./index.php?content=login">inloggen<span
                class="sr-only">(current)</span></a>
                </li>';

        }
                                 
    ?>
</ul>
</nav>
</div>