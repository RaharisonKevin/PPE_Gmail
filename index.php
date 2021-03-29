<?php
include_once("./src/header.inc.php");
?>
<body>
    <?php
    include_once("./src/nav.inc.php");
    ?>
    <main>
    <section id="sign">
            <h1>Retrouvez la fluidité et la simplicité de Gmail sur tous vos appareil</h1>
            <a class="btnlogin" href="#login">Créer un compte</a>
            <a href="#login"><img src="./asset/arrow.png" alt="arrow image" class="btnarrow"></a>
        </section>

        <section id="login">
            <h2>Une boîte de réception entièrement repensée</h2>
            <p>Avec les nouveaux onglets personnalisables repérez immediatement les nouveaux messages et choisissez ceux que vous souhaitez lire en priorité</p>
        </section>

        <section id="form">
            <fieldset>     
                <legend>Créer un compte</legend>

            <form action="#" method="get">
                <label for="nom">Nom *</label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom" aria-required="true">
     
                <label for="prenom">Prénom *</label>
                <input type="text" id="prenom" name="prenom" placeholder="Votre prenom" aria-required="true">
              
                
                <label for="mail">Mail *</label>
                <input type="email" id="mail" name="mail" placeholder="Votre mail" aria-required="true">
              
                <label for="password">Choisir votre mot de passe *</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" aria-required="true">
              
               <input type="submit" value="Valider votre compte">
              </form>

            </fieldset> 
        </section>

    </main>

    <footer>
        
    </footer>

    <script src="./js/app.js"></script>
</body>
</html>