<?php
function add($a, $b)
{
  return $a + $b;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Функции в PHP</title>
  <style>
    body {
      font-family: sans-serif;
    }
    h1 {
      text-align: center;
    }

    .php_result {
      margin: 15px;
      font-family: monospace;
      font-weight: bold;
      color: green;
      background-color: black;
      padding: 10px;
    }
    div.php_result>h6{
      color: white;
      text-align:center;
    }
  </style>
</head>

<body>
  <h1>Функции в PHP</h1>
  <div class="php_result">
    <h6>Использование функции add(10, 5)</h6>
    <?php
    echo add(5, 10);
    ?>
  </div>
  </div>
</body>

</html>