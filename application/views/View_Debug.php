<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
    </head>
    <body>
    a que coucou bob
    <?php
        echo $this->session->isLogged ? "true" : "false";
    ?>
    </body>
</html>