<?php
$_username = "user";
$_password = "password";
$_host = "10.89.3.1";
$_database = "toko_online";
$_port = "6543";

try {
    // Specify the full DSN (Data Source Name)
    $_dsn = "pgsql:host=$_host;port=$_port;dbname=$_database";

    // Create a PDO instance
    $_connection = new PDO($_dsn, $_username, $_password);

    // Set PDO options to display errors clearly
    $_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection successful";

    // Perform other operations or queries here...

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
} finally {
    // Close the connection when done (optional)
    $_connection = null;
}
?>
