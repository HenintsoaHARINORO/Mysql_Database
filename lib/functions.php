<?php
function get_conection(){
    $config=require 'config.php';
    return new PDO(
        $config['database_dsn'],
        $config['database_user'],
        $config['database_pass']
    );
}
function get_pets($limit=0)
{
   $pdo=get_conection();
$query ='SELECT * FROM pet';
if($limit){
 $query=query.'LIMIT'.$limit;
}
    $result=$pdo->query('SELECT *FROM pet  LIMIT ' .$limit);
    $pets=$result->fetchAll();
    return $pets;
}

function get_pets($id){
$pdo=get_conection();
    $query='SELECT FROM * pet WHERE id='.$id;
    $result=$pdo->query($query);

    return $result->fetch();
}

function save_pets($petsToSave)
{
    $json = json_encode($petsToSave, JSON_PRETTY_PRINT);
    file_put_contents('data/pets.json', $json);
}
