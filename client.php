<?php    
    session_start();
?>
<?php 
    include_once ('./src/header.inc.php');
?>
<body>
    <header>
        <h1>
            Fidelio & Company
        </h1>
    </header>
    <main>
        <section>
        <?php echo "<p class=\"success\">Votre login est ".$_SESSION['nom']."
                            votre mot de passe est  ".$_SESSION['mdp'];?>
        </section>
    </main>
    <footer>
        &copy; - PHP - 2023
    </footer>
    
</body>
</html>