<?php
// Consulta dados da tabela user

$sql = 'SELECT * FROM user';
$stm = $conn->prepare($sql);
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC); 

echo '<pre>';
print_r($result);   
echo '</pre>';
