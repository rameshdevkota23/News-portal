<?php

session_start();
function redirect($page)
{
    echo '<script type="text/javascript">
        window.location = "'.$page.'";
    </script>';
}
if(!isset($_SESSION['admin']))
{
    redirect('index.php');
}

    //unset($_SESSION['admin']);
    session_destroy();
    redirect('index.php');

  ?>