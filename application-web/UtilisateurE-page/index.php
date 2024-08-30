<?php
$conn = mysqli_connect("localhost", "root", "", "test");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateur-page</title>
    <link rel="icon" href="http://localhost/application-web/32.32png.png" sizes="32x32" />
    <link rel="icon" href="http://localhost/application-web/192.192png.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="http://localhost/application-web/180.180png.png" />
    <meta name="msapplication-TitleImage" content="" />
    <link rel="stylesheet" href="style.css" type='text/css' />
</head>

<body>
    <div>
        <form class="Demande-form" action="connetion.php" method="post" align="center">
            <div align="center">
                <div class="bg-U-h3">
                    <h3 class="U-h3">Gestion des Entrantes</h3>
                </div>
                <br>
                <div align="right">
                    <strong >Matricule :</strong>
                    <input class="matricule" type="text" size="4" name="matricule"  required />
                </div>
                <div class="div-Genre" align="left">
                    <label>Genre :</label>
                    <input type="radio" name="genderu" value="MLLe" required />MLLe
                    <input type="radio" name="genderu" value="Mme" />Mme
                    <input type="radio" name="genderu" value="M" />M
                </div>
                <br>
                <div align="left">
                    <strong>Nom :</strong>
                    <input type="text" size="15" name="nom" required />
                    <strong>Prénom :</strong>
                    <input type="text" size="15" name="prenom" required />
                </div>
                <br>
                <br>
                <div class="bg-U-h3">
                    <h3 class="U-h3">Accès périphériques et application</h3>
                </div>
                <br>
                <div>
                    <div class="U-checkbox-L-1">
                        <input class="U-checkbox-L-1-A" type="checkbox" name="acces[]" value="PC-portable" />
                        <label class="U-checkbox-L-1-A">PC portable</label>
                        <input class="U-checkbox-L-1-B" type="checkbox" name="acces[]" value="ArmaPlus" />
                        <label class="U-checkbox-L-1-B">ArmaPlus</label>
                        <input class="U-checkbox-L-1-C" type="checkbox" name="acces[]" value="Gestor" />
                        <label class="U-checkbox-L-1-C">Gestor</label>
                    </div>
                    <br>
                    <div class="U-checkbox-L-2">
                        <input class="U-checkbox-L-2-A" type="checkbox" name="acces[]" value="PC-fixe" />
                        <label class="U-checkbox-L-2-A">PC fixe</label>
                        <input class="U-checkbox-L-2-B" type="checkbox" name="acces[]" value="Splus" />
                        <label class="U-checkbox-L-2-B">Splus</label>
                        <input class="U-checkbox-L-2-C" type="checkbox" name="acces[]" value="PC-Composant" />
                        <label class="U-checkbox-L-2-C">PC Composant</label>
                    </div>
                    <br>
                    <div class="U-checkbox-L-3">
                        <input class="U-checkbox-L-3-A" type="checkbox" name="acces[]" value="Imprimante" />
                        <label class="U-checkbox-L-3-A">Imprimante</label>
                        <input class="U-checkbox-L-3-B" type="checkbox" name="acces[]" value="Agirh" />
                        <label class="U-checkbox-L-3-B">Agirh</label>
                        <input class="U-checkbox-L-3-C" type="checkbox" name="acces[]" value="XRT" />
                        <label class="U-checkbox-L-3-C">XRT</label>
                    </div>
                    <br>
                    <div class="U-checkbox-L-4">
                        <input class="U-checkbox-L-4-A" type="checkbox" name="acces[]" value="Session" />
                        <label class="U-checkbox-L-4-A">Session</label>
                        <input class="U-checkbox-L-4-B" type="checkbox" name="acces[]" value="SageX3-ERP" />
                        <label class="U-checkbox-L-4-B">SageX3 ERP</label>
                    </div>
                    <br>
                    <div align="left">
                        <label><b>Observation :</b></label>
                        <br>
                        <br>
                        <textarea name="observation" rows="4" cols="60"></textarea>
                    </div>
                    <br>
                    <div>
                        <input class="button" type="submit" name="submit" value="Sauvegarder">
                        <br>
                        <br>
                    </div>
                    <div align="left">
                        <a class="linkP" value="précédent" href="http://localhost/application-web/Demande-page.php"><label class="link-P-label"><img src="retur-icon-black.png" width="55"/></label></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var btn = document.querySelector('.button'),
            loader = document.querySelector('.loader'),
            check = document.querySelector('.check');
        
        btn.addEventListener('click', function () {
          loader.classList.add('active');    
        });
       
        loader.addEventListener('animationend', function() {
          check.classList.add('active'); 
        });
    });
    </script>
</body>

</html>