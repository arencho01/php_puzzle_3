<?php
    include_once('test.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Test 3</title>
</head>
<body>
    <div class="task">
        <h3 class="task__title">
            Напишите функцию sum_intersect(array $arr1, array $arr2): int, которая найдет сумму пересекающихся значений в массиве. Например в массиве [2, 5, 7] и [1, 2, 5], пересекаются [2, 5] их сумма 7.
        </h3>
        <p class="task__res">
            Результат выполнения функции sum_intersect($arr1, $arr2),
            <br>
            где $arr1 - [2, 5, 7], $arr2 - [1, 2, 5]:
        </p>
        <p class="task__output">
            <?php print_r(sum_intersect([2, 5, 7], [1, 2, 5])) ?> 
        </p>
    </div>
    <div class="task">
        <h3 class="task__title">
            Напишите функцию sum_n_elements(array $arr, int $n): int, которая считает сумму первых $n элементов массива. Например: Для массива [1, 2, 3, 4] при $n = 2 сумма первых элементов равна 3.
        </h3>
        <p class="task__res">
            Результат выполнения функции sum_n_elements($arr1, $n),
            <br>
            где $arr - [1, 2, 3, 4], $n - 2:
        </p>
        <p class="task__output">
            <?php echo sum_n_elements([1, 2, 3, 4], 2) ?> 
        </p>
    </div>
    <div class="task">
        <h3 class="task__title">
            Напишите функцию sum_of_pairs(array $arr): array, которая считает суммы соседних чисел в массиве. Например: для массива [1, 2, 3, 4, 5, 6] результат будет [3, 7, 11]
        </h3>
        <p class="task__res">
            Результат выполнения функции sum_of_pairs($arr),
            <br>
            где $arr - [1, 2, 3, 4, 5, 6]:
        </p>
        <p class="task__output">
            <?php print_r(sum_of_pairs([1, 2, 3, 4, 5, 6])) ?> 
        </p>
    </div>
</body>
</html>