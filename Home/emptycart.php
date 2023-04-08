<?php
session_start();

unset($_SESSION['cartt']);

header("location: chitiet.php");