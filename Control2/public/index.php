<?php
echo 'CРС №1 Часть 1.', "<br>";
echo "<hr>";
// 1.
echo "Первое задание:","<br>";
$a = 3;
$b=$a;
echo 'переменная b =&nbsp;',$b, "<br>", "<hr>";
?>

<?php
//2
echo "Второе задание:","<br>";
$a = 10;
$b = 2;
$sym = $a+$b/2;
echo 'cумма переменных = &nbsp;', $sym,"<br>";


$a = 10;
$b = 2;
$raz = $a-$b/2;
echo 'разность переменных = &nbsp;', $raz,"<br>";


$a = 10;
$b = 2;
$pr = $a*$b/2;
echo 'произведение переменных = &nbsp;', $pr,"<br>";

$a = 10;
$b = 2;
$del = $a/$b/2;
echo 'деление переменных = &nbsp;', $del,"<br>","<hr>";


?>



<?php
echo "Третье задание:","<br>";
//3
$c = 15;
$d=2;
$result = $c+$d;
echo ' result =',$result,"<br>", "<hr>";
?>


<?php
echo "Четвёртое задание:","<br>";
//4
$a= 10;
$b=2;
$c=5;
$result = $a+$b+$c/3;
echo 'cумма переменных деленное на их среднее значение равно',$result,"<br>", "<hr>";
?>


<?php
echo "Пятое задание:","<br>";
//5
$a = 17;
$b = 10;
$c = $a-$b;
$d=17;
$result = $c+$d;
echo  'результат = &nbsp', $result, "<br>", "<hr>";
?>



<?php
 echo 'CРС №1 Часть 2.', "<br>", "<hr>";
// 1.
echo "1 задание:","<br>";
$text = 'Привет,мир &nbsp;';
echo $text, 'Моя первая программа',"<br>", "<hr>";
?>

<?php
// 2.
echo "2 задание:","<br>";
$text1='Привет,';
$text2='Мир!';

$result = $text1.$text2;
echo "Результат сложения строк &nbsp;", $result, "<br>","<hr>";

?>

<?php
// 3
echo "3 задание:", "<br>";
$name = 'Александр';
$text = "Новый текст";
echo 'Привет,&nbsp;',$name,"<br>", $text, "<hr>";

?>




<?php
echo "4 задание:", "<br>";
// 4
$age = 20;
$height = 164;
echo 'Мой возраст:',$age, '|','Мой рост:',$height, "<br>","<hr>"

?>


<?php
echo 'CРС №1 Часть 3.', "<br>", "<hr>";
// 1.
echo "1 задание:", "<br>";
$arr = array('a','b','c');
var_dump($arr);
echo "<br>". $arr {0}. $arr {1}. $arr {2}. "<hr>";
?>


<?php
echo "2 задание:", "<br>";
// 2.
$arr = array('a','b','c');
echo "<br>". $arr {0}. $arr {1}. $arr {2} . "<hr>";
?>


<?php

// 3.
echo "3 задание:", "<br>";
$arr = array('a','b','c','d');
echo "<br>". $arr {0}."+".$arr {1}.",". $arr {2}."+".$arr {3}. "," .$arr {0}. "-".$arr{3}.",".$arr {0}. "/".$arr{3},"<br>"."<hr>" ;
?>



<?php

// 4
echo "4 задание:", "<br>";
$arr = array('2','5','3','9');
$a = $arr {0} * $arr{1};
echo 'первый элемент умножаем со вторым равно ', $a,"<br>";
$b = $arr {2} * $arr{3};
echo 'второй элемент умножаем с третьим равно ', $b,"<br>";
$result = $a+$b;
echo "Результат сложения после умножения равно &nbsp;", $result, "<br>", "<hr>";
?>


