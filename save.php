<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Obtener datos del formulario
$company_name = $_POST['company_name'];
$contact_name = $_POST['contact_name'];
$contact_title = $_POST['contact_title'];
$birth_date = $_POST['birth_date'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$address = $_POST['address'];
$postal_code = $_POST['postal_code'];
$phone_number = $_POST['phone_number'];
$fax = $_POST['fax'];
$credit_limit = $_POST['credit_limit'];

// Generar ID
$id = strtoupper(substr($company_name, 0, 3)) . rand(1000, 9999);

// Conectar a la base de datos
$host = "localhost";
$dbname = "celeproject";
$user = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

if ($conn === false) {
    die("Connection failed.");
}

// Insertar datos en la base de datos
$sql = "INSERT INTO customers (id, company_name, contact_name, contact_title, birth_date, country, state, city, address, postal_code, phone_number, fax, credit_limit) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$id, $company_name, $contact_name, $contact_title, $birth_date, $country, $state, $city, $address, $postal_code, $phone_number, $fax, $credit_limit]);




if ($stmt === false) {
    die("ERROR: Could not prepare/execute query: $sql.");
}

$conn = null;

header("Location: view.php");
exit();

?>
