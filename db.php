<?php

if (getenv("MYSQLHOST")) {

    // Cloud Environment (Render / Railway / Docker Networks)
    $conn = mysqli_connect(
        getenv("MYSQLHOST"),
        getenv("MYSQLUSER"),
        getenv("MYSQLPASSWORD"),
        getenv("MYSQLDATABASE"),
        (int)getenv("MYSQLPORT")
    );

} else {

    // Local Environment Fallback
    // Note: Set to 'host.docker.internal' so your Docker container can see your local machine's MySQL.
    // If you run locally via XAMPP without Docker, you can change this back to 'localhost'.
    $conn = mysqli_connect(
        "localhost", 
        "root",
        "",
        "simple_menu",
        3306 // Standard MySQL port (change to 3307 if using custom XAMPP port)
    );

}

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
