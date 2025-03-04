<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci programacion web</title>
</head>
<body>
    <h1>Los primeros 2,048 números de Fibonacci "Sabrina Elizabeth Mejía Ugalde"</h1>
    <ul>
        <?php
            $n = 2049;
            $fib = [0, 1];
            
            for ($i = 2; $i < $n; $i++) {
                $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
            }
            
            foreach ($fib as $index => $num) {
                echo "<li><strong>$index:</strong> $num</li>";
            }
        ?>
    </ul>
</body>
</html>