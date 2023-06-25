<header class="header">
            <h1 class="naslov">Newsweek</h1>
            <h3 class="date">
                <?php
                    $currentDate = date('d.m.Y.');
                    echo $currentDate;
                ?>
            </h3>
            <br>
            <div class="navdiv">
                <nav class="navbar">
                    <a class="navLinks" href="index.php">
                        <div>Home</div>
                    </a>

                    
                    <a class="navLinks" href="kategorija.php?id=US">
                        <div class="divclass">U.S.</div>
                    </a>
                    <a class="navLinks" href="kategorija.php?id=World">
                        <div class="divclass">World</div>
                    </a>
                    <a class="navLinks" href="administracija.php">
                        <div class="divclass">Administracija</div>
                    </a>
                </nav>
            </div>
        </header>