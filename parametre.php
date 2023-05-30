<?php
include 'vitrine.php';
entete();
echo "<body>";
navbar();

echo "<div class='w3-container w3-black w3-padding-64 w3-xxlarge' id='menu'>
        <div class='w3-content'>
            <h1 class='w3-center w3-jumbo' style='margin-bottom:64px'>Utilisateur</h1>
            <div class='w3-row w3-center w3-border w3-border-dark-grey'>
                <a href='javascript:void(0)' onclick='openMenu(event, \"ajouter\");' id='ajouter-link'>
                    <div class='w3-col s6 tablink w3-padding-large w3-hover-red'>Ajouter</div>
                </a>
                <a href='javascript:void(0)' onclick='openMenu(event, \"supprimer\");' id='supprimer-link'>
                    <div class='w3-col s6 tablink w3-padding-large w3-hover-red'>Supprimer</div>
                </a>
            </div>
        </div>
    </div>

    <div id='ajouter' style='display:none;' class='menu'>"; // Début de la fonction 'Ajouter'
ajout(); // Appel à la fonction ajout()
echo "</div>"; // Fin de la fonction 'Ajouter'

echo "<div id='supprimer' style='display:none;' class='menu'>"; // Début de la fonction 'Supprimer'
supprimer(); // Appel à la fonction supprimer()
echo "</div>"; // Fin de la fonction 'Supprimer'

echo "<script type='text/javascript'>
        function openMenu(evt, menuName) {
            console.log('test menu');
            var i, x, tablinks;
            x = document.getElementsByClassName('menu');
            for (i = 0; i < x.length; i++) {
                x[i].style.display = 'none';
            }
            tablinks = document.getElementsByClassName('tablink');
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(' w3-red', '');
            }
            
            if (menuName === 'ajouter') {
                document.getElementById('ajouter').style.display = 'block';
                document.getElementById('ajouter-link').className += ' w3-red';
            } else if (menuName === 'supprimer') {
                document.getElementById('supprimer').style.display = 'block';
                document.getElementById('supprimer-link').className += ' w3-red';
            }
        }
    </script>";

footer();
echo "</body>";
?>
