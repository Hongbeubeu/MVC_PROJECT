<?php
	
    function redirect( $controller, $action ){
        header('Location: ' . URL_ROOT . '?controller=' . $controller . '&action='. $action);
    }
?>