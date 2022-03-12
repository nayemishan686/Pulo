<?php 
    function senitize($data){
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }


?>