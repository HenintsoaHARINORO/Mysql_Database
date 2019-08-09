<?php
function get_name(){
$pdo=new pdo('mysql:dbname=identity;host=localhost','root',null);
$result=$pdo->query('SELECT * FROM members');
$rows=$result->fetchAll();
return $rows;
}
echo count(get_name());

?>