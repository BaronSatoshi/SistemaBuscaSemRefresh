<?php

include('config.php');

$busca = $_POST['busca'];

$query = $con->query("SELECT * FROM INFO WHERE NOME LIKE '%$busca%'");

if($query->rowCount() < 1){
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        echo utf8_encode($row['NOME'].' - '.$row['EMAIL']).'<br><hr>';
    }
}else{
    echo "Está Pessoa Não Existe";
}


?>