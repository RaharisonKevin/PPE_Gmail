<?php
include_once("./src/header.inc.php");
?>
<body>
    <?php
    include_once("./src/nav.inc.php");
    ?>
    <main>
 
 <section id="loginform">
     <h1 class="welcome">Bienvenue dans votre espace</h1>
     <fieldset>     
         <legend>Connectez-vous à votre compte</legend>

     <form action="" method="post">
         
         <label for="email">Mail ou login *</label>
         <input type="email" id="email" name="mail" placeholder="Votre mail" aria-required="true">
       
         <label for="password">Mot de passe *</label>
         <input type="password" id="password" name="password" placeholder="Votre mot de passe" aria-required="true">
       
        <input type="submit" value="CONNEXION À VOTRE COMPTE">
       </form>

     </fieldset> 
 </section>

</main>

<script src="./js/login.js"></script>
</body>
</html>