<?php
require '../condb.php';
$T_ID = $_GET['id'];
$sql = 'DELETE FROM training WHERE T_ID=?';
$statement = $conn->prepare($sql);
if ($statement->execute([$T_ID])) {
  header("Location: ../Train/show.php");
}