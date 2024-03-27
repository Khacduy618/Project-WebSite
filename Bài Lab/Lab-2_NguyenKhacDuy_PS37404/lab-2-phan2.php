<!DOCTYPE html>
<html>
<head>
<title>Giải phương trình bậc 2</title>
</head>
<body>
<?php
    // bài 1
    $age = 50;
    if($age < 30){
        echo "Your age less than 30!";
    }else if($age > 30 && $age < 40){
        echo "Your age between 30 and 40!";
    }else if($age > 340 && $age < 50){
        echo "Your age between 40 and 50!";
    }else{
        echo "Your age is greater than 50!<br/>";
    }
    //bài 2
    $max=0;
    echo $i=0;
    echo ",";
    echo $j=1;
    echo ",<br/>";
    $result=0;
    
    while($max < 10){
        $result = $i + $j;
        $i = $j;
        $j = $result;

        $max++;
        echo $result;
        echo ",<br/>";
    }
    //bài 3
    $fruits = array('apple', 'banana', 'organe', 'strawberry'); 
    foreach ($fruits as $fruit) {
        echo $fruit;
        echo "<br/>";
    }

    $employee = array('name' => 'John Smith', 'age' => 30);
    foreach ($employee as $key => $value) {
        echo sprintf("%s: %s",$key, $value);
        echo "<br/>";
    }
    
    //bài 4
    echo 'Simple Break';
    for($i=1; $i <= 2; $i++){
        echo "</br>".'i = '.$i.' ';
        for ($j=1; $j <= 5; $j++) { 
            if ($j == 2) {
                break;
            }
            echo 'j = '.$j.' ';
        }
    }
    
    echo'</br> Multi-level break';
    for ($i=1; $i <= 2 ; $i++){
        echo "</br>".'i = '.$i.' ';
        for ($j=1; $j <= 5; $j++) { 
            if($j == 2){
                break 2;
            }
            echo 'j = '.$j.' </br>';
        }
    }
    ?>
 <!-- Bài tập thêm -->
 <?php
// khai báo các biến toàn cầu
$heso_a = "";
$heso_b = "";
$heso_c = "";
// đọc các hệ số từ FORM
if (isset ( $_POST ['heso_a'] )) {
    $heso_a = $_POST ['heso_a'];
}
if (isset ( $_POST ['heso_b'] )) {
    $heso_b = $_POST ['heso_b'];
}
if (isset ( $_POST ['heso_c'] )) {
    $heso_c = $_POST ['heso_c'];
}
/**
 * giải phương trình bậc 2 trong PHP
 *
 * @author: viettuts.vn
 * @param
 *            he so bac 2 $a
 * @param
 *            he so bac 1 $b
 * @param
 *            he so tu do $c
 */
function giaiPTB2($a, $b, $c) {
    // kiểm tra biến đầu vào
    if ($a == "")
        $a = 0;
    if ($b == "")
        $b = 0;
    if ($c == "")
        $c = 0;
    // in phương trình ra màn hình
    echo "Phương trình: " . $a . "x2 + " . $b . "x + " . $c . " = 0";
    echo "<br>";
    // kiểm tra các hệ số
    if ($a == 0) {
        if ($b == 0) {
            echo ("Phương trình vô nghiệm!");
        } else {
            echo ("Phương trình có một nghiệm: " . "x = " . (- $c / $b));
        }
        return;
    }
    // tính delta
    $delta = $b * $b - 4 * $a * $c;
    $x1 = "";
    $x2 = "";
    // tính nghiệm
    if ($delta > 0) {
        $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
        $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
    } else if ($delta == 0) {
        $x1 = (- $b / (2 * $a));
        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
    } else {
        echo ("Phương trình vô nghiệm!");
    }
}
?>
<form action="#" method="post">
 <table>
  <tr>
   <td>Hệ số bậc 2, a</td>
   <td><input type="text" name="heso_a" value="<?=$heso_a?>" /></td>
  </tr>
  <tr>
   <td>Hệ số bậc 1, b</td>
   <td><input type="text" name="heso_b" value="<?=$heso_b?>" /></td>
  </tr>
  <tr>
   <td>Hệ số tự do, c</td>
   <td><input type="text" name="heso_c" value="<?=$heso_c?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Kết quả"></td>
  </tr>
 </table>
</form>
<br>
<?php
// gọi hàm giải phương trình bậc 2
// Sử dụng từ kháo $GLOBALS để đọc các biến toàn cầu và truyền vào hàm
if (is_numeric ( $GLOBALS ['heso_a'] ) && is_numeric ( $GLOBALS ['heso_b'] ) 
        && is_numeric ( $GLOBALS ['heso_c'] )) {
    giaiPTB2 ( $GLOBALS ['heso_a'], $GLOBALS ['heso_b'], $GLOBALS ['heso_c'] );
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>

</body>
</html>
