

<?php
require_once("../controller/env.php");
/**
 * Crea una nova connexió amb la base de dades
 *
 * @return PDO objecte PDO amb la connexió
 */
function getConnection()
{
    try {
        return new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
    } catch (PDOException $e) {
        die(DB_MSG_ERROR);
    }
}
?>