<?php
    
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=Login;charset=utf8','root','root');
        
    }
    catch(Exception $e)
                    {
                        die('Erreur : '.$e->getMessage());
                    }
        if(isset($_POST["email"]) || isset($_POST["password"])){

            //on test les chaines de caractère//
            if(!$_POST["email"] || !$_POST["password"]){
                echo "<p class=\"warning\">Vous avez obliez votre mail ou password?</p>";
                }
                else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){ //attention à ma fonction
                    echo "<p class=\"warning\">Mail invalide</p>";
                }
                else if(is_numeric($_POST["email"])){
                        echo "<p class=\"warning\">Vous devez saisir des caractères</p>";
                }
                else{

                //password_hash($_POST['psw'],PASSWORD_DEFAULT);
                
                $inscription = $bdd->prepare("INSERT INTO ids_clients (email, password) VALUES (?,?)");
                $inscription->execute(array($_POST["email"], password_hash($_POST["password"],PASSWORD_DEFAULT)));
                
                echo "<p class=\"success\">Merci votre contenu est ajouté : 
                        <a href=\"login.php\" title=\"pub\">Connectez vous</a>
                        
                </p>";}
        }
 

   
?>