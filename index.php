<?php
    session_start();

    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section class="content">
        <header class="header">
            
            <?php
                    include 'header.php';

            ?>
        </header>

        <section class="articlesSection" id="usArticles">
            <h2 class="articlesTitle">U.S.</h2>
            <div class="articles">
            <?php
                    $arhivirati = 0;
                    $category = "US";
                    $query = "SELECT * FROM clanak WHERE kategorija = ? AND arhivirati = ? LIMIT 3;";
                    $stmt = mysqli_stmt_init($dbc);
                    if (!mysqli_stmt_prepare($stmt, $query)) {
                        echo "failed";
                    } else {
                        mysqli_stmt_bind_param($stmt, "si", $category, $arhivirati);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                                <div class='articlediv'>
                                    <a href='./clanak.php?id=${row['id']}'>

                                        <img src='img/${row['slika']}' alt='${row['slika']}' class='imgs'>
                                        <h4>${row['naslov']}</h4>
                                    </a>
                                </div>
                            ";
                        }
                    }
                ?>




                
            </div>
        </section>

        <section class="articlesSection" id="worldArticles">
            <h2 class="articlesTitle">World</h2>
            <div class="articles">
                <?php
                        $arhivirati = 0;
                        $category = "World";
                        $query = "SELECT * FROM clanak WHERE kategorija = ? AND arhivirati = ? LIMIT 3;";
                        $stmt = mysqli_stmt_init($dbc);
                        if (!mysqli_stmt_prepare($stmt, $query)) {
                            echo "failed";
                        } else {
                            mysqli_stmt_bind_param($stmt, "si", $category, $arhivirati);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "
                                    <div class='articlediv'>
                                        <a href='./clanak.php?id=${row['id']}'>

                                            <img src='img/${row['slika']}' alt='${row['slika']}' class='imgs'>
                                            <h4>${row['naslov']}</h4>
                                        </a>
                                    </div>
                                ";
                            }
                        }
                    ?>
            </div>
        </section>

        

        <footer>
            <hr>
            <h5>2019 NEWSWEEK</h5>
        </footer>
    </section>
    
</body>
</html>