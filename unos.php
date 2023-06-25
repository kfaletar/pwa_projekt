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
        

        <form enctype="multipart/form-data" action="skripta.php" onsubmit=" validateMyForm();" method="post" class="formFancy">
                <div name="formdiv" id="formdiv">
                    <span id="porukaNaslov"></span> <br>
                    <label name="formlabel">Naslov</label><br>
                    <input type="text" name="naslov" id="naslov"><br>
                </div>


                <div name="formdiv" id="formdiv">
                <span id="porukaSazetak"></span>
                <label>Sazetak</label><br>
                <textarea name="sazetak" id="sazetak" cols="20" rows="4"></textarea><br>
                <br>
                </div>

                <div name="formdiv" id="formdiv">
                    <span id="porukaSadrzaj"></span>
                    <label>Sadrzaj</label><br>
                    <textarea name="sadrzaj" id="sadrzaj" cols="20" rows="4"></textarea><br>
                    <br>
                </div>  

                <div name="formdiv" id="formdiv"></div>
                    <span id="porukaKategorija"></span>
                    <label>Kategorija: </label><br>
                    <select name="kategorija" id="kategorija">
                        <option selected="selected" value="US">U.S.</option>
                        <option value="World">World</option>
                    </select><br>
                    <br>
                </div>  

                <div name="formdiv" id="formdiv"></div>
                    <span id="porukaSlika"></span>
                    <label>Slika:</label><br>
                    <div class="">
                        <input type="file" name="slika" id="slika">
                        <span id="slikaPor"></span>
                    </div><br>
                    <br>
                </div>  

                <div name="formdiv" id="formdiv"></div>
                    <label>Arhivirati:</label><br>
                    <div class="">
                        <input type="checkbox" name="arhivirati" id="arhivirati">
                    </div>
                </div>  

                <button type="submit" value="Prihvati" class="bg-white" id="gumb">Prihvati</button>
            </form>
        </section>

        

        <footer>
            <hr>
            <h5>2019 NEWSWEEK</h5>
        </footer>
        <script type="text/javascript">
            function validateMyForm(){
                
                    var slanje_forme = true;
                    var naslov = document.getElementById("naslov").value;
                    var polje_za_naslov = document.getElementById("naslov");
                    if (naslov.length < 5 || naslov.length > 30) {
                        slanje_forme = false;
                        document.getElementById("porukaNaslov").innerHTML = "<br>Naslov mora imati više<br>od 5 i manje od 30 znakova";
                        document.getElementById("porukaNaslov").style.color = "red";
                        polje_za_naslov.style.border = "1px solid red";
                    } else {
                        document.getElementById("porukaNaslov").innerHTML = "";
                        polje_za_naslov.style.border = "1px solid black";
                    }
                    var kratki_sardzaj = document.getElementById("sazetak").value;
                    var polje_za_kratki_sardzaj = document.getElementById("sazetak");
                    if (kratki_sardzaj.length < 10 || kratki_sardzaj.length > 100) {
                        slanje_forme = false;
                        document.getElementById("porukaSazetak").innerHTML = "<br>Kratki sardzaj vijesti mora imati više<br>od 10 i manje od 100 znakova";
                        document.getElementById("porukaSazetak").style.color = "red";
                        polje_za_kratki_sardzaj.style.border = "1px solid red";
                    } else {
                        document.getElementById("porukaSazetak").innerHTML = "";
                        polje_za_kratki_sardzaj.style.border = "1px solid black";
                    }

                    var tekst = document.getElementById("sadrzaj").value;
                    var polje_za_tekst = document.getElementById("sadrzaj");
                    if (tekst.length == 0) {
                        slanje_forme = false;
                        document.getElementById("porukaSadrzaj").innerHTML = "<br>Tekst vijesti nesmije biti prazan";
                        document.getElementById("porukaSadrzaj").style.color = "red";
                        polje_za_tekst.style.border = "1px solid red";
                    } else {
                        document.getElementById("porukaSadrzaj").innerHTML = "";
                        polje_za_tekst.style.border = "1px solid black";
                    }

                    var kategorija = document.getElementById("kategorija").value;
                    var polje_za_kategorija = document.getElementById("kategorija");
                    if (kategorija) {
                        document.getElementById("porukaKategorija").innerHTML = "";
                        polje_za_kategorija.style.border = "1px solid black";
                    } else {
                        slanje_forme = false;
                        document.getElementById("porukaKategorija").innerHTML = "<br>Kategorija mora biti odabrana";
                        document.getElementById("porukaKategorija").style.color = "red";
                        polje_za_kategorija.style.border = "1px solid red";
                    }

                    var slika = document.getElementById("slika").value;
                    var polje_za_slika = document.getElementById("slika");
                    if (slika) {
                        document.getElementById("porukaSlika").innerHTML = "";
                        polje_za_slika.style.border = "";
                    } else {
                        slanje_forme = false;
                        document.getElementById("porukaSlika").innerHTML = "<br>Slika mora biti odabrana";
                        document.getElementById("porukaSlika").style.color = "red";
                        polje_za_slika.style.border = "1px solid red";
                    }
                    console.log(slanje_forme)
        
                    if (slanje_forme != true) {
                        event.preventDefault();
                        return false;
                    }else return true;
                }
            
        </script>
    
</body>
</html>