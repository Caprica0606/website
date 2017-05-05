<?php
include 'vars.php';
include 'lessonTemplate.php';
$introPara = "A loop is a block of code that repeats.";
$tableName = "loop_paragraphs";
$columnName1 = "topic";
$columnName3 = "paragraph";
$exampleTitles = convertToArray($tableName,$columnName1);
$exampleParas = convertToArray($tableName,$columnName3);
?>
<!DOCTYPE html>
  <html>
  <?php
  $title = "Intro to PHP: What is a loop?";
  $tit = "Intro to PHP & Computer Programming: What is a loop?";
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
  $text1 = 'switch (n) {   
    case "label1":       
      /*code to be executed if n = label1*/;
      break;
    case "label2":       
      /*code to be executed if n = label2*/;        
      break;   
    case "label3":       
      /*code to be executed if n = label3*/;        
      break;     
    default:       
      /*code to be executed if n ! = any label*/;
      }';
  $text2 = 'function functionName(argument,argument) {
    /*code...*/;
    return $value;
  }';
  $copyName1 = 'switch';
  $lable1 = 'Switch Statement';
  $numRows = 10;
  buildCopyBox ($copyName1,$lable1,$text1,$numRows);
  echo $divEnd;
  echo $col6;
  makeParagraphs($exampleParas,$exampleTitles);
  echo $divEnd;
  echo $divEnd;
  ?>
  </body>
  </html>
