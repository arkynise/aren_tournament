<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/chess.css">
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
        <div id="chess" class="div2">
            <h1 style="font-family: Arial, Helvetica, sans-serif;">enter les informations requise</h1>
            <label>Nom <input type="text" id="nom_c" required> Prenom <input type="text" id="prenom_c" required>
            <label>telephone <input type="text" id="telephon" required></label>
            <button onclick="chess()" class="buttonisc">Inscrire</button>
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
    function amchy_9awad(){
         alert("cette function est inavlide");
    }
    
        function chess(){
                  var match;       
    match="chess";
    var nom=document.getElementById('nom_c').value;
    var prenom=document.getElementById('prenom_c').value;
    var tel = document.getElementById('telephon').value;
    
    
    if(tel!="" && nom!="" && prenom!=""){
    $.post({
    
         url:"add_joueur.php",
         method:"POST",
         data: {nom:nom,prenom:prenom,match:match,tel:tel},
         success:function(data)
         {
         alert("saved");
         }
        });
    }


else{

    alert("Veuillez remplir tous les cases requises. ");
}

        }
    
    
    
    </script>