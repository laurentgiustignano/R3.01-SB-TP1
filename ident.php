<?php
require ("templates/header.tpl");

function verifIdentite($lll, $ppp) : bool {
    /*
     * Enleve/Rajouter le '!' pour simuler l'echec ou la réuissite
     * de l'authentification
     */
    return !( $lll && $ppp);
}

if (count ($_POST) == 0) {
    $language='en'; // Langues disponibles : en, fr et no

    switch ($language) {
        case 'fr':
            $labelLogin = 'Identifiant';
            $labelPwd = "Mot de passe";
            $phLogin = 'Votre identifiant...';
            $phPwd = "Votre mot de passe...";
            $connexion = "Se connecter";
            break;
        case 'en':
            $labelLogin = 'Username';
            $labelPwd = "Password";
            $phLogin = 'Your username...';
            $phPwd = "Your password...";
            $connexion = "Login";
            break;
        case 'no':
            $labelLogin = 'Brukernavn';
            $labelPwd = "Passord";
            $phLogin = 'Ditt brukernavn...';
            $phPwd = "Ditt password...";
            $connexion = "Å logge inn";
            break;
    }

    /*
    * Les variables définies au-dessus sont utilisées dans le template chargé ci-dessous
    */
    require_once ('./templates/ident.tpl');

}
else {
    if(isset($_POST['login']) && isset($_POST['pwd'])){
        echo verifIdentite ($_POST['login'], $_POST['pwd']) ?

            "<div class='alert alert-dismissible alert-success fade show'>
              <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
              <strong>Bien joué !</strong> Vous êtes connecté {$_POST['login']}.
             </div>
             <p>Vous pouvez accéder à un contenu super-secret !</p> " :

            "<div class='alert alert-dismissible alert-warning fade show'>
              <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
              <h4 class='alert-heading'>Erreur d'identification !</h4>
              <p class='mb-0'><a href='ident.php' class='alert-link'>Se connecter</a>.</p>
            </div>
            <p>Espèce de vilain pirate de l'informatique ! 
            <a href='ident.php' class='alert-link'>Içi pour recharger le formulaire de connection</a></p> ";

            /* remarque : le code précédent des messages d'alerte peut aussi être
            factorisé, par exemple, dans un fichier de template et enregistrer dans des variables
            les différents termes à afficher
            */

    }
}

require_once ("templates/footer.tpl");
