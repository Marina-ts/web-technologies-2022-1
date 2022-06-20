<?php
include_once('model/db.php');

function commentById(string $id) {
    $sql = "SELECT * FROM comments WHERE product_id=:product_id";
    $query = dbQuery($sql, ['product_id' => $id]);
    return $query->fetchAll();
}

function createComment(string $id, string $text) {
    $sql = "INSERT INTO `comments`(`product_id`, `text`) VALUES ('$id','$text')";
    $query = dbQuery($sql);
    return $query;
}

function deleteComment(string $id) {
    $sql = "DELETE FROM `comments` WHERE id=:id;";
    $query = dbQuery($sql, ['id' => $id]);
    return $query;
}

function updateComment(string $id, string $text) {
    $sql = "UPDATE `comments` SET `text`='$text' WHERE id=:id";
    $query = dbQuery($sql, ['id' => $id]);
    return $query;
}