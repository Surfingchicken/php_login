<?php 
    //start session
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
            <form action="index.php" method="post">
                <h3> <span aria-hidden="true"> &#9998 </span> Inscription rapide votre login & mot de passe</h3>
                    
                <label for="email">Adresse mail</label>
                <input type="email" placeholder="Adresse mail" for="email" id="email" name="email" aria-required="true" autofocus>

                <label for="password">Mot de passe</label>
                <input type="password" placeholder="Mot de Passe" for="password" id="password" name="password">

                <input type="submit" value="envoyer">

            </form>
        </section>
    </main>
    <?php include_once('./src/inscription.php')?>
    
    <footer>
        &copy; - PHP - 2023
    </footer>
    
</body>
</html>