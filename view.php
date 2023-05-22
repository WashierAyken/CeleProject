<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Información del Usuario</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
</head>
<body>
<div class="container">
    <h1>Información del Usuario</h1>
    <div class="form-group">
        <label>Company Name:</label>
        <span><?php echo $_POST['company_name']; ?></span>
    </div>
    <div class="form-group">
        <label>Nombre del Contacto:</label>
        <span><?php echo $_POST['contact_name']; ?></span>
    </div>
    <div class="form-group">
        <label>Título del Contacto:</label>
        <span><?php echo $_POST['contact_title']; ?></span>
    </div>
    <div class="form-group">
        <label>Fecha de Nacimiento:</label>
        <span><?php echo $_POST['birth_date']; ?></span>
    </div>
    <div class="form-group">
        <label>País:</label>
        <span><?php echo $_POST['country']; ?></span>
    </div>
    <div class="form-group">
        <label>Estado:</label>
        <span><?php echo $_POST['state']; ?></span>
    </div>
    <div class="form-group">
        <label>Ciudad:</label>
        <span><?php echo $_POST['city']; ?></span>
    </div>
    <div class="form-group">
        <label>Dirección:</label>
        <span><?php echo $_POST['address']; ?></span>
    </div>
    <div class="form-group">
        <label>Código Postal:</label>
        <span><?php echo $_POST['postal_code']; ?></span>
    </div>
    <div class="form-group">
        <label>Número de Teléfono:</label>
        <span><?php echo $_POST['phone_number']; ?></span>
    </div>
    <div class="form-group">
        <label>Fax:</label>
        <span><?php echo $_POST['fax']; ?></span>
    </div>
    <div class="form-group">
        <label>Limite de crédito:</label>
        <span><?php echo $_POST['credit_limit']; ?></span>
    </div>
</div>
</body>
</html>
