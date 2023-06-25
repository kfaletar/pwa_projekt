
<?php
    

    include 'connect.php';
    
        if(isset($_FILES["slika"])){
            $slika = $_FILES["slika"]["name"];
            
        

            $target_dir = 'img/'.$slika;

            move_uploaded_file($_FILES["slika"]["tmp_name"], $target_dir);

            if(isset($_POST["naslov"]) && isset($_POST["sazetak"]) && isset($_POST["sadrzaj"]) && isset($_POST["kategorija"])){
                $naslov=$_POST["naslov"];
                $sazetak=$_POST["sazetak"];
                $sadrzaj=$_POST["sadrzaj"];
                $kategorija=$_POST["kategorija"];
                if(isset($_POST["arhivirati"])){
                    $arhivirati=1;
                }else{
                    $arhivirati=0;
                }
            


                $query = "INSERT INTO clanak (naslov, sazetak, sadrzaj, kategorija,
                slika, arhivirati ) VALUES ('$naslov', '$sazetak', '$sadrzaj', 
                '$kategorija','$slika', '$arhivirati')";

                $result = mysqli_query($dbc, $query) or die('Error querying databese.');
                mysqli_close($dbc);
            }
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
        <header class="header">
            <?php 
                include 'header.php'
            ?>
        </header>

        <section class="articlePage">
            <h3><?php echo $kategorija; ?></h3>
            <h2><?php echo $naslov; ?></h2>
            <figure>
                <img src="<?php echo 'img/' . $slika; ?>" alt="Image" style="width: 100%">
            </figure>
            <div class="sectionBanner">
                <?php echo $kategorija; ?>
            </div>
            <div class="pageContent">
                <?php echo $sadrzaj; ?>
            </div>
        </section>





        <footer>
            <hr>
            <h5>2019 NEWSWEEK</h5>
        </footer>
    </section>

</body>

</html>