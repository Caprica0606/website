<?php
include 'vars.php';
include 'lessonTemplate.php';
$introPara = "foreach loops make it easy to loop through the
values of an array.";
$tableName = "foreachLoop_examples";
$columnName1 = "topic";
$columnName2 = "syntax";
$columnName3 = "paragraph";
$exampleTitles = convertToArray($tableName,$columnName1);
$exampleImages = convertToArray($tableName,$columnName2);
$exampleParas = convertToArray($tableName,$columnName3);
?>
<!DOCTYPE html>
  <html>

  <?php
  $title = "Intro to PHP: Foreach Loop";
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
'foreach ($array as $value) {
    /*code*/;
}
';
  $text2 =
  'foreach ($ammo as $value) {
    echo "$value ";
}
';
  $copyName1 = 'foreachLoopSyntax';
  $lable1 = 'Foreach Syntax';
  $copyName2 = 'foreachLoopExample';
  $lable2 = 'Foreach Example';
  $numRows = 4;
  buildCopyBox ($copyName1,$lable1,$text1,$numRows);
  buildCopyBox ($copyName2,$lable2,$text2,$numRows);
  echo $divEnd;
  echo $col6;
  //echo "<p class = 'atom'>

//  </p>";
  showExamplesV3 ($exampleTitles,$exampleImages,$exampleParas);
  echo "<p class = 'atom'><font class = 'pur'>foreach </font>(<font class = 'rd'>\$ammo</font> as <font class = 'rd'>\$value</font>) { <br>
    <font class = 'blu'> &emsp;  echo</font> <font class = 'rd'>\$value</font>;<br>
  }</p>";
  echo "<p>Compare the loop above to the <a href = 'forLoopM.php'>for loop example</a>
  that performs the same functionality</p>";
  echo "<br>";
  makeParagraphs($assignmentFE,$assTopicFE);
  echo "<br><br>";
  echo $divEnd;
  echo $divEnd;
  echo $row;
  echo "<div class = 'col-9' align = 'center'>";
  makeParagraphs($assignment2FE,$assTopic2FE);
  echo $divEnd;
  ?>
    <!-- Code Editior-->
     <iframe frameborder="0" width="100%" height="500px" src="https://repl.it/H0Hi/8"></iframe>
    <script src="copyBox.js"></script>
  </body>
