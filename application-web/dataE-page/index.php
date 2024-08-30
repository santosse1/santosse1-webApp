<?php

require_once('dbE_connection.php');
$query = "SELECT * FROM tb_data";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data-page</title>
    <link rel="icon" href="http://localhost/application-web/32.32png.png" sizes="32x32" />
    <link rel="icon" href="http://localhost/application-web/192.192png.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="http://localhost/application-web/180.180png.png" />
    <meta name="msapplication-TitleImage" centent="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="styleE.css" />
</head>
<body>
    <div>
        <img class="logo" src="http://localhost/application-web/logo.png" width="230" />
    </div>
    <div align="right">
        <a href="javascript:close_window();"><img style="position:relative;left:-10em;border:2px solid white" src="close-icon.png" width="55"/></a>
    </div>
    <div class="bg-from" align="center" >
        <form border="1px">
        <div>
            <div>
                <div class="bg-dE-h2">
                    <h2 class="dE-h2"><b><i>La Liste des Entrantes</i></b></h2>
                </div>
            </div>
            <br>
            <div>
                <div class="searchbar-size">
                    <form action="" method="get">
                            <div class="input-group mb-3" >
                               <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="insère le matricule" required/>
                               <button type="submit" class="input-group-text" id="basic-addon2">recherch</button>
                            </div>
                    </form>
                </div>
            </div>
            <div>
                <table class="table" border="1px">
                    <thead align="center">
                        <tr class="thead-tr">
                            <td class="thead-td">id</td>
                            <td class="thead-td">matricule</td>
                            <td class="thead-td">gender</td>
                            <td class="thead-td">nom</td>
                            <td class="thead-td">prenom</td>
                            <td class="thead-td">observation</td>
                            <td class="thead-td">acces</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            if(isset($_GET['search']))
                            {
                                $filtervalues = $_GET['search'];
                                $query = "SELECT * FROM tb_data WHERE CONCAT(matricule,genderu,nom,prenom,observation,acces) LIKE '%$filtervalues%' ";
                                $query_run = mysqli_query($conn, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $items)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $items['id']; ?></td>
                                            <td><?= $items['matricule']; ?></td>
                                            <td><?= $items['genderu']; ?></td>
                                            <td><?= $items['nom']; ?></td>
                                            <td><?= $items['prenom']; ?></td>
                                            <td><?= $items['observation']; ?></td>
                                            <td><?= $items['acces']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                            }
   
                        ?>
                    </tbody>
                </table>
            </div>
            <br>
            <table class="table" border="1px">
                <thead align="center">
                    <tr class="thead-tr">
                        <td class="thead-td">id</td>
                        <td class="thead-td">matricule</td>
                        <td class="thead-td">gender</td>
                        <td class="thead-td">nom</td>
                        <td class="thead-td">prenom</td>
                        <td class="thead-td">observation</td>
                        <td class="thead-td">acces</td>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                     while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['matricule']; ?></td>
                        <td><?php echo $row['genderu']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['prenom']; ?></td>
                        <td><?php echo $row['observation']; ?></td>
                        <td><?php echo $row['acces']; ?></td>
                    </tr>
                    <?php
                     }
                         
                    ?>
                    </tr>
                </tbody>
            </table>
        </div>
        </form>
    </div>
    <script>
        function close_window() {
        if (confirm("Fermer la page?")) {
          close();
        }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>