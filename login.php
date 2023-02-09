<?php 
    session_start();
?>
<?php 
    include_once ('./src/header.inc.php')
?>
<body>
    <header>
        <h1>
            Fidelio & Company
        </h1>
    </header>
    <main>
        <section>
            <form action="login.php" method="post" >
                <h3> <span aria-hidden="true"> &#x1F511; </span> Se connecter</h3>
                    
                <label for="email">Adresse mail</label>
                <input type="email" placeholder="Adresse mail" name="email" id="email">

                <label for="password">Mot de passe</label>
                <input type="password" placeholder="Mot de Passe" name="password" id="password">

                <input type="submit" value="envoyer">

            </form>
        </section>
    </main>
    <?php include_once('./src/connexion.php')?>
    <footer>
        &copy; - PHP - 2023
    </footer>
    
</body>
</html>