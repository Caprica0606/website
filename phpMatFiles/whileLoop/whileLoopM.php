<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../../codingCommanders.css">
<title>Coding Commanders</title>
<style>
p {
  border-radius: 9px;
  margin-left: 100px;
  margin-right:100px;
  color: black;
  font-style: Helvetica sans-serif;
  font-size: 24px;
  line-height: 200%;
  text-emphasis: bolder;
  background-color: #FFDF42;
  box-shadow: 4px 4px 2.5px #443700;
  max-width: 66.6%;
}
h3 {
  color: #443700;
}
h6 {
  color: black;
  font-style: Helvetica sans-serif;
  font-size: 24px;
  font-style: italic;
}
img {
  border-radius: 6px;
}
</style>
</head>
<body background = "transLogo.png">
  <!-- Header-->
    <div class = "headContainer">
      <!-- Top Menu-->
      <div class = "menuDiv">
        <span class = "row">
          <a class = "nav" href = "codingCommanders.php">Home</a> <a class ="nav" href ="curriculum.php">Curriculum</a>  <a class = "nav" href = "https://www.youtube.com/channel/UC-gCUMK_EGUqJ7P9VA7BJmQ">YouTube Channel</a> <a class = "nav" href = "blog.html">B l o g</a>
        </span>
       </div>
    <!-- Page Tittle-->
    <div class = "heading">
      <span class = "row">
        <div class = "col-6" style = "float: right;"><h1 font-size = "36px;">PHP: While Loop</h1></div>
        <div class = "col-3" style = "float: left;"><img width = "360px;" src ="../../logo.png"></div>
      </span>
    </div>
  </div>
  <!-- Content-->
  <div col-9 align = "center">
    <p>While loops will execute a block of code, until a condition is met.
      The condition will be checked for at the begining of each iteration.
      While loops can be used when you do not know how many times you
      want the code to execute.</p>
     <h2>While Loop Syntax</h2>
     <img align = "center" src = "whileLoopSyn.PNG">
     <br></br>
     <h2>while loop examples</h2>
     <img src = "whileExample.PNG">
     <br></br>
     <p>In the above example, what is the condition being met?</p>
       <h6>$gameLevel is less than or equal to 5 ($gameLevel <= 5).</h6>
     <p>The code block:echo "Game level:  " . $gameLevel...$gameLevel++;"<br>
       will be executed repeatidly, until $gameLevel is more than 5.
       The line of code "$gameLevel++;" will increase $gameLevel's value
       by one each time the code is executed.</p>
     <br></br>
     <img src = "whileExample2.PNG">
     <br></br>
     <p>In the above example the code block will execute if $gameLevel is
       greater than 5 and less than or equal to 10.</p>
       <br></br>
     <img src = "whileExample3.PNG">
     <br></br>
     <p>In the above example the code block will execute if $gameLevel
       is greater than 10 and less then 16.</p>
   </div>
   <br></br>
   <!-- Code Editior-->
  <iframe frameborder="0" width="100%" height="500px" src="https://repl.it/H0PO/5"></iframe>
</body>
</html>
