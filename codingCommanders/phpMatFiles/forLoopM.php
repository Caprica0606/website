<?php
include 'vars.php';
include 'lessonTemplate.php';
$introPara = "<i>(If you are unsure what a loop is, visit
<a href = 'loopsM.php'>What is a loop?</a></i>)";
$tableName = "forLoop_examples";
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
  $title = "Intro to PHP: For Loop";
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
  $text1 =
'for ($i = /*init*/; $i < /*test*/; $i/*increment*/) {
  /*code*/;
}';
  $text2 =
  'for ($i = 1; $i < 10; $i++) {
    echo $i."<br>";
}';
  $copyName1 = 'forLoopSyntax';
  $lable1 = 'For Loop Syntax';
  $copyName2 = 'forLoopExample';
  $lable2 = 'For Loop Example';
  $numRows = 2;
  buildCopyBox ($copyName1,$lable1,$text1,$numRows);
  buildCopyBox ($copyName2,$lable2,$text2,$numRows);
  echo $divEnd;
  echo $col6;
  showExamples ($exampleTitles,$exampleImages,$exampleParas);
  echo "<br>";
  $assignment = array ("Create a for loop for a card game. Each player receives 5 random cards
  from the deck. The loop should iterate until each player has
  5 random cards.");
  $assTopic = array ("Applied Assignment");
  makeParagraphs($assignment,$assTopic);
  echo $divEnd;
  echo $divEnd;
  ?>
    <!-- Code Editior-->
     <iframe frameborder="0" width="100%" height="500px" src="https://repl.it/HZzv/1"></iframe>
    <script src="copyBox.js"></script>
  </body>
?>
