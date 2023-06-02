<?php
$host = 'localhost:3307';
$db   = 'producten';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "Connectie gemaakt!" . "<br>";
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$data = $pdo->query("SELECT * FROM winkel")->fetchAll();
foreach ($data as $row) {
    echo $row['product_naam']."<br/>";
}

$id = 10;
$stmt = $pdo->prepare("SELECT * FROM winkel WHERE product_code=?");
$stmt->execute([$id]); 
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

</body>
</html>