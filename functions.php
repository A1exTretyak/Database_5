<?php
$link=false;
function OpenDB()
{
    global $link;
    $link = mysqli_connect("localhost", "root", "", "school");
    mysqli_query($link, "SET NAMES UTF8");
}
function CloseDB()
{
    global $link;
    mysqli_close($link);
}
function getInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM student");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function addInfo($idclass, $fio, $birth,  $home, $phonenumber)
{
    global $link;
    OpenDB();
    $add=mysqli_query($link, "INSERT into student (class_id, full_name, birth_date, address, phone) value ('$idclass', '$fio', '$birth', ' $home', '$phonenumber')");
    CloseDB();
    return $add;
}
function listClass()
{
    global $link;
    OpenDB();
    $list=mysqli_query($link, "SELECT * FROM class");
    CloseDB();
    return mysqli_fetch_all($list, MYSQLI_ASSOC);
}
?>
