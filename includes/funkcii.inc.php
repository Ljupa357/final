<?php
function emptyInputSignup($name, $uid, $pwd, $city) {
    $result;
    if(empty($name) || empty($uid) ||  empty($pwd) || empty($city)){
      
       $result = true;
    }
    else{
        $result = false;
    }
    return $result;

}