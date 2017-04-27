<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../codingCommanders.css">
<link rel="stylesheet" type="text/css" href="customLessons.css">
<title>Into to PHP: What are loops?</title>
</head>
<body >
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
        <div class = "col-6" style = "float: right;"><h1>PHP: What are loops?</h1></div>
        <div class = "col-3" style = "float: left;"><img width = "300px;" src ="../logo.png"></div>
      </span>
    </div>
  </div>
  <!-- Content-->
  <div col-9 align = "center">
    <h2>A loop is a block of code that repeats.</h2>

    <p>In computer programming there are many cases where you would
       want to run the same block of code more than once.
       Can you think of some examples?</p>
    <br>
    <p align = "left">Here are a few:
    <br>
    <strong>Example 1:</strong>  You have a list of addresses.  You want to know how many of them are in Florida.  You
    have a loop go through the addresses and count how many have Florida as the state.
    <br><br>
    <strong>Example 2:</strong>  You create a card game.  You want each player to receive 5 random cards from the deck.
    You have a loop that executes the code to select a random card from the deck.  It will repeat
    5 times.
    <br><br>
    <strong>Example 3:</strong>  You create an application to plan daily meals.  The client using the application can input any
    food allergies.  The application selects a 4 items for each meal.  There is a block of code that selects a meal item.  If one of the ingredients selected
    is on the client's food allergy list, the code will not include that item in the meal.  You have a loop that selects a meal item.  That loop
    will repeat until there are 4 meal items included in the meal.</p>
    <br>
    <p>As you can see, sometimes we know how many times the code should be executed and sometimes we don't.</p>
    <br><br>
    <h2>Types of Loops</h2>
    <br>
    <p>In PHP there 4 types of loops:<br>
      <a href="forLoop/forLoopM.php">For Loop</a><br>
      <a href="foreachLoop/foreachLoopM.php">Foreach Loop</a><br><br>
      <a href="whileLoop/whileLoopM.php">While Loop</a><br>
      <a href="doWhile/doWhileLoopM.php">Do while Loop</a><br>
    <br>
    <p>How do you know which loop to use?  Your personal preference and the task you are trying to accomplish</p>
    <br><br>
    <h2> Loop Conditions </h2>
    <br>
    <p>You probably won't want your loop to iterate forever.  You will write code to tell the loop when to continue and when to stop.
    <a href= "ifthenM.php">if statements</a>, <a href = "switchM.php">switch statements</a>, <a href="logicalOpeators.php">logical operators</a>,
    and <a href="comparisonOpeators.php" >comparison operators<a> will help you code these conditions.</p>
    <br><br>
    <h2> Counter</h2>
    <p>Counters can keep track of iterations as well as other useful information.  You can include code in the loop
    to modify the counter during each iteration.  Or, maybe you only want the counter modified if certain conditions are met during, before or after
    an iteration.
    </p>
    <br><br>
    <h2>Coding Application</h2>

    <p>Look back at the 3 above examples. What conditions and counters might you use in the code?.  After completing the tutorials
    on the 4 PHP loops, write a loop to perform each example task.</p>
    <br><br>
   </div>
</body>
</html>
