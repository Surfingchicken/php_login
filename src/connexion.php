<?php
            try{// On se connecte à MySQL
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                $bdd = new PDO('mysql:host=localhost;dbname=Login', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
                
                // On récupère tout le contenu de la table livre
                $reponse = $bdd->query('SELECT email, password FROM  ids_clients');

                $valid = true;

                while($data = $reponse->fetch()){
                    $data['email'];
                    $data['password'];
                    
                    
                    if(isset($_POST['email']) && isset($_POST['password'])){
                        $login = $_POST['email'];
                        $mdp = $_POST['password'];

                        if(!$login || !$mdp){
                            echo "<p class=\"warning\">Vous avez oubliez votre mail ou password?</p>";
                            exit;
                        }
                        else if($login != $data['email']){
                          $valid = false;  
                        }
                        else if (!password_verify($mdp, $data['password'])){
                            $valid = false;
                        }
                        else{
                            //print "<a href=\"connection.php\">Go!!!</a>";
                            $valid == true;
                            $_SESSION['nom'] = $login;
                            $_SESSION['mdp'] = md5($mdp);
                            echo "<p class=\"success\">Votre login est ".$_SESSION['nom']."
                            votre mot de passe est  ".md5($mdp);
                            header("Location: client.php");
                            exit;
                        }
                    }              
                }
                if($valid === false){
                    echo "<p class=\"warning\">Erreur login ou mot de passe?</p>";
                }
                $reponse->closeCursor();
            }
            catch(Exception $e){
                die("Erreur de connexion : ".$e->getMessage());
            }

        ?>
        