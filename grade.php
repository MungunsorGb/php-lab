<?php
// URL-ээс утга авна, байхгүй бол анхны утга
$score = (int) ($_GET["score"] ?? 85);
$attendance = (int) ($_GET["attendance"] ?? 90);
// Арифметик оператор
$bonus = 5;
$total = $score + $bonus;
// if, elseif, else
if ($total >= 90 && $attendance >= 80) {
 $grade = "A";
} elseif ($total >= 80) {
 $grade = "B";
} elseif ($total >= 70) {
 $grade = "C";
} elseif ($total >= 60) {
 $grade = "D";
} else {
 $grade = "F";
}
// switch
switch ($grade) {
 case "A":
 case "B":
 $message = "Маш сайн";
 break;
 case "C":
 case "D":
 $message = "Дунд";
 break;
 default:
 $message = "Дахин суралцана";
}
// match (PHP 8)
$status = match (true) {
 $attendance >= 80 => "Ирц хангалттай",
 $attendance >= 60 => "Ирц дутуу",
 default => "Шалгалтад орох эрхгүй",
};
?>
<!DOCTYPE html>
<html lang="mn">
  <head>
    <meta charset="UTF-8">
    <title>Үнэлгээ</title>
  </head>
  <body>
    <p>Нийт оноо: <?php echo $total; ?> </p>
        <p>
            <?php
            if($total%2===0){
                echo "Нийт оноо тэгш";
            }
            else 
            echo "Нийт оноо сондгой";
            ?>
        </p>
    <p>Үнэлгээ: <?php echo $grade; ?> ( <?php echo $message; ?>) </p>
    <p>Ирц: <?php echo $status; ?> </p>
    <h3>== ба === ялгаа</h3>
    <pre>
				<?php
 var_dump(5 == "5");var_dump(5 === "5");
 ?>
			</pre>
  </body>
</html>