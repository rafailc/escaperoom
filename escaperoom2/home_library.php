<?php
    function PostValue($key, $emptyValue){
        if (key_exists($key, $_POST)) {
            $value = $_POST[$key];
        } else {
            $value = $emptyValue;
        }
        return $value;
    }    
?>