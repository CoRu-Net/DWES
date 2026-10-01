<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD2_</title>
</head>

<body>

    <body>
        <style>
            body {
                background-color: #f0f0f0;
                font-family: Arial, sans-serif;
                padding-top: 50px;
            }

            /* 1. ESTE ES EL MARCO EXTERIOR GRUESO CON SOMBRA */
            .tarjeta-tabla {
                background-color: white;
                border: 4px solid #000000;
                width: fit-content;
                margin: 0 auto;
                padding: 20px 25px;
                text-align: left;
  
            }

            /* 2. EL TÍTULO PEGADITO */
            h2 {
                margin: 0 0 15px 0;              
                font-size: 1.6rem;
                font-weight: bold;
            }


            table {                
                border-collapse: collapse;
            }

            td {               
                border: 1px solid #000000;
                padding: 8px 12px;
                text-align: center;
                font-size: 1.2rem;
            }
        </style>

        <div class="tarjeta-tabla">

            <h2>Tabla de multiplicar del 7</h2>

            <table>
                <tbody>
                    <?php
                    $suma = 0;
                    for ($a = 1; $a <= 10; $a++) {
                        $suma = 7 * $a;
                        echo "<tr><td>7</td><td>x</td><td>$a</td><td>=</td><td>$suma</td></tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </body>

</html>