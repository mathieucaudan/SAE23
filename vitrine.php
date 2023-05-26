<?php
function entete() {
    echo "<!DOCTYPE html>
    <html>
    <head>
        <title>PizzaSAE23</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Amatic+SC'>
        <style>
            body,
            html {
                height: 100%;
            }

            body,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: 'Amatic SC', sans-serif;
            }

            .menu {
                display: none;
            }

            .bgimg {
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url('pizza_accueil.jpg');
                min-height: 90%;
            }
        </style>
          <script type='text/javascript'>
        function openMenu(evt, menuName) {
            console.log('test menu');
            var i, x, tablinks;
            x = document.getElementsByClassName('menu');
            for (i = 0; i < x.length; i++) {
                x[i].style.display = 'none';
            }
            tablinks = document.getElementsByClassName('tablink');
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(' w3-red', '');
            }
            document.getElementById(menuName).style.display = 'block';
            evt.currentTarget.firstElementChild.className += ' w3-red';
        }
        </script>
    </head>";
    };
function navbar(){
    echo"<div class='w3-top w3-hide-small'>
        <div class='w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off' id='myNavbar'>
            <a href='accueil.php' class='w3-bar-item w3-button'>ACCUEIL</a>
            <a href='menu.php' class='w3-bar-item w3-button'>MENU</a>
            <a href='info.php' class='w3-bar-item w3-button'>INFO</a>
            <a href='contact.php' class='w3-bar-item w3-button'>CONTACT</a>
            <a href='#'><img src='logo.png' style='float: right; width: 3%; border-radius: 50%' ></a>
            <a href='connexion.php' style='float: right'><button type='button'>Connexion</button></a>
            <style>
            button {
                width: 100px;
                height: 40px;
                background-color: #FFFFFF;
                color: #FFFFFF
                font-size: 10px;
                display: inline-block;
                border-radius: 5px;
                border: 4px double #00000;
                text-align: center;
                -webkit-transition: all 0.5s;
                -moz-transition: all 0.5s;
                -o-transition: all 0.5s;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px; 
            }
            </style>
            
        </div>
    </div>";
    }
function footer(){
    echo"<footer class='w3-center w3-black w3-padding-48 w3-xxlarge'>
    <p>C'est avec Plaisir de vous recevoir dans notre maison</p>
    <a class='w3-button w3-round-xxlarge w3-dark-grey w3-margin-bottom' href='#' target='_blank'>Notre Insta</a>
    <!-- Bas de page fin. -->
    </footer>";
    }
function menu(){
    echo"<div class='w3-container w3-black w3-padding-64 w3-xxlarge' id='menu'>
        <div class='w3-content'>

            <h1 class='w3-center w3-jumbo' style='margin-bottom:64px'>Notre Menu</h1>
            <div class='w3-row w3-center w3-border w3-border-dark-grey'>
                <a href='javascript:void(0)' onclick='openMenu(event, \"Pizza\");' id='myLink'>
                    <div class='w3-col s4 tablink w3-padding-large w3-hover-red'>Pizza</div>
                </a>
                <a href='javascript:void(0)' onclick='openMenu(event, \"Pates\");'>
                    <div class='w3-col s4 tablink w3-padding-large w3-hover-red'>Salades</div>
                </a>
                <a href='javascript:void(0)' onclick='openMenu(event, \"Starter\");'>
                    <div class='w3-col s4 tablink w3-padding-large w3-hover-red'>Autre</div>
                </a>
            </div>

            <div id='Pizza' class='w3-container menu w3-padding-32 w3-white'>
                <h1><b>Margherita</b> <span class='w3-right w3-tag w3-dark-grey w3-round'>$12.50</span></h1>
                <p class='w3-text-grey'>Tomate Fariche, Mozzarella, Basilic</p>
                <hr>

                <h1><b>Quatre Fromage</b> <span class='w3-right w3-tag w3-dark-grey w3-round'>$15.50</span></h1>
                <p class='w3-text-grey'>Quatre Fromages (Mozzarella, Parmesan, Pecorino, Jarlsberg)</p>
                <hr>

                <h1><b>Poulet</b> <span class='w3-right w3-tag w3-dark-grey w3-round'>$17.00</span></h1>
                <p class='w3-text-grey'>Tomate Fariche, Mozzarella, POulet, Oignons</p>
                <hr>

                <h1><b>L'heure de l'ananas</b> <span class='w3-right w3-tag w3-dark-grey w3-round'>$16.50</span></h1>
                <p class='w3-text-grey'>Tomate Fraiche, Mozzarella, Ananas Frais, Bacon, Basilic Frais</p>
                <hr>

                <h1><b>Viande</b> <span class='w3-tag w3-red w3-round'>Hot!</span><span
                        class='w3-right w3-tag w3-dark-grey w3-round'>$20.00</span></h1>
                <p class='w3-text-grey'>Tomates Fraiches, Mozzarella, Pepporoni, SAuce Piquante, boeuf, Poulet</p>
                <hr>

                <h1><b>La Parma de la Mama</b> <span class='w3-tag w3-grey w3-round'>New</span><span
                        class='w3-right w3-tag w3-dark-grey w3-round'>$21.50</span></h1>
                <p class='w3-text-grey'>Tomates Fraiches, Mozzarella, Jambon de parme, Bacon, Salade fraiche</p>
            </div>

            <div id='Pates' class='w3-container menu w3-padding-32 w3-white'>
                <h1><b>Lasagne</b> <span class='w3-tag w3-grey w3-round'>Populaire</span> <span
                        class='w3-right w3-tag w3-dark-grey w3-round'>$13.50</span></h1>
                <p class='w3-text-grey'>Sauce Special, Mozzarella, Parmesan, Boeuf haché</p>
                <hr>

                <h1><b>Ravioli</b> <span class='w3-right w3-tag w3-dark-grey w3-round'>$14.50</span></h1>
                <p class='w3-text-grey'>Raviolis farcis au fromage</p>
                <hr>

                <h1><b>Spaghetti Classica</b> <span class='w3-right w3-tag w3-dark-grey w3-round'>$11.00</span></h1>
                <p class='w3-text-grey'>Tomates Fraiche, Oignons, Boeuf Haché</p>
                <hr>

                <h1><b>Pates de la mer</b> <span class='w3-right w3-tag w3-dark-grey w3-round'>$25.50</span></h1>
                <p class='w3-text-grey'>Saumon, Crevette, Homard, Ail</p>
            </div>


            <div id='Starter' class='w3-container menu w3-padding-32 w3-white'>
                <h1><b>Soupe du jour</b> <span class='w3-tag w3-grey w3-round'>Seasonal</span><span
                        class='w3-right w3-tag w3-dark-grey w3-round'>$5.50</span></h1>
                <p class='w3-text-grey'>Demander au serveur</p>
                <hr>

                <h1><b>Bruschetta</b> <span class='w3-right w3-tag w3-dark-grey w3-round'>$8.50</span></h1>
                <p class='w3-text-grey'>Pain avec du pesto, Tomates, oignons, Ail</p>
                <hr>

                <h1><b>Pain a l'ail</b> <span class='w3-right w3-tag w3-dark-grey w3-round'>$9.50</span></h1>
                <p class='w3-text-grey'>Ciabatta grillé , garlic Beurre, Oignons</p>
                <hr>

                <h1><b>Tomozzarella</b> <span class='w3-right w3-tag w3-dark-grey w3-round'>$10.50</span></h1>
                <p class='w3-text-grey'>Tomates et Mozzarella</p>
            </div><br>

        </div>
    </div>";
    }
function info(){
    echo"<div class='w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge' id='about'>
        <div class='w3-content'>
            <h1 class='w3-center w3-jumbo' style='margin-bottom:64px'>Qui Sommes Nous</h1>
            <p>Le Restaurant Pizza a été fondé à Blabla par M. En italien, il est très important d'être suivi minutieusement par le système éducatif, mais en même temps, il arrive qu'il y ait beaucoup de travail et de douleur. Pour au moins
                Allez, personne ne devrait pratiquer n'importe quel type de travail, sauf pour en tirer un avantage.</p>
            <p><strong>Notre Chef?</strong>  Mr. Italiano Lui-même<img src='https://www.w3schools.com/w3images/chef.jpg' style='width:150px'
                    class='w3-circle w3-right' alt='Chef'></p>
            <p>Nous sommes fiers de nos intérieurs.</p>
            <img src='pizza_four.jpg' style='width:100%' class='w3-margin-top w3-margin-bottom'
                alt='Restaurant'>
            <h1><b>Heure d'ouverture</b></h1>

            <div class='w3-row'>
                <div class='w3-col s6'>
                    <p>Monday 10.00 - 14.00</p>
                    <p>Tuesday 10.00 - 24.00</p>
                    <p>Wednesday 10.00 - 24.00</p>
                    <p>Thursday 10:00 - 24:00</p>
                </div>
                <div class='w3-col s6'>
                    <p>Friday 18:00 - 24:00</p>
                    <p>Saturday 10:00 - 24:00</p>
                    <p>Sunday 10:00 - 24:00</p>
                </div>
            </div>

        </div>
    </div>";}
function contact(){
    echo"<div class='w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge'>
        <div class='w3-content'>
            <h1 class='w3-center w3-jumbo' style='margin-bottom:64px'>Contact</h1>
            <p>Trouvez-nous à notre adresse ou appelez-nous au 0123456789</p>
            <p><span class='w3-tag'>Pour votre gouverne</span> Nous offrons un service traiteur complet pour tout événement, grand ou petit. Nous
                comprenons vos besoins et nous préparerons la nourriture pour satisfaire les critères les plus importants de tous, les deux regardent
                et le goût.</p>
            <p class='w3-xxlarge'><strong>Reserve</strong> une table, demandez le plat du jour ou envoyez-nous simplement un message:
            </p>
            <form action='/action_page.php' target='_blank'>
                <p><input class='w3-input w3-padding-16 w3-border' type='text' placeholder='Nom' required name='Nom'>
                </p>
                <p><input class='w3-input w3-padding-16 w3-border' type='number' placeholder='Nombre de personne' required name='personne'></p>
                <p><input class='w3-input w3-padding-16 w3-border' type='datetime-local' placeholder='Jour et Heure'
                required name='date' value='2023-01-01T00:00'></p>
                <p><input class='w3-input w3-padding-16 w3-border' type='text' placeholder='Message \ Demande Spécial' required name='Message'></p>
                <p><button class='w3-button w3-light-grey w3-block' type='submit'>Envoyer</button></p>
            </form>
        </div>
    </div>";
    }
function accueil(){
    echo"<header class='bgimg w3-display-container w3-grayscale-min' id='home'>
        <div class='w3-display-bottomleft w3-padding'>
            <span class='w3-tag w3-xlarge'>Ouvert tout les midi</span>
        </div>
        <div class='w3-display-middle w3-center'>
            <span class='w3-text-white w3-hide-small' style='font-size:100px'>pizza<br>à pâte fine</span>
            <span class='w3-text-white w3-hide-large w3-hide-medium' style='font-size:60px'><b>pizza<br>à pâte fine</b></span>
            <p><a href='menu.php' class='w3-button w3-xxlarge w3-black'>Montre moi le menu</a></p>
        </div>
    </header>";
    }
function ajout(){
    echo"<h2>Ajouter un utilisateur</h2>
    <form method='POST' action='add_user.php'>
        <label for='id'>Identifiant:</label>
        <input type='text' name='id' required><br><br>
        
        <label for='password'>Mot de passe:</label>
        <input type='password' name='password' required><br><br>
        
        <label for='role'>Rôle:</label>
        <input type='text' name='role' required><br><br>
        
        <input type='submit' value='Ajouter'>
    </form>";
}
?>
