<ul>
    <?php 
    if (isset($_SESSION["cli_id"])){ ?>
        <?=$_SESSION["cli_login"]?>
        <li><a href="deconnexion.php">deconnexion</a></li>
        <li><a href="client.php">Liste Client</a></li>
        <?php } else { ?>
        <li><a href="connexion.php">connexion</a></li>
        <li><a href="inscription.php">inscription</a></li>

        <?php } ?>
    <li><a href="index.php">Accueil</li>
    <li><a href="contact.php">contact</a></li>
    <li><a href="rechercherBien.php">rechercher bien</a></li>

</ul>