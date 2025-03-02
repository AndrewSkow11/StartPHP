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

$users = [
  ['name' => 'Alena',
  'age' => 25,
  'city' => 'Moscow'
],
  ['name' => 'Vladimir',
  'age' => 30,
  'city' => 'Saint Petersburg'
],
  ['name' => 'Olga',
  'age' => 28,
  'city' => 'London']
];

// usort() - встроенная функция для сортировки
// usort  в качестве первого аргумента принимает массив, 
// в качестве второго аргумента принимает - callback 

function print_array ($array){
  echo "<pre>";
  print_r($array);
  echo "</pre>";
}

$words = ['something', 'else', 'nothing', 'apple', 'orange'];
$filtredArray = array_filter($words, function ($word) {
  return strlen($word) > 5; // остаются слова только длиной больше 5 символов
});

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
      box-sizing: border-box;
    }

    h1, h2 {
      text-align: center;
    }

    .theory {
      margin-top: 15px;
      margin-bottom: 15px;
      padding: 10px;
      border-radius: 15px;
      background-color: lightgreen;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
      text-align: justify;
    }

    .php_result {
      margin: 15px;
      font-family: monospace;
      font-weight: bold;
      color: green;
      background-color: black;
      padding: 10px;
      border-radius: 15px;
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

    <div class="theory">
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
      С помощью ключевого слова use($variable) можно предать глобальную переменную 
      в анонимную функцию . 
    </p>
    </div>

    <div class="container_grid">
      <div class="php_result">
        <h6>Использование анонимной функции</h6>
        <?php
        $sum = $sum(5, 10);
        echo $sum;
       ?>
        </div>

<div class="php_result">
        <h6>Использование callback функции</h6>
        <?php
        echo "<h6>Начальный массив</h6>";
        print_array($users);
        usort($users, function ($a, $b)  {
          // $a and $b - два элемента массива users, которые нужно сравнить 
          // внутри анонимной функции записывается логика сравнения массивов 
          return $a['age'] - $b['age']; // сравниваем возрасты, если они равны, то сравниваем имена
          // если результат будет ортцательный, то а будет располагаться перед б 
          // если равен нулю, то порядок элементов не изменится 
        });
        echo "<h6>Отсортированный массив</h6>";
        print_array($users);
       ?> 

        </div>
<div class="php_result">
        <h6>Использование array_filter</h6>
        <?php
        echo "<h6>Начальный массив слов</h6>";
        print_array($words);
        echo "<h6>Фильтрованный массив</h6>";
        print_array($filtredArray);
        ?> 
        </div>

      </div>

    </div>
  
</body>

</html>