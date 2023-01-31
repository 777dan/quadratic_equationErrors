<?php
// $a = rand(-5, 5);
// $b = rand(-10, 10);
// $c = rand(-10, 10);
// if ($a != 0) {
//     $d = ($b * $b) - 4 * $a * $c;
//     echo ($d);
//     if ($d < 0) {
//         echo "<p>Квадратное уравнение не имеет корней</p>";
//     }
//     if ($d == 0) {
//         $x = -$b / (2 * $a); 
//         echo "<p>Квадратное уравнение имеет один корень: " . $x . "</p>";
//     }
//     if ($d > 0) {
//         $x1 = (-$b + sqrt($d)) / (2 * $a); 
//         $x2 = (-$b - sqrt($d)) / (2 * $a); 
//         echo "<p>Квадратное уравнение имеет два корня: " . $x1 . " и " . $x2  . "</p>";
//     }
// }
// else {
//     echo "<p>Коэффициент а не может быть равен нулю</p>";
// }
class LackOfSquareRoots extends Exception
{
}
class NullCoefficient extends Exception
{
}

try {
    $a = rand(-5, 5);
    $b = rand(-10, 10);
    $c = rand(-10, 10);
    if ($a != 0) {
        $d = ($b * $b) - 4 * $a * $c;
        echo ($d);
        if ($d < 0) {
            throw new LackOfSquareRoots("Квадратное уравнение не имеет корней");
        }
        if ($d == 0) {
            $x = -$b / (2 * $a);
            echo "<p>Квадратное уравнение имеет один корень: " . $x . "</p>";
        }
        if ($d > 0) {
            $x1 = (-$b + sqrt($d)) / (2 * $a);
            $x2 = (-$b - sqrt($d)) / (2 * $a);
            echo "<p>Квадратное уравнение имеет два корня: " . $x1 . " и " . $x2 . "</p>";
        }
    } else {
        throw new NullCoefficient("Коэффициент а не может быть равен нулю");
    }
} catch (LackOfSquareRoots $e) {
    error_log("{$e->getMessage()}\n", 3, "./php.log");
} catch (NullCoefficient $e) {
    error_log("{$e->getMessage()}\n", 3, "./php.log");
}