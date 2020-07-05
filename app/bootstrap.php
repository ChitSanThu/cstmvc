<?php
require_once "../app/configs/config.php";

spl_autoload_register(function($className){
require_once "../app/libs/".$className.".php";
});
