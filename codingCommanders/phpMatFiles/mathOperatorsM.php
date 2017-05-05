<?php
include 'vars.php';
include 'lessonTemplate.php';
$introPara = "Math Operators are used to perform numeric calculations.
It is pretty much just like in grammar school math class.";
$tableName = "math_examples";
$columnName1 = "topic";
$columnName2 = "image";
$columnName3 = "paragraph";
$exampleTitles = convertToArray($tableName,$columnName1);
$exampleImages = convertToArray($tableName,$columnName2);
$exampleParas = convertToArray($tableName,$columnName3);
?>
<!DOCTYPE html>
  <html>
  <?php
  $title = "Intro to PHP: Math Operators";
  // html head
  pageHead($title);
  echo $body;
  // page header
  buildHeading ($title);
  echo $row;
  echo $col3;
  echo $divEnd;
  echo $col6;
  echo $center;
  echo "<p>" . $introPara . "</p>";
  echo $divEnd;
  echo $divEnd;
  echo $divEnd;
  echo $row;
  echo $col3;
  $text1 = '$c = $a + $b;';
  $text2 = '$c = $a - $b;';
  $copyName1 = 'addition';
  $lable1 = 'addition';
  $copyName2 = 'subtraction';
  $lable2 = 'subtraction';
  $numRows = 2;
  buildCopyBox ($copyName1,$lable1,$text1,$numRows);
  buildCopyBox ($copyName2,$lable2,$text2,$numRows);
  $name3 = 'multiplication';
  $lable3 = 'multiplication';
  $text3 = '$c = $a * $b;';
  buildCopyBox ($name3,$lable3,$text3,$numRows);
  $name4 = 'division';
  $lable4 = 'division';
  $text4 = '$c = $a / $b;';
  buildCopyBox ($name4,$lable4,$text4,$numRows);
  $name5 = 'negation';
  $lable5 = 'negation';
  $text5 = '$a = - $b;';
  buildCopyBox ($name5,$lable5,$text5,$numRows);
  $name6 = 'exponents';
  $lable6 = 'exponents';
  $text6 = '$c = $a ** $b;';
  buildCopyBox ($name6,$lable6,$text6,$numRows);
  $name7 = 'modul';
  $lable7 = 'modul';
  $text7 = '$c = $a % $b;';
  buildCopyBox ($name7,$lable7,$text7,$numRows);
  $name9 = 'preincrement';
  $lable9 = 'Pre-increment';
  $text9 = '++$i;';
  buildCopyBox ($name9,$lable9,$text9,$numRows);
  $name10 = 'postincrement';
  $lable10 = 'Post-increment';
  $text10 = '$i++;';
  buildCopyBox ($name10,$lable10,$text10,$numRows);
  $name11 = 'predecrement';
  $lable11 = 'Pre-decrement';
  $text11 = '--$i;';
  buildCopyBox ($name11,$lable11,$text11,$numRows);
  $name12 = 'postdecrement';
  $lable12 = 'Post-decrement';
  $text12 = '$i--;';
  buildCopyBox ($name12,$lable12,$text12,$numRows);
  echo $divEnd;
  echo $col6;
  showExamples ($exampleTitles,$exampleImages,$exampleParas);
  echo $divEnd;
  echo $divEnd;
  ?>
    <!-- Code Editior-->
     <iframe frameborder="0" width="100%" height="500px" src="https://repl.it/HZaV/7"></iframe>
    <script src="copyBox.js"></script>
  </body>
</html>
