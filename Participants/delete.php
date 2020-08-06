<?php
require '../condb.php';
$P_ID = $_GET['id'];
$sql = 'DELETE FROM participants WHERE P_ID=?';
$statement = $conn->prepare($sql);
if ($statement->execute([$P_ID])) {
  header("Location: ../Participants/show.php");
}