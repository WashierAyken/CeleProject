 <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Búsqueda de Usuarios</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
</head>
<body>
<div class="container">
    <h1>Búsqueda de Usuarios</h1>
    <form method="post" action="search.php">
        <div class="form-group">
            <label for="search_type">Tipo de Búsqueda:</label>
            <select id="search_type" name="search_type">
                <option value="company_name">Nombre de la Empresa</option>
                <option value="contact_name">Nombre de Contacto</option>
                <option value="country">País</option>
            </select>
        </div>
        <div class="form-group">
            <label for="search_query">Criterio de Búsqueda:</label>
            <input type="text" id="search_query" name="search_query" required>
        </div>
        <div class="form-group">
            <button type="submit">Buscar</button>
        </div>
    </form>

    <?php
    // Verificar si se envió una búsqueda
    if (isset($_POST['search_type']) && isset($_POST['search_query'])) {
        // Obtener los datos de búsqueda
        $searchType = $_POST['search_type'];
        $searchQuery = $_POST['search_query'];

        $host = "localhost";
        $dbname = "celeproject";
        $user = "root";
        $password = "";

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        if ($conn === false) {
            die("Connection failed.");
        } else {
            echo "Connected successfully.";
        }
        // Por simplicidad, asumiremos que los resultados se almacenan en un array llamado $results
    
        // Mostrar los resultados de la búsqueda
        if (!empty($results)) {
            echo '<h2>Resultados de la Búsqueda:</h2>';
            foreach ($results as $result) {
                echo '<div class="user-result">';
                echo '<h3>' . $result['company_name'] . '</h3>';
                echo '<p>Contacto: ' . $result['contact_name'] . '</p>';
                echo '<p>País: ' . $result['country'] . '</p>';
                // Mostrar más detalles o enlaces relevantes aquí
                echo '</div>';
            }
        } else {
            echo '<p>No se encontraron resultados.</p>';
        }
    }
    ?>
</div>
</body>
</html> 