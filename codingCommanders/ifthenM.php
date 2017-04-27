<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../codingCommanders.css">
<link rel="stylesheet" type="text/css" href="customLessons.css">
<title>Into to PHP: </title>
</head>
<body >
  <!-- Header-->
    <div class = "headContainer">
      <!-- Top Menu-->
      <div class = "menuDiv">
        <span class = "row">
          <a class = "nav" href = "../codingCommanders.php">Home</a>
          <a class ="nav" href ="../suppliment.php">Lessons</a>
          <a class = "nav" href = "https://www.youtube.com/channel/UC-gCUMK_EGUqJ7P9VA7BJmQ">YouTube Channel</a>
          <a class = "nav" href = "../blog.html">B l o g</a>
        </span>
      </div>
    <!-- Page Tittle-->
    <div class = "heading">
      <span class = "row">
        <div class = "col-6" style = "float: right;">
          <h1>PHP: If Statements</h1>
       </div>
        <div class = "col-3" style = "float: left;">
          <img width = "300px;" src ="../logo.png">
        </div>
      </span>
    </div>
  </div>
  <!-- Copy Box-->
  <div class = "copyContainer">
    <div class = "row" style="inline-block">
      <div col-3>
        <button data-copytarget="#website">Copy Syntax</button>
     </div>
    <div align = "left">
      <textarea rows = "4" col = "25" id="website" style = "inline-block">if (/*condition*/) {
   //code... ;
}
     </textarea>
   </div>
       <div>
         <label font-size = 14px; for="website"> Code Template</label>
     </div>
   </div>
 </div>
  <!-- Content-->
  <div col-10 align = "center">
    <div class = "col-9">
      <p >If-statements are used when you only want a block of code to execute when certain conditions are true.
         You will use <a href="logicalOperatorsM.php">logical operators</a> and
       <a href="comparisonOperatorsM.php">comparison operators</a> to code conditions.</p>
       <br>
  </div>
   <div class = "col-9">
      <h2>Syntax</h2>
         <!-- Syntax Image-->
    <img align = "center" src = "iffyPics/ifSyn.PNG">
 </div>
  <div class = "col-9">
     <h2>Example</h2>
     <img src = "iffyPics/ifExample.PNG">
  </div>
     <br>
  <div class = "col-9">
     <p>In the above example we are randomly generating a number
       between 1 and 11.  The condtions in our statments are based on the random number's value</p><br><br>
     <p><strong>elseif:</strong> In our example there are 4 different outcomes for
         our condition.  We start our first statement with "if". After that we begin
         our statements with "elseif".</p><br><br>
     <p><strong>else:</strong>  The final statement starts with else.  We do not
          provide conditions in an Else statement.  This statement says run this code block
          for every case that we did not specify</p>
          <br><br>
  </div>
  <div class = "col-9">
     <h2>Not Equal</h2>
     <img src = "iffyPics/ifExample2.PNG">
     <p>The above code says a second random number called $randInt2 is declared.
      If the two random numbers are not equal, the code executed is:
      <i> echo "Not equal...";</i> If not (meaning they are equal) the code
      executed is <i>echo "EQUAL!...";</i></p>
      <br></br>
  </div>
   <div class = "col-9">
     <h2>Less than or equal to</h2>
     <img src = "iffyPics/ifExample3.PNG">
     <br><br>
     <p>The above code says if $randInt is less than or equal to
       $randInt2, the code executed is:<i> echo "less than or eqal to..."
       (notice I spelt equal wrong :p).</i> In all other cases the code
       executed is: <i>echo "greater than... ";</i></p>
       <br><br>
   </div>
    <div class = "col-9">
       <h2>Greater than or equal to</h2>
       <img src = "iffyPics/ifExample4.PNG">
       <p>The above code says if $randInt is greater than or equal to $randInt2)
         the code executed is: <i>echo "greater than or equl to... ";</i>.  In all
         other cases the code executed is: <i>echo "less than...  ";</i></p>
       <br><br>
    </div>
    <div class = "col-9">
      <h2>and &&</h2>
      <p> The <a href = "logicalOperatorsM.php">logical operator</a> 'and' means the
        same as '&&'.  You can pick the one you perfer, but you should stick with that one throughout
        your code. Your code should be consistant and easy to read.</p>
      <img src = "iffyPics/ifExample5.PNG">
      <p>The above code says $x equals 6 and $y equals 0.
        if $x is greater than 5 <strong>and </strong>$y equals 0,
        the code executed is: <i>echo "It worked";</i></p>
      <br><br>
   </div>
   <div class = "col-9">
     <h2>or ||</h2>
     <p> The <a href = "logicalOperatorsM.php">logical operator</a> 'or' means the
       same as '||'.</p>
     <img src = "iffyPics/ifExample6.PNG">
     <p>The above code says if $x equals 6 <strong>or</strong> $y equals 42, the
     code executed is: <i>echo " ...it worked again;"</i></p>
     <br><br>
  </div>
  <div class = "col-9">
    <h2>xor</h2>
    <img src = "iffyPics/ifExample7.PNG">
    <p>The above code says if $x equals 6 or $y equals 42, but the two
      conditions are not both true, the code executed is:
      <i>echo " ...it worked again";</i></p>
    <br><br>
  </div>
</div>
   <!-- Code Editior-->
   <div class = "row">
  <iframe frameborder="0" width="100%" height="500px" src="https://repl.it/H4VF/1"></iframe>
  <br><br><br>
</div>
<script>
(function() {
	'use strict';
  // click events
  document.body.addEventListener('click', copy, true);
	// event handler
	function copy(e) {
    // find target element
    var
      t = e.target,
      c = t.dataset.copytarget,
      inp = (c ? document.querySelector(c) : null);
    // is element selectable?
    if (inp && inp.select) {
      // select text
      inp.select();
      try {
        // copy text
        document.execCommand('copy');
        inp.blur();
        // copied animation
        t.classList.add('copied');
        setTimeout(function() { t.classList.remove('copied'); }, 1500);
      }
      catch (err) {
        alert('please press Ctrl/Cmd+C to copy');
      }
    }
	}
})();
</script>
</body>
</html>
