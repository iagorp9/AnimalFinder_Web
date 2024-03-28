<?php

if($_SERVER['SERVER_NAME'] == "localhost"){
    // Config Local
    define('DNS', 'mysql:host=localhost:3307;dbname=animal_finder');
    define('USER', 'root');
    define('PASSWORD', '');
}else{
    // Config Remota - Servidor
    define('DNS', 'mysql:host=localhost:3307;dbname=id19356966_animal_finder');
    define('USER', 'id19356966_animalfinder');
    define('PASSWORD', 'Z@@rf\MvT+%5yVDX');
}