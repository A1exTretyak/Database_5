<?php
include "functions.php";
$info=getInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Домашнее задание по базам данных</title> 
    </head>
    <body> 
        <div>
            <a href='addForm.php?id=".$id."'>Добавить</a> 
            <table>
                <thead><th>Код</th><th>Код Класса</th><th>ФИО</th><th>Дата рождения</th><th>Домашний адрес</th><th>Номер телефона</th></thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $idstudent=$info[$i]["student_id"];
                    $idclass=$info[$i]["class_id"];
		    $fio=$info[$i]["full_name"];
                    $birth=$info[$i]["birth_date"];
                    $home=$info[$i]["address"];
		    $phonenumber=$info[$i]["phone"];
                    echo "<tr><td>$idstudent</td><td>$idclass</td><td>$fio</td><td>$birth</td><td>$home</td><td>$phonenumber</td></tr>";
                }
                ?>
            </table>
        </div>
    </body>
<html>