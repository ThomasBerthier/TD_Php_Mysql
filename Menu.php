
    <style>
    body{
        margin:0;
        padding:0;
    }
        li {
        list-style:none !important;
        color:#FFF;
        font-size:20px;
        text-decoration:none;
        width:100%;
        }
        
        nav ul {
        background-color:#64abfb;
        margin:0;
        padding:0;
        display: flex;
        }
        
        nav ul li {
        list-style: none;
        line-height:44px;
        float:left;
        background-color: black;
        }
        
        nav ul li a {
        color: white;
        padding:10px;
        font-size:20px;
        text-decoration:none;
        }
        
        li a:hover {
        border-bottom:3px #FFF solid;
        }
        nav ul li ul { display:none; } /* Rend le menu déroulant caché par défaut */
        
        nav ul li:hover ul { /* Affiche la dropNav au survol de la souris avec la class .drop */
        z-index:99999;
        display:list-item !important;
        position:absolute;
        margin-left:-10px;
        }
        
        nav ul li:hover ul li {
        float:none;
        }
    </style>
    <nav>
    <ul>
        <li>Exercice HTML/CSS
            <ul>
                <li><a href="exo1.php">Exercice 1</a></li>
                <li><a href="exo2.php">Exercice 2</a></li>
                <li><a href="Exo3.php">Exercice 3</a></li>
                <li><a href="Exo3c.php">Exercice 3c</a></li>
                <li><a href="Exo6.php">Exercice 6</a></li>
                <li><a href="Exocss1.php">Exercice 1 CSS</a></li>
                <li><a href="Exocss1a.php">Exercice 1a CSS</a></li>
                <li><a href="Exocss2.php">Exercice 2 CSS</a></li>
                <li><a href="Exocss2a.php">Exercice 2a CSS</a></li>
                <li><a href="Exocss3.php">Exercice 3 CSS</a></li>
                <li><a href="Exocss3a.php">Exercice 3a CSS</a></li>
                <li><a href="Exocss4.php">Exercice 4 CSS</a></li>
            </ul>
        </li>
        <li>Exercice PHP
            <ul>
                <li><a href="Exercice1.php">Partie 1 Exercice 1</a></li>
                <li><a href="Exercice2_1_a.php">Partie 1 Exercice 2.1.a</a></li>
                <li><a href="Exercice2_1_b.php">Partie 1 Exercice 2.1.b</a></li>
                <li><a href="Exercice2_2.php">Partie 1 Exercice 2.2</a></li>
                <li><a href="Exercice3_a.php">Partie 1 Exercice 3.a</a></li>
                <li><a href="Exercice3_b.php">Partie 1 Exercice 3.b</a></li>
                <li><a href="Exercice4.php">Partie 1 Exercice 4</a></li>
                <li><a href="Exercice5.php">Partie 1 Exercice 5</a></li>
                <li><a href="Exercice6.php">Partie 1 Exercice 6</a></li>
                <li><a href="Exercice7.php">Partie 1 Exercice 7</a></li>
                <li><a href="Exercice8.php">Partie 1 Exercice 8</a></li>
                <li><a href="Exercice_Final.php">Partie 1 Exercice Final</a></li>
                <li><a href="PHP_Partie2_Exo1.php">Partie 2 Exercice 1</a></li>
                <li><a href="PHP_Partie2_Exo2.php">Partie 2 Exercice 2</a></li>
                <li><a href="PHP_Partie2_Exo3.php">Partie 2 Exercice 3</a></li>
                <li><a href="PHP_Partie2_ExoFinal.php">Partie 2 Exercice Final</a></li>
            </ul>
        </li>
        <li>Exercice BDD
            <ul>
                <li><a href="">Exercice</a></li>
                <li><a href="">Exercice</a></li>
                <li><a href="">Exercice</a></li>
                <li><a href="">Exercice</a></li>
                <li><a href="">Exercice</a></li>
                <li><a href="">Exercice</a></li>
                <li><a href="">Exercice</a></li>
                <li><a href="">Exercice</a></li>
                <li><a href="">Exercice</a></li>
                <li><a href="">Exercice</a></li>
            </ul>
        </li>
    </ul>
</nav>