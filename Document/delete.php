<?php
require '../condb.php';
$D_ID = $_GET['id'];
$sql = 'DELETE FROM document WHERE D_ID=?';
$statement = $connection->prepare($sql);
if ($statement->execute([$D_ID])) {
  header("Location: ../Document/show.php");
}