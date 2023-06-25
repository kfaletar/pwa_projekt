<?php
    include 'connect.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM clanak WHERE id = ?;";
    $stmt = mysqli_stmt_init($dbc);
    if (!mysqli_stmt_prepare($stmt, $query)) {
        echo "failed";
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
    }
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
            <?php 
                include 'header.php'
            ?>
        </header>

        <section class="articlePage">
            <h3><?php echo "${row['naslov']}"?></h3>
            <h2><?php echo "${row['sadrzaj']}"?></h2>
            <figure>
                <img src="<?php echo "img/${row['slika']}" ?>" alt="Image" style="width: 100%">
            </figure>
            <div class="sectionBanner"><?php echo "${row['kategorija']}"?></div>
            <div class="pageContent">
                <?php echo "${row['sadrzaj']}"?>
            </div>
        </section>





        <footer>
            <hr>
            <h5>2019 NEWSWEEK</h5>
        </footer>
    </section>

</body>

</html>