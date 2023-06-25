<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <header class="header">
            <?php 
                include 'header.php'
            ?>
    </header>
    
    <section class="content">
        
        
        <section  class="formSection">
        

        <form  method="post" class="p-4 bg-white">
                <div name="formdiv" id="formdiv">
                    <span id="porukaIme"></span> <br>
                    <label name="formlabel">Ime</label><br>
                    <input type="text" name="ime" id="ime"><br>
                </div>


                <div name="formdiv" id="formdiv">
                <span id="porukaPrezime"></span>
                <label>Prezime</label><br>
                <input type="text" name="prezime" id="prezime" cols="20" rows="4"></textarea><br>
                <br>
                </div>

                <div name="formdiv" id="formdiv">
                    <span id="porukaUsername"></span>
                    <label>Korisnicko ime:</label><br>
                    <input type="text" name="username" id="username" cols="20" rows="4"></textarea><br>
                    <br>
                </div>  

                <div name="formdiv" id="formdiv"></div>
                    <span id="porukaPassword"></span>
                    <label>Password: </label><br>
                    <input type="password" name="password" id="password" cols="20" rows="4"></textarea><br>

                    <br>
                    <br>
                </div>  

                

                <div name="formdiv" id="formdiv"></div>
                    <label>Admin:</label><br>
                    <div class="">
                        <input type="checkbox" name="admin" id="admin">
                    </div>
                </div>  

                <button type="submit" value="Prihvati" class="bg-white" id="gumb">Prihvati</button>
            </form>
        </section>

        

        <footer>
            <hr>
            <h5>2019 NEWSWEEK</h5>
        </footer>
        
        <?php 
            include 'connect.php';
                if( isset($_POST["ime"]) && isset($_POST["prezime"]) && isset($_POST["username"]) &&isset($_POST["password"]) ){
                $ime=$_POST["ime"];
                $prezime=$_POST["prezime"];
                $username=$_POST["username"];
                $password=$_POST["password"];
                $hashed_password = password_hash($password, CRYPT_BLOWFISH);
                $registriranKorisnik = '';

                if(isset($_POST["admin"])){
                    $razina=1;
                }else{
                    $razina=0;
                }
                //Provjera postoji li u bazi već korisnik s tim korisničkim imenom

                $sql = "SELECT username FROM korisnik WHERE username = ?";

                $stmt = mysqli_stmt_init($dbc);
                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, 's', $username);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                }
                if(mysqli_stmt_num_rows($stmt) > 0){
                    $msg='Korisničko ime već postoji!';
                }else{
                    // Ako ne postoji korisnik s tim korisničkim imenom - Registracija korisnika

                    $sql = "INSERT INTO korisnik (ime, prezime,username, password,
                    razina)VALUES (?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($dbc);
                    if (mysqli_stmt_prepare($stmt, $sql)) {
                        mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $username,
                        $hashed_password, $razina);
                        mysqli_stmt_execute($stmt);
                        $registriranKorisnik = true;
                    }
                }
            }

        mysqli_close($dbc);

        ?>
    
</body>
</html>