<?php

try {
    $bd = new PDO('mysql:host=localhost;dbname=protocolo', 'root' , '');
    $bd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}