<?php
include 'vars.php';
include 'lessonTemplate.php';
$introPara = $introParagraphs[2];
$tableName = "echo_examples";
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
$title = "Intro to PHP: echo";
// html head
pageHead($title);
echo $body;
// page header
buildHeading ($title);
echo $row;
echo $col3;
$text1 = "echo 'text';";
$text2 = 'echo $variableName;';
$copyName1 = 'echoString';
$lable1 = 'echo string';
$copyName2 = 'echoVar';
$lable2 = 'echo variable';
$numRows = 2;
$num5 = 5;
buildCopyBox ($copyName1,$lable1,$text1,$numRows);
buildCopyBox ($copyName2,$lable2,$text2,$numRows);
echo $divEnd;
echo $col6;
echo $center;
echo "<p>" . $introPara . "</p>";
echo $divEnd;
echo $divEnd;
echo $divEnd;
echo $row;
echo $col3;
$name3 = 'concatenation';
$lable3 = 'Concatenation Example';
$text3 = 'echo "I give " . $gameTitle . " " . $numStars . " stars!";';
buildCopyBox ($name3,$lable3,$text3,$num5);
echo $divEnd;
echo $col6;
showExamples ($exampleTitles,$exampleImages,$exampleParas);
echo $divEnd;
echo $divEnd;
 ?>
<!-- Code Editior-->
  <iframe frameborder="0" width="100%" height="500px" src="https://repl.it/HXwV/5"></iframe>
    <script src = 'copyBox.js'></script>
  </body>
</html>
