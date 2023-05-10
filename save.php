<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get form data
$company_name = $_POST['company_name'];
$contact_name = $_POST['contact_name'];
$contact_title = $_POST['contact_title'];
$birth_date = $_POST['birth_date'];
$country = $_POST['country'];
$region = $_POST['region'];
$state = $_POST['state'];
$city = $_POST['city'];
$address = $_POST['address'];
$postal_code = $_POST['postal_code'];
$phone_number = $_POST['phone_number'];
$fax = $_POST['fax'];
$credit_limit = $_POST['credit_limit'];




// Generate id
$id = strtoupper(substr($company_name, 0, 3)) . rand(1000, 9999);

// Connect to SQL Server database
$serverName = "DESKTOP-DNC83DC\sqlexpress";
$connectionOptions = array(
    "Database" => "CeleProject",
    "Uid" => "DESKTOP-DNC83DC",
    "PWD" => ""
);
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("Connection failed: " . sqlsrv_errors());
}

// Insert data into database
$sql = "INSERT INTO registrations (id, company_name, contact_name, contact_title, birth_date, country, region, state, city, address, postal_code, phone_number, fax, credit_limit ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$params = array($id, $company_name, $contact_name, $contact_title, $birth_date, $country, $region, $state, $city, $address, $postal_code);
$stmt = sqlsrv_prepare($conn, $sql, $params);

if (!$stmt) {
    die("Statement preparation failed: " . sqlsrv_errors());
}

if (sqlsrv_execute($stmt) === false) {
    die("Statement execution failed: " . sqlsrv_errors());
}

// Close database connection
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);

// Redirect to success page
header('Location: success.html');

?>