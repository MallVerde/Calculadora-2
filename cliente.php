<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Calculadora 2</title>
</head>
<body>
    <div class="contenedor">
        <div class="calculadora">
            <div class="formulario">
                <h1>Calculadora 2</h1>
                <form action="cliente.php" method="get">
                    Numero1: <input type="number" name="a" autocomplete="off" required>
                    Numero2: <input type="number" name="b" autocomplete="off" required>
                    Operacion: <select name="action">
                        <option value="suma">suma</option>
                        <option value="multiplicacion">multiplicacion</option>
                        <option value="resta">resta</option>
                        <option value="division">division</option>
                    </select><br>
            
                <?php
            //OPERACION SUMA
                if (isset($_GET["action"]) && $_GET["action"] == "suma") {
                    $calculadora = file_get_contents('http://localhost/calculadora2/servicio.php?action=suma&a='.$_GET["a"].'&b='.$_GET["b"]);
                    $calculadora = json_decode($calculadora, true);
                ?>
                    <br>
                    <h1>SUMA</h1>
                    <table>
                        <tr>
                            <td>Primer número </td>
                            <td>: <?php echo $calculadora["a"] ?></td>
                        </tr>
                        <tr>
                            <td>Segundo número </td>
                            <td>: <?php echo $calculadora["b"] ?></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>
                                : <b><?php echo $calculadora["total"] ?><b>
                            </td>
                        </tr>
                    </table>
                <?php
                }
            //OPERACION MULTIPLICACION
                if (isset($_GET["action"]) && $_GET["action"] == "multiplicacion") {
                    $calculadora = file_get_contents('http://localhost/calculadora2/servicio.php?action=multiplicacion&a='.$_GET["a"].'&b='.$_GET["b"]);
                    $calculadora = json_decode($calculadora, true);
                ?>
                    <br>
                    <h1>MULTIPLICACIÓN</h1>
                    <table>
                        <tr>
                            <td>Primer número </td>
                            <td>: <?php echo $calculadora["a"] ?></td>
                        </tr>
                        <tr>
                            <td>Segundo número </td>
                            <td>: <?php echo $calculadora["b"] ?></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>
                                : <b><?php echo $calculadora["total"] ?><b>
                            </td>
                        </tr>
                    </table>
                <?php
                }
            //OPERACION RESTA
                if (isset($_GET["action"]) && $_GET["action"] == "resta") {
                    $calculadora = file_get_contents('http://localhost/calculadora2/servicio.php?action=resta&a='.$_GET["a"].'&b='.$_GET["b"]);
                    $calculadora = json_decode($calculadora, true);
                ?>
                    <br>
                    <h1>RESTA</h1>
                    <table>
                        <tr>
                            <td>Primer número </td>
                            <td>: <?php echo $calculadora["a"] ?></td>
                        </tr>
                        <tr>
                            <td>Segundo número </td>
                            <td>: <?php echo $calculadora["b"] ?></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>
                                : <b><?php echo $calculadora["total"] ?><b>
                            </td>
                        </tr>
                    </table>
                <?php
                }
            //OPERACION DIVISION
                if (isset($_GET["action"]) && $_GET["action"] == "division") {
                    $calculadora = file_get_contents('http://localhost/calculadora2/servicio.php?action=division&a='.$_GET["a"].'&b='.$_GET["b"]);
                    $calculadora = json_decode($calculadora, true);
                ?>
                    <br>
                    <h1>DIVISIÓN</h1>
                    <table>
                        <tr>
                            <td>Primer número </td>
                            <td>: <?php echo $calculadora["a"] ?></td>
                        </tr>
                        <tr>
                            <td>Segundo número </td>
                            <td>: <?php echo $calculadora["b"] ?></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>
                                : <b><?php echo $calculadora["total"] ?><b>
                            </td>
                        </tr>
                    </table>
                <?php
                }
                ?>
                    <input type="submit" value="Calcular" class="calcular">
                </form>
            </div>
        </div>
    </div>

</body>

</html>