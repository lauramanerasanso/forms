<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Resultat Get - Laura Manera Sansó</title>
        <style>
            th, td{
                border: solid;
            }
        </style>
</head>
<body>
    <h4>Les dades introduïdes al formulari són:</h4>
    <table style="width:100%">
        <tr>
            <th>Nom:</th>
            <td>
                <?php
                    $nom = $_GET['nom'];
                    echo $nom;
                ?>
            </td> 
        </tr>
        <tr>
            <th>Llinatges:</th>
            <td>
                <?php
                    $ll = $_GET['llinatges'];
                    echo $ll;
                ?>
            </td> 
        </tr>
        <tr>
            <th>E-mail:</th>
            <td>
                <?php
                    $email = $_GET['email'];
                    echo $email;
                ?>
            </td> 
        </tr>
    </table>
</div>
</body>
</html>