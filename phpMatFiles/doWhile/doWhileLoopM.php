<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../../codingCommanders.css">
<title>Into to PHP: do while loops</title>
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
          <div class = "col-6" style = "float: right;"><h1 font-size = "36px;">PHP: do-While Loop</h1></div>
          <div class = "col-3" style = "float: left;"><img width = "360px;" src ="../../logo.png"></div>
        </span>
      </div>
    </div>
  <!-- Content-->
  <div col-9 align = "center">
    <p>do-While loops will execute a block of code as long as a condition is true.
      The condition will be checked at the end of each iteration.  What is the
      difference between a do-while loop and a while loop?</p>
      <p>do-while loops check for the condition at he end of each iteration and while loops check for the condition at the begining of the iteration.</p>
  <br></br>
     <h2>do-while loop syntax</h2>
     <img align = "center" src = "doWhileSyn.PNG">
     <br></br>
     <h2>do-while loop example</h2>
     <img src = "doWhileExample.PNG">
     <br></br>
     <p>The rand(1,10) randomly generates an integer between 1 and 10.
       The example loop will randomly generate a number between 1 and 10,
       print out the number, then check to see if the condition has been satisfied.</p>
       <br></br>
       <p>If you run the above code, you will see that as soon as
       the random number generated is 7 or higher, the loop will stop running.  That is because the condition is being checked at <thead>
       end of the loop.</p>
       </thead>

       </thead>
   </div>
   <br></br>
   <!-- Code Editior-->
  <iframe frameborder="0" width="100%" height="500px" src="https://repl.it/H1Ec/3"></iframe>
</body>
</html>
