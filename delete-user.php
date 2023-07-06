<?php require_once('./database/connection.php') ?>

<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('location: ./');
}

$sql = "DELETE FROM `users` WHERE `id` = $id";
$is_deleted = $conn->query($sql);

if($is_deleted) {
    header('location: ./');
} else {
    echo "Magic has failed to spell!";
}
