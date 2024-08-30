<?php
session_start();

// Check if the user is logged in by verifying the session
if (!isset($_SESSION['email'])) {
    // If not logged in, redirect to the login page
    header("Location: index.html");
    exit();
}

// Logout action
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    header("Location: index.html"); // Redirect to the login page
    exit();
}


require_once('userdb_connection.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande-page</title>
    <link rel="icon" href="32.32png.png" sizes="32x32" />
    <link rel="icon" href="192.192png.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="180.180png.png" />
    <meta name="msapplication-TitleImage" content="" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
    <div style="position: relative;left:4em;">
        <div >
            <img class="logoD" src="logo.png" style="position: relative;background:rgb(255, 255, 255);border: 2px solid rgb(255, 255, 255);left:36em;" width="300" />
        </div>
        <div align="center">
            <form method="post" class="Demande-form">
                <div align="center">
                    <div class="bg-h2" align="center">
                        <h2><b>Gestion des demande de création d'un compte </b></h2>
                    </div>
                    <br>
                    <br>
                    <div>
                        <a class="BT-rghit" href="http://localhost/application-web/UtilisateurE-page/index.php?id=ihsffea&/grnder=Mdaas1/&matricul=465465asdasaF/jdsjK/&user=user5545&dgfsf"><b>Entrantes</b></a>
                    </div>
                    <div>
                        <a class="BT-left" href="http://localhost/application-web/UtilisateurS-page/index.php?id=aeffshi&/grnder=Meeda8/&matricul=Fasadsa564546/kjsdj/&user=userfsfgd&5455"><b>Sortante</b></a>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
    <div>
        <div align="left">
            <div class="user-nav">
                <a ><label style="position: relative;left:0.3em;top:0.7em;" ><b>Salut, </b><?php echo $_SESSION['email']; ?> !</label></a>
                <a class="linkP" value="précédent" href="Demande-page.php?action=logout"><label ><img align="right" src="logout-icon.png" width="40"/></label></a>
            </div>
        </div>
    </div>
</body>
</html>
