<?php
$connection_data = [
    'db_host' => 'mysql',
    'db_user' => 'root',
    'db_pass' => 'ROOT',
    'db_db' => 'articles'
];


function getAllArticles() {
    $conn_data = $GLOBALS["connection_data"];
    $conn = mysqli_connect($conn_data['db_host'], $conn_data['db_user'], $conn_data['db_pass'], $conn_data['db_db']);
    $sql = "SELECT a.*, aa.name AS aa_name, aa.surname AS aa_surname, i.path FROM articles.article a LEFT JOIN articles.contains c ON c.id_articles = a.id LEFT JOIN articles.image i ON c.id_image = i.id JOIN articles.author aa ON a.author_id = aa.id GROUP BY a.id";
    $res = mysqli_query($conn, $sql);
    mysqli_close($conn);

    $returnData = [];
    while ($row = mysqli_fetch_assoc($res))
        $returnData[] = $row;
    return $returnData;
}

function getArticleById(int $id) {
    $conn_data = $GLOBALS["connection_data"];
    $conn = mysqli_connect($conn_data['db_host'], $conn_data['db_user'], $conn_data['db_pass'], $conn_data['db_db']);
    $sql = "SELECT * FROM articles.article WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    mysqli_close($conn);

    return mysqli_fetch_assoc($res);
}

function getImagesByArticleId(int $id) {
    $conn_data = $GLOBALS["connection_data"];
    $conn = mysqli_connect($conn_data['db_host'], $conn_data['db_user'], $conn_data['db_pass'], $conn_data['db_db']);

    $sql = "SELECT i.path AS path FROM articles.article a LEFT JOIN articles.contains c ON c.id_articles = a.id LEFT JOIN articles.image i ON c.id_image = i.id WHERE a.id=$id";
    $res = mysqli_query($conn, $sql);
    mysqli_close($conn);

    $returnData = [];
    while ($row = mysqli_fetch_assoc($res))
        $returnData[] = $row;
    return $returnData;
}
