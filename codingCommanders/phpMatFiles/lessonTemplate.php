<?php
include 'vars.php';
//Conect to database


  $servername = "localhost";
  $username = "mselzer";
  $password = "redbull";
  $dbname = "Coding_Commanders_Database";

  try {
       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $stmt = $conn->prepare("SELECT intro_paragraph FROM PHP_intro_paragraphs ");
       $stmt->execute();
       // Put results inside an array
       $result = $stmt->fetchALL(PDO::FETCH_COLUMN);
       //print_r($result);
       $introParagraphs = array ();
       $i = 0;
       foreach ($result as $value) {
        $introParagraphs[$i] = $value;
        $i++;
       }
    return $introParagraphs;
  }
  catch(PDOException $e) {
       echo "Error: " . $e->getMessage();
  }
  $conn = null;


// Examples
function convertToArray($table,$column) {
  //Conect to database
  $servername = "localhost";
  $username = "mselzer";
  $password = "redbull";
  $dbname = "Coding_Commanders_Database";
  try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $topicStmt = $conn->prepare("SELECT $column FROM $table");
        $topicStmt->execute();

        $nResult = $topicStmt->fetchALL(PDO::FETCH_COLUMN,0);
        $names = array ();
        $i = 0;
        foreach ($nResult as $value) {
          $names[$i] = $value;
          $i++;
        }

      }
      catch(PDOException $e) {
           echo "Error: " . $e->getMessage();
      }
      $conn = null;
      return $names;
}
// Page head
function pageHead ($title){
  echo "<head>";
  echo "<link rel= 'stylesheet' type= 'text/css' href ='../codingCommanders.css'>
  <link rel='stylesheet' type= 'text/css' href='customLessons.css'>
  <link rel='stylesheet' type= 'text/css' href='prism.css'>";
  echo "<title>" . $title . "</title>";
  echo "</head>";
}

// Top menu function (Place Holder Version)
function buildTopMenu () {
  echo "<div class = 'menuDiv'>";
  echo "<span class = 'row'>";
echo "<a class = 'nav' href = '../codingCommanders.php'>Home</a>
      <a class ='nav' href ='../phpLessons.php'>Lessons</a>
      <a class = 'nav' href = 'https://www.youtube.com/channel/UC-gCUMK_EGUqJ7P9VA7BJmQ'>YouTube Channel</a>
      <a class = 'nav' href = '../blog.html'>B l o g</a>
      </span>
      </div>";
    }

// Page Name Function
function buildPageName($pageName) {
  echo "<div class = 'row'>
        <div class = 'col-6' style = 'float: right;'>
        <div class = 'heading'>
          <h1>" . $pageName . "</h1>
       </div>
       </div>
       <span>";
     }

// logo function
function insertLogo () {
  echo  "   <div class = 'col-3' style = 'float: left;'>";
  echo "      <img width = '250px;' src = '../logo.png'>
      </div>
    </div>
    </span>";
  }

// Page Heading Display Function
function buildHeading ($pageName) {
  echo "<div class = 'headContainer'>";
  buildTopMenu();
  buildPageName($pageName);
  insertLogo ();
  echo "</div>";
}

// Copy Box Display Function
function buildCopyBox ($boxName,$title,$text,$numRows) {
  echo
  "<div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div col-3>
        <button data-copytarget = '#" . $boxName . "' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '" . $numRows . "' col = '35' id='" . $boxName . "' style = 'inline-block'>" . $text . "</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='" . $boxName . "' >" . $title . "</label>
        </div>
    </div>
    </div>";

  }

// pictures function
function showPictures($picFiles) {
  foreach ($picFiles as $pic){
  echo "<img src = '" . $pic . "'>";
  }
}

// Paragraphs function
function makeParagraphs($paragraphArray,$topicsArray) {
  $i = 0;
  foreach ($paragraphArray as $paragraph) {
    echo "<h3>" . $topicsArray[$i] . "</h3>";
    echo "<div class = 'classyDiv'>" . $paragraph . "</div>" . "<br>";
    $i++;
  }
}

// Example function
function showExamples ($titleArray,$imgArray,$paragraphsArray) {
  $i = 0;
  echo "<div> ";
  foreach ($titleArray as $title) {
    echo "<h2 >" . $title . "</h2>";
    echo "<img src = '" . $imgArray[$i] . "'>";
    echo "<br><br>";
    echo "<p>" . $paragraphsArray[$i] . "</p>" . "<br>";
    $i++;
  }
  echo "</div>";
  echo "<br>";
}

// Example function
function showExamplesV3 ($titleArray,$syntax,$paragraphsArray) {
  $i = 0;
  echo "<div> ";
  foreach ($titleArray as $title) {
    echo "<h2 >" . $title . "</h2>";
    echo "<p class = 'atom'>" . $syntax[$i] . "</p>";
    echo "<br><br>";
    echo "<p>" . $paragraphsArray[$i] . "</p>" . "<br>";
    $i++;
  }
  echo "</div>";
  echo "<br>";
}

// Example function
function showExamplesV2 ($titleArray,$imgArray,$paragraphsArray) {
  $i = 0;
  echo "<div> ";
  foreach ($titleArray as $title) {
    echo "<h2 >" . $title . "</h2>";
    echo $imgArray[$i];
    echo "<br><br>";
    echo "<p>" . $paragraphsArray[$i] . "</p>" . "<br>";
    $i++;
  }
  echo "</div>";
  echo "<br>";
}

// Content Intro function
function showIntro ($introParagraph, $synPics, $synParagraphs) {
  echo "<p>" . $introParagraph . "</p>";
  echo "<h2>Syntax</h2>";
  showPictures($synPics);
  makeParagraphs($synParagraphs);
}

// Code Iframe FUnction
function createCodeFrame ($repLink) {
  echo "<div class = 'row'>
    <iframe frameborder='0' width='100%' height='500px' src='" . $repLink . "'></iframe>
    <br><br><br>
  </div>";
}
 ?>
