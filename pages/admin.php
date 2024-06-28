<?php
    session_start();
    if(!$_SESSION['login_status']) {
        header('Location: /');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Admin</title>
</head>
<body>
    <header>
        <h2>Таблицы</h2>
        <ul>
            <li>
                <a href="?table=Заявки">Заявки</a>
            </li>
            <li>
                <a href="?table=Отзывы">Отзывы</a>
            </li>
        </ul>
        <a class="logout" href="../scripts/php/logout.php">Выход</a>
    </header>
    <main>
        <?php
            include('../scripts/php/connect.php');
        ?>
        <h2 class="h2"><?= $_GET['table']?></h2>
        <?php
        
        switch ($_GET['table']) {
            case 'Заявки':
                $result = $conn -> query("select * from application");
                echo "<table><tr><th>ID</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Почта</th><th>Направление</th><th>Удаление</th></tr>";
                foreach($result as $row){
                    echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["surname"] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row["patronymic"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["direction"] . "</td>";
                        echo "<td>
                                <div class='conf'>                   
                                  <form class='delete' action='../scripts/php/delete.php' method='POST'>
                                    <input type='hidden' name='id' value='" . $row["id"] . "' />
                                    <input type='hidden' name='table' value='application' />
                                    <input type='submit' value='Удалить'>
                                  </form>
                                </div>
                              </td>";      
                    echo "</tr>";
                }
                echo "</table>";
                break;

            case 'Отзывы':
                $result = $conn -> query("select * from review");
                echo "<table><tr><th>ID</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Почта</th><th>Отзыв</th><th>Удаление</th></tr>";
                foreach($result as $row){
                    echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row['surname'] . "</td>";
                        echo "<td>" . $row["patronymic"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["review"] . "</td>";  
                        echo "<td>
                                <div class='conf'>                 
                                  <form class='delete' action='../scripts/php/delete.php' method='POST'>
                                    <input type='hidden' name='id' value='" . $row["id"] . "' />
                                    <input type='hidden' name='table' value='review' />
                                    <input type='submit' value='Удалить'>
                                  </form>
                                </div>
                              </td>";      
                    echo "</tr>";
                }
                echo "</table>";
                break;
            }
        ?>
    </main>
</body>
</html>