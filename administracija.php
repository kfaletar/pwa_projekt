
<?php
    session_start();

    include 'connect.php';
    include 'header.php';
   
    echo '<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>';

   
    if(strlen($_SESSION['$username']>0)){
        $uspjesnaPrijava=TRUE;
        if($_SESSION['$razina']===1){
            $admin=TRUE;
        }else $admin=FALSE;
    }else{
        $uspjesnaPrijava = FALSE;
        $admin = FALSE; 
    }

    $uspjesnaPrijava = FALSE;
    $admin = FALSE; 
    

    echo 
            '<form class="formFancy" method="post" target="" >
                

                <div name="formdiv" id="formdiv">
                    <span id="porukaUsername"></span>
                    <label>Username:</label><br>
                    <input type="text" name="uname" id="uname" cols="20" rows="4"></textarea><br>
                    <br>
                </div>  

                <div name="formdiv" id="formdiv"></div>
                    <span id="porukaPassword"></span>
                    <label>Password: </label><br>
                    <input type="password" name="pass" id="pass" cols="20" rows="4"></textarea><br>

                    <br>
                    <br>
                </div>  

                <input type="submit" value="Prijava" id=login>


                


            </form>';

            

     if (isset($_POST['uname'], $_POST['pass'])){
        $username=$_POST["uname"];
        $password=$_POST["pass"];


        $hashed_password = password_hash($password, CRYPT_BLOWFISH);

        $sql = "SELECT * FROM korisnik WHERE username = ?";

        $stmt = mysqli_stmt_init($dbc);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, 's', $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);
            

            if (isset($row["password"])) {
                $uspjesnaPrijava = FALSE;
                    $admin = FALSE;
                    $_SESSION['$username'] = "";
                    $_SESSION['$razina'] = 0;
                    $_SESSION['$password'] = "";
                
                if (password_verify($password,$row["password"])) {
                    if ($row['razina'] === 1) {
                        
                        $uspjesnaPrijava = TRUE;
                        $admin = TRUE;
                        $_SESSION['$username'] = $row['username'];
                        $_SESSION['$razina'] = $row['razina'];
                        $_SESSION['$password'] = $password;
                    } elseif ($row['razina'] === 0) {

                        $uspjesnaPrijava = TRUE;
                        $admin = FALSE;
                        $_SESSION['$username'] = $row['username'];
                        $_SESSION['$razina'] = $row['razina'];
                        $_SESSION['$password'] = $password;
                        

                    }else{
                    }




                }else{

                    $uspjesnaPrijava = FALSE;
                    $admin = FALSE;
                    $_SESSION['$username'] = "";
                    $_SESSION['$razina'] = 0;
                    $_SESSION['$password'] = "";
                    echo 'Pogresna lozinka<br>Mozes napraviti racun na stranici ispod!';

                    echo "<br>uspj prijava je";
                    echo $uspjesnaPrijava;
                    echo        "
                                <div class='container text-center'>
                                <div class='row'>
                                    <div class='col d-flex justify-content-center m-4'>
                                        <form method='post' class='p-4 bg-white'>
                                            <button type='submit' class='bg-white'><a href='registracija.php'>Registracija</a></button>
                                        </form>
                                    </div>
                                </div>
                            </div>";
                }
            }else{
                    $uspjesnaPrijava = FALSE;
                        $admin = FALSE;
                        $_SESSION['$username'] = "";
                        $_SESSION['$razina'] = 0;
                        $_SESSION['$password'] = "";
                    echo 'Pogresna lozinka<br>Mozes napraviti racun na stranici ispod!';

                    echo "<br>uspj prijava je";
                    echo $uspjesnaPrijava;
                    echo        "
                                <div class='container text-center'>
                                <div class='row'>
                                    <div class='col d-flex justify-content-center m-4'>
                                        <form method='post' class='p-4 bg-white'>
                                            <button type='submit' class='bg-white'><a href='registracija.php'>Registracija</a></button>
                                        </form>
                                    </div>
                                </div>
                            </div>";
            }

       

       }
    }else{
        if (isset($_SESSION['$username'], $_SESSION['$password'], $_SESSION['$razina'])) {
            $username = $_SESSION['$username'];
                if(strlen($username)>0){
                $password = $_SESSION['$password'];
                $uspjesnaPrijava = TRUE;
                if ($_SESSION['$razina'] === 1) $admin = TRUE;
                else $admin = FALSE;
            }
        } 
    }

   
    if($uspjesnaPrijava===TRUE && $admin===FALSE){
        echo "Uspjesna prijava, no korisnik ${_SESSION['$username']} nema admin prava!";
    }
    if(  $uspjesnaPrijava === TRUE  && $admin===TRUE){
        echo "Prijavljeni ste kao administrator ${_SESSION['$username']} <br>";

        echo " <br><form method='post' class='p-4 bg-white'>
                    <button type='submit' class='bg-white'><a href='unos.php'>Unesi vijesti</a></button>
                </form>";


        $query = "SELECT * FROM clanak";


        $result = mysqli_query($dbc, $query);
        echo '<div class="articles">';

        while($row = mysqli_fetch_array($result)) {

            echo '

            <br>
            <div class="articlediv">
                <form enctype="multipart/form-data" action="" method="POST">
                <div class="form-item">
                    <label for="title">Naslov vjesti:</label>
                    <div class="form-field">
                        <input type="text" name="naslov" class="form-field-textual"
                        value="'.$row['naslov'].'">
                    </div>
                </div>
                <br>
                <div class="form-item">
                    <label for="about">Kratki sadržaj vijesti (do 50
                    znakova):</label>
                    <div class="form-field">
                        <textarea name="sazetak" id="" cols="30" rows="10" class="formfield-textual">'.$row['sazetak'].'</textarea>
                    </div>
                </div>
                <br>
                <div class="form-item">
                    <label for="content">Sadržaj vijesti:</label>
                    <div class="form-field">
                        <textarea name="sadrzaj" id="" cols="30" rows="10" class="formfield-textual">'.$row['sadrzaj'].'</textarea>
                    </div>
                </div>
                <br>
                <div class="form-item">
                    <label for="pphoto">Slika:</label>
                    <div class="form-field">
                
                        <input type="file" class="input-text" id="slika"
                        value="'.$row['slika'].'" name="slika"/> <br><img src="' . "img/" .$row['slika'] . '" width=100px>
                    
                    </div>
                </div>
                <br>
                <div class="form-item">
                    <label for="category">Kategorija vijesti:</label>
                    <div class="form-field">
                        <select name="kategorija" id="" class="form-field-textual"
                        value="'.$row['kategorija'].' selected="selected"">
                            <option value="US">U.S.</option>
                            <option value="World">World</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-item">
                    <label>Spremiti u arhivu:
                    <div class="form-field">';
                    if($row['arhivirati'] == 0) {
                    echo '<input type="checkbox" name="arhivirati" id="arhivirati"/>
                    Arhiviraj?';
                    } else {
                    echo '<input type="checkbox" name="arhivirati" id="arhivirati"
                    checked/> arhivirati? <br><br>';
                    }
                    echo '</div>
                    </label>
                </div>
                
                <div class="form-item">
                    <input type="hidden" name="id" class="form-field-textual"
                    value="'.$row['id'].'">
                    <button type="submit" name="update" value="Prihvati">
                    Izmjeni</button>
                    <button type="submit" name="delete" value="Izbriši">
                    Izbriši</button>
                </div>
                </form>
            </div>';
        }
    }


    echo '</div>';
    if(isset($_POST['delete'])){
        $id=$_POST['id'];

        
          
          $stmt = $dbc->prepare("DELETE  FROM clanak WHERE id=?");
          $stmt->bind_param("i", $id);
          
          
          $stmt->execute();
        

        
    }
    if(isset($_POST['update'])){

        $slika = $_FILES['slika']['name'];
        $naslov=$_POST['naslov'];
        $sazetak=$_POST['sazetak'];
        $sadrzaj=$_POST['sadrzaj'];
        $kategorija=$_POST['kategorija'];
        if(isset($_POST['arhivirati'])){
         $arhivirati=1;
        }else{
         $arhivirati=0;
        }
        $id=$_POST['id'];

        if(strlen($slika)>0){
            $target_dir = 'img/'.$slika;
            move_uploaded_file($_FILES["slika"]["tmp_name"], $target_dir);
            $stmt = $dbc->prepare("UPDATE clanak SET naslov=?, sazetak=?, sadrzaj=?,slika=?, kategorija=?, arhivirati=? WHERE id=?");
            $stmt->bind_param("sssssii", $naslov, $sazetak, $sadrzaj,$slika,$kategorija,$arhivirati,$id );
            
            
            $stmt->execute();
        }else{
            $stmt = $dbc->prepare("UPDATE clanak SET naslov=?, sazetak=?, sadrzaj=?, kategorija=?, arhivirati=? WHERE id=?");
            $stmt->bind_param("ssssii", $naslov, $sazetak, $sadrzaj,$kategorija,$arhivirati,$id );
            
            
            $stmt->execute();
          
        }
        


        


        
        
    }
    


    


        echo '<footer>
                <hr>
                <h5>2019 NEWSWEEK</h5>
            </footer>';
?>