<?php
function isAdmin(){
    if (isLoged()){
        if ($_SESSION['login']['role'] == 2){
            return true;
        }
    }
    return false ;
}