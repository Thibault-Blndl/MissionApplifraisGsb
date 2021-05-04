<?php
/**
 * Page d'accueil de l'application web AppliFrais
 * @package default
 * @todo  RAS
 */
$repInclude = './include/';
require($repInclude . "_init.inc.php");

// page inaccessible si visiteur non connecté
if ( ! estVisiteurConnecte() )   //vérifie si le visiteur est connecté ou non, s'il ne l'ai pas, il est redirigé vers "SeConnecter"
{
    header("Location: cSeConnecter.php");
}
require($repInclude . "_entete.inc.html");
require($repInclude . "_sommaire.inc.php");
?>
<!-- Division principale -->
<div id="contenu">                         <!--Bandeau de gauche-->
    <h2>Menu de Praticien</h2>
</div>
<?php
$req = "SELECT id, nom, prenom
FROM Praticien 
ORDER BY nom";

$listeUser = mysqli_query($idConnexion, $req);
$donnees = mysqli_fetch_row($listeUser);
$result = $idConnexion->query($req);
?>
<?php
require($repInclude . "_pied.inc.html");
require($repInclude . "_fin.inc.php");
?>

