<?php

include_once 'model.php';

if (!isset($_GET) && array_key_exists("id", $_GET))
    die("ID non valido.");

$id = $_GET["id"];
$article = getArticleById($id);
$images = getImagesByArticleId($id);

if (count($images) == 1 && $images[0]["path"] == null)
    $images = [];
