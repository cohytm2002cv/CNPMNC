<?php
session_start();

if ($_POST['update']) {

  $upid = $_POST['upid'];

  $acol = array_column($_SESSION['cartt'], 'id');

  if (in_array($_POST['upid'], $acol)) {
    $_SESSION['cartt'][$upid]['qty'] = $_POST['qty'];
  } else {
    $item = [
      'id' => $upid,
      'qty' => 1
    ];
    $_SESSION['cartt'][$upid] = $item;
  }

  header("location: cart.php");
}
