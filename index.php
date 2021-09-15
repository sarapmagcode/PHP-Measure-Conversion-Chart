<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Measure Conversion Chart</title>
    </head>
    <body>
        <?php
            $x = 1;
        ?>
        <div class="container">
            <h1>Measure Conversion Chart - Lengths</h1>
            <!-- Metric Conversions -->
            <table class="container-table">
                <th colspan="6">METRIC CONVERSIONS</th>
                <tr>
                    <td><?php echo $x . " centimetre"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 10) . " millimetres"; ?></td>
                    <td><?php echo $x . " cm" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 10) . " mm"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " decimetre"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 10) . " centimetres"; ?></td>
                    <td><?php echo $x . " dm" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 10) . " cm"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " metre"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 100) . " centimetres"; ?></td>
                    <td><?php echo $x . " m" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 100) . " cm"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " kilometre"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 1000) . " metres"; ?></td>
                    <td><?php echo $x . " km" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 1000) . " m"; ?></td>
                </tr>
            </table>

            <!-- Imperial Conversions -->
            <table class="container-table">
                <th colspan="6">IMPERIAL CONVERSIONS</th>
                <tr>
                    <td><?php echo $x . " foot"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 12) . " inches"; ?></td>
                    <td><?php echo $x . " ft" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 12) . " in"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " yard"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 3) . " feet"; ?></td>
                    <td><?php echo $x . " yd" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 3) . " ft"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " chain"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 22) . " yards"; ?></td>
                    <td><?php echo $x . " ch" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 22) . " yd"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " furlong"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 220) . " yards (or " . ($x * 10) . " chains)"; ?></td>
                    <td><?php echo $x . " fur" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 220) . " yd (or " . ($x * 10) . " ch)"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " mile"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 1760) . " yards (or " . ($x * 8) . " furlongs)"; ?></td>
                    <td><?php echo $x . " mi" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 1760) . " yd (or " . ($x * 8) . " fur)"; ?></td>
                </tr>
            </table>
            
            <!-- Metric -> Imperial Conversions -->
            <table class="container-table">
                <th colspan="6">METRIC -> IMPERIAL CONVERSIONS</th>
                <tr>
                    <td><?php echo $x . " millimetre"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x / 25.4) . " inches"; ?></td>
                    <td><?php echo $x . " mm" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x / 25.4) . " in"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " centimetre"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x / 2.54) . " inches"; ?></td>
                    <td><?php echo $x . " cm" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x / 2.54) . " in"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " metre"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 39.37) . " inches"; ?></td>
                    <td><?php echo $x . " m" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 39.37) . " in"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " metre"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 3.281) . " feet"; ?></td>
                    <td><?php echo $x . " m" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 3.281) . " ft"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " metre"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 1.094) . " yards"; ?></td>
                    <td><?php echo $x . " m" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 1.094) . " yd"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " kilometre"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 1094) . " yards"; ?></td>
                    <td><?php echo $x . " km" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 1094) . " yd"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " kilometre"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x / 1.609) . " miles"; ?></td>
                    <td><?php echo $x . " km" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x / 1.609) . " mi"; ?></td>
                </tr>
            </table>

            <!-- Imperial -> Metric Conversions -->
            <table class="container-table">
                <th colspan="6">IMPERIAL -> METRIC CONVERSIONS</th>
                <tr>
                    <td><?php echo $x . " inch"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 2.54) . " centimetres"; ?></td>
                    <td><?php echo $x . " in" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 2.54) . " cm"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " foot"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 30.48) . " centimetres"; ?></td>
                    <td><?php echo $x . " ft" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 30.48) . " cm"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " yard"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 91.44) . " centimetres"; ?></td>
                    <td><?php echo $x . " yd" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 91.44) . " cm"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " yard"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x / 1.094) . " metres"; ?></td>
                    <td><?php echo $x . " yd" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x / 1.094) . " m"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " miles"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 1609) . " metres"; ?></td>
                    <td><?php echo $x . " mi" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 1609) . " m"; ?></td>
                </tr>
                <tr>
                    <td><?php echo $x . " miles"; ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 1.609) . " kilometres"; ?></td>
                    <td><?php echo $x . " mi" ?></td>
                    <td><?php echo "="; ?></td>
                    <td><?php echo ($x * 1.609) . " km"; ?></td>
                </tr>
            </table>
        </div>
    </body>
</html>
