<?php
include_once "./Models/Db.php";

function getCategories()
{
    $sql = "SELECT * FROM `categories` ORDER BY id DESC";

    return pdo_query($sql);
}

function getCategory($id)
{
    $sql = "SELECT * FROM `categories` WHERE id = " . $id;

    return pdo_query_one($sql);
}

function postCategory($name, $description, $imageUrl, $imageAlt)
{
    $sql = "INSERT INTO `categories`(`name`, `description`, `image_url`, `image_alt`) 
    VALUES ('$name', '$description','$imageUrl','$imageAlt')";

    return  pdo_execute($sql);
}

function putCategory($name, $description, $imageUrl, $imageAlt, $id)
{
    $sql = "UPDATE `categories` SET `name`='$name',`description`='$description',`image_url`='$imageUrl',`image_alt`='$imageAlt' WHERE id =" . $id;
    pdo_execute($sql);
}

function deleteCategory($id)
{
    $sql = "DELETE FROM `categories` WHERE id = " . $id;
    pdo_execute($sql);
}