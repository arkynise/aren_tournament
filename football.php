<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/football.css">
    <title>
        tourni aren
    </title>
    <script src="jquery.min.js"></script>
</head>
<header>
    <img src="images/logo.png" class="logo" alt="AREN Logo">
    <h1 class="font">A.R.E.N Tournement</h1>
    <a href="index.php" class="home"> Home</a>
    <img src="images/dz.png" class="dz" alt="Dz">
</header>

<body>
    <form>
        <div id="football" class="div2">
            <h1>create football equipe</h1>

            <label>enter le nom d'equipe</label>
            <label><input type="text" id="equipe" required></label>
            <label>enter les informations de chef d'equipe</label>
            <label>Nom <input type="text" id="nom_c" required> Prenom <input type="text" id="prenom_c" required>
            <label>telephone <input type="text" id="telephon" required></label>
            
            <label>entre les information de le rest 5 joueur:</label>

            <label> Joueur 1</label>
            <label>Nom <input type="text" id="1" required> Prenom <input type="text" id="2" required>
            
            <label> Joueur 2</label>
            <label>Nom <input type="text" id="3" required> Prenom <input type="text" id="4" required></label>
            
            <label> Joueur 3</label>
            <label>Nom <input type="text" id="5" required> Prenom <input type="text" id="6" required></label>
            
            <label> Joueur 4</label>
            <label>Nom <input type="text" id="7" required> Prenom <input type="text" id="8" required></label>

            <label> Joueur 5</label>
            <label>Nom <input type="text" id="9" required> Prenom <input type="text" id="10" required></label>

            
            <p>entre les information de vinquer</p>
            <label>Nom <input type="text" id="11"> Prenom <input type="text" id="12"> </label>
            <button onclick="ajouter_equipe_foot()" class="buttonisc">Inscrire</button>
            
        </div>
    </form>
</body>
<footer>
    <img src="images/logo.png" class="logo2" alt="AREN Logo">
    <img src="images/banner.png" class="banner" alt="AREN Logo">
    <a href="https://www.facebook.com/aren.corso" class="link" target="_blank">
        <p class="fbline">AREN R.U.Corso الإقامة الجامعية الإخوة قويقح</p>
        <img src="images/fb.png" class="fb" alt="fb logo">
    </a>
</footer>
<script type="text/javascript">
    function amchy_9awad() {
        alert("cette function est inavlide");
    }
    function ajouter_equipe_foot() {
        var match;
        match = "football";
        var nom = document.getElementById('nom_c').value;
        var prenom = document.getElementById('prenom_c').value;
        var tel = document.getElementById('telephon').value;
        var equipe = document.getElementById('equipe').value;

if(tel!="" && equipe!="" && nom!="" && prenom!="" && document.getElementById('1').value!="" && document.getElementById('2').value!="" && document.getElementById('3').value!="" && document.getElementById('4').value!="" && document.getElementById('5').value!="" && document.getElementById('6').value!="" && document.getElementById('7').value!="" && document.getElementById('8').value!="" && document.getElementById('9').value!="" && document.getElementById('10').value!=""){
        var type = "chef";
        $.post({

            url: "add_joueur.php",
            method: "POST",
            data: { Nom: nom, preNom :prenom, equipe: equipe, match: match, type: type, tel: tel },
            success: function (data) {

            }
        });
        $.post({

            url: "add_equipe.php",
            method: "POST",
            data: { Nom :nom, equipe: equipe, match: match, tel: tel },
            success: function (data) {

            }
        });

        var nom = document.getElementById('1').value;
        var prenom = document.getElementById('2').value;
        var equipe = document.getElementById('equipe').value;

        type = "titulair";

        $.post({

            url: "add_joueur.php",
            method: "POST",
            data: { Nom : nom, preNom :prenom, equipe: equipe, match: match, type: type },
            success: function (data) {

            }
        });
        var nom = document.getElementById('3').value;
        var prenom = document.getElementById('4').value;
        var equipe = document.getElementById('equipe').value;


        $.post({

            url: "add_joueur.php",
            method: "POST",
            data: { Nom : nom, preNom :prenom, equipe: equipe, match: match, type: type },
            success: function (data) {

            }
        });

        var nom = document.getElementById('5').value;
        var prenom = document.getElementById('6').value;
        var equipe = document.getElementById('equipe').value;

        $.post({

            url: "add_joueur.php",
            method: "POST",
            data: { Nom :nom, preNom :prenom, equipe: equipe, match: match, type: type },
            success: function (data) {

            }
        });
        var nom = document.getElementById('7').value;
        var prenom = document.getElementById('8').value;
        var equipe = document.getElementById('equipe').value;


        $.post({

            url: "add_joueur.php",
            method: "POST",
            data: { Nom : nom, preNom :prenom, equipe: equipe, match: match, type: type },
            success: function (data) {

            }
        });

        var nom = document.getElementById('9').value;
        var prenom = document.getElementById('10').value;
        var equipe = document.getElementById('equipe').value;


        $.post({

            url: "add_joueur.php",
            method: "POST",
            data: { Nom :nom, preNom :prenom, equipe: equipe, match: match, type: type },
            success: function (data) {

            }
        });

        var nom = document.getElementById('11').value;
        var prenom = document.getElementById('12').value;
        var equipe = document.getElementById('equipe').value;

        type = "remplacant";
        $.post({

            url: "add_joueur.php",
            method: "POST",
            data: { Nom :nom, preNom: prenom, equipe: equipe, match: match, type: type },
            success: function (data) {
                alert("equipe est ajouter");
            }
        });}


else{

    alert("Veuillez remplir tous les cases requises. ");
}


    }

</script>