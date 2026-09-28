<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FC</title>
</head>
<body>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        table {
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            width: 450px;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000000;
            padding: 10px 12px;
            text-align: left;
            font-size: 16px;
        }
        th {
            background-color: #f2f2f2; 
            font-weight: bold;
            width: 40%;
        }
        td {
            background-color: #ffffff;
            width: 60%;}
    </style>
    
   <?php 
   $nombre= "Francisco Javier" ;
   $primer_apellido = "Córdoba";
   $segundo_apellido="Rubio";
   $email ="fcorrub18@g.educaand.es"   
   ?>
    <table>
        <tr>
            <th>Nombre</th>
            <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
            <th>Primer apellido</th>
            <td><?php echo $primer_apellido; ?></td>
        </tr>
        <tr>
            <th>Segundo apellido</th>
            <td><?php echo $segundo_apellido; ?></td>
        </tr>
        <tr>
            <th>email</th>
            <td><?php echo $email; ?></td>
        </tr>
    </table>
</body>
</html>