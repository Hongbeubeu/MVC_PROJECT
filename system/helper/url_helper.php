<?php
    function redirect( $controller, $action ){
        header('Location: ' . URL_ROOT . '/admin/'.$controller.'/'.$action);
    }
?>