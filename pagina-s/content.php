<div class="container-fluid">
<?php
   
        if (isset($_GET['content'])) {
            if (file_exists('pagina-bezoeker/' . $_GET['content'] . '.php')) {
                include 'pagina-bezoeker/' . $_GET['content'] . '.php';
            }
            elseif (file_exists('scripts/' . $_GET['content'] . '.php'))
            {
                include 'scripts/' . $_GET['content'] . '.php';
            }
            
            elseif(file_exists('pagina-s/' . $_GET['content'] . '.php'))
            {
                include 'pagina-s/' . $_GET['content'] . '.php';
            }
            elseif(file_exists('pagina-r/' . $_GET['content'] . '.php'))
            {
                include 'pagina-r/' . $_GET['content'] . '.php';
            }
            elseif(file_exists('docent/' . $_GET['content'] . '.php'))
            {
                include 'docent/' . $_GET['content'] . '.php';
            }
            elseif(file_exists('student/' . $_GET['content'] . '.php'))
            {
                include 'student/' . $_GET['content'] . '.php';
            }
            elseif(file_exists('admin/' . $_GET['content'] . '.php'))
            {
                include 'admin/' . $_GET['content'] . '.php';
            }
            elseif(file_exists('root/' . $_GET['content'] . '.php'))
            {
                include 'root/' . $_GET['content'] . '.php';
            }
            
        }
           
    ?>
</div>