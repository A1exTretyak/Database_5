<?php
include "functions.php";
$list=listClass();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Форма добавления</title> 
    </head>
    <body> 
        <div>
            <form action="addController.php" method="POST" role='form'>
                <div>
                    <div>
                        <label for="full_name">ФИО</label>
                        <div>
                            <input id="full_name" type="text" name="full_name"/>
                        </div>
                    </div>
                    <div>
                        <label for="birth_date">Дата рождения</label>
                        <div>
                            <input id="birth_date" type="date" name="birth_date"/>
                        </div>
                    </div>
		    <div>
                        <label for="address">Домашний адрес</label>
                        <div>
                            <input id="address" type="text" name="address"/>
                        </div>
                    </div>
                    <div>
                        <label for="phone">Номер телефона</label>
                        <div>
                            <input id="phone" type="text" name="phone"/>
                        </div>
                    </div>


                    <div>
                        <label for="IDtour">Код класса</label>
                        <div>
                            <select id="student_id" name="student_id">
                                <?php
                                for($i=0; $i<count($list); $i++)
                                {
                                    $idstudent=$list[$i]['student_id'];
                                    $idclass=$list[$i]['class_id'];
                                    echo '<option value="'.$idstudent.'">'.$idclass.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>


                    <button type="submit" name="add">Добавить</button>
                </div>
            </form>
        </div>
    </body>
<html></html>