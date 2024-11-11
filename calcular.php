<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcular</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: black;
      color: #333;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .container {
      background-color: grey;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      text-align: center;
    }
    .result {
      font-size: 1.5em;
      color: #007BFF;
      margin: 20px 0;
    }
    a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007BFF;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
    }
    a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="container">
    <?php
    if (isset($_REQUEST['radio1']) && isset($_REQUEST['valor1']) && isset($_REQUEST['valor2'])) {
      $valor1 = $_REQUEST['valor1'];
      $valor2 = $_REQUEST['valor2'];
      $operacion = $_REQUEST['radio1'];
      $resultado = "";

      if ($operacion == "suma") {
        $resultado = $valor1 + $valor2;
        echo "<div class='result'>La suma es: $resultado</div>";
      } elseif ($operacion == "resta") {
        $resultado = $valor1 - $valor2;
        echo "<div class='result'>La resta es: $resultado</div>";
      } elseif ($operacion == "multi") {
        $resultado = $valor1 * $valor2;
        echo "<div class='result'>La multiplicación es: $resultado</div>";
      } elseif ($operacion == "divi") {
        if ($valor2 != 0) {
          $resultado = $valor1 / $valor2;
          echo "<div class='result'>La división es: $resultado</div>";
        } else {
          echo "<div class='result' style='color: red;'>Error: No se puede dividir por cero.</div>";
        }
      }
    } else {
      echo "<div class='result' style='color: red;'>Datos inválidos. Intente de nuevo.</div>";
    }
    ?>
    <a href="index.html">Inicio</a>
  </div>

</body>
</html>