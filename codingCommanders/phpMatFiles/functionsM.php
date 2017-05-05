<?php
include 'vars.php';
include 'lessonTemplate.php';
$introPara = $introParagraphs[7];
$tableName = "function_paragraphs";
$columnName1 = "paragraph";
$columnName2 = "topic";
$functionParagraphs = convertToArray($tableName,$columnName1);
$functionTopics = convertToArray($tableName,$columnName2);
?>
<!DOCTYPE html>
  <html>
  <?php
  $title = "Intro to PHP: What is a function?";
  $tit = "Intro to PHP & Computer Programming:  What is a function?";
  // html head
  pageHead($tit);
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
  $text1 = "function functionName(argument,argument) {" . "\n" . "  " . "code... ;" . "\n" . "};";
  $text2 = "functionName(parameter,parameter);";
  $copyName1 = 'functionDeclare';
  $lable1 = 'Declare a function';
  $copyName2 = 'functionCall';
  $lable2 = 'Call a Function';
  $numRows = 3;
  buildCopyBox ($copyName1,$lable1,$text1,$numRows);
  buildCopyBox ($copyName2,$lable2,$text2,$numRows);
  echo $divEnd;
  echo $col6;
  makeParagraphs($functionParagraphs,$functionTopics);
  echo $divEnd;
  echo $divEnd;
  ?>
  <iframe frameborder="0" width="100%" height="500px" src="https://repl.it/H98z/0"></iframe>
    <script src="copyBox.js"></script>
  </body>
</html>
