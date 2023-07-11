<?php require_once('./database/connection.php') ?>

<?php
session_start();
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('location: ./');
}

$sql = "DELETE FROM `users` WHERE `id` = $id";
$is_deleted = $conn->query($sql);

if($is_deleted) {
    $_SESSION['success'] = "Magic has been spelled!";
    header('location: ./');
} else {
    $_SESSION['failure'] = "Magic has failed to spell!";
}
