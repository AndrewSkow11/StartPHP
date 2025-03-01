<?php
function add($a, $b)
{
  return $a + $b;
}

function greetUser()
{
  echo "Добро пожаловать, приятно видеть вас!";
}

function sumAnyNumbers(...$numbers)
{
  return array_sum($numbers);
}

function calculateAverage(...$numbers)
{
  if (count($numbers) > 0) {
    $sum = array_sum($numbers);
    $count = count($numbers);
    return $sum / $count;
  } else {
    return "Вы не ввели ни одного числа.";
  }
}

// анонимные функции 
$sum = function ($a, $b) {
  return $a + $b;
};
// вызывать фукнцию можно по той же переменной как обычную функцию 
// переменная, по которой вызывется функция является замыканием

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
      border-radius: 5px;
    }

    div.php_result>h6 {
      color: grey;
      text-align: center;
      font-size: 16px;
    }

    .container_grid {
      display: grid;
      background-color: darkgrey;
      border-radius: 15px;
    }

    @media (min-width: 1024px) {
      .container_grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
      }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
      .container_grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
      }
    }

    @media (max-width: 767px) {
      .container_grid {
        grid-template-columns: repeat(1, 1fr);
        gap: 0;
      }
    }
  </style>
</head>

<body>

  <h1>Функции в PHP</h1>
  <div class="container_grid">
    <div class="php_result">
      <h6>Использование функции add(10, 5)</h6>
      <?php
      echo add(5, 10);
      ?>
    </div>

    <div class="php_result">
      <h6>Использование функции greetUser()</h6>
      <?php
      greetUser();
      ?>
    </div>

    <div class="php_result">
      <h6>Использование функции с неопределённым числом аргументов</h6>
      <?php
      echo sumAnyNumbers(1, 2, 3, 4, 5);
      ?>
    </div>

    <div class="php_result">
      <h6> echo calculateAverage(1, 2, 3, 4, 5);
      </h6>
      <?php
      echo calculateAverage(1, 2, 3, 4, 5);
      ?>
    </div>


    <div class="php_result">
      <h6> echo calculateAverage();
      </h6>
      <?php
      echo calculateAverage();
      ?>
    </div>
    </div>


    <h2>Анонимные функции</h2>
    <p>
      Анонимыне функция - замыкания - особый тип функций, который может 
      быть создан без объявления имени. 
      <br>
      Мы создаём переменную и присваиваем ей анонимную функцию. 
      В таком случае эта переменная и будет являться замыканием. 
      По имени этой переменной и можно будет далее вызывать эту функцию. 
      <br>
      Анонимные функции могут быть также полезны, где ожидается колбек. 
      Колбек - передача функции в качестве аргумента в другую функцию или метод. 
      В качестве аргумента можно также переадавать анонимную функцию. 
    </p>

    <div class="container_grid">
      <div class="php_result">
        <h6>Использование анонимной функции</h6>
        <?php
        $sum = $sum(5, 10);
        echo $sum;
       ?>
      </div>

    </div>
  </>
</body>

</html>