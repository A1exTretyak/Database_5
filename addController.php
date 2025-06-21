<?php
include "functions.php";
addInfo($_POST['class_id'], $_POST['full_name'], $_POST['birth_date'], $_POST['address'], $_POST['phone']);
header("Location:index.php");
?>



