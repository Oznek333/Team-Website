<?php
 
try {
    $db = new PDO("mysql:host=127.0.0.1;dbname=codebytim", "codebytim", "codebytimportfolio2023");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
}

