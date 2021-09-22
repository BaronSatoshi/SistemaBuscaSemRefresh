<?php

$host = 'firebird:dbname=C:\xampp\htdocs\BuscaDinamico\BUSCA.fdb';

$username = 'SYSDBA';

$password = 'masterkey';

$con = new PDO($host, $username, $password);


/*if($con){
    echo 'Deu certo';
} else{
    echo 'Erro: ' . get_message(); 
}*/

?>