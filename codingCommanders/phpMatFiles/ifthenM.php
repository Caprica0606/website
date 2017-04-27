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
          <a class = "nav" href = "codingCommanders.php">Home</a>
          <a class ="nav" href ="curriculum.php">Curriculum</a>
          <a class = "nav" href = "https://www.youtube.com/channel/UC-gCUMK_EGUqJ7P9VA7BJmQ">YouTube Channel</a>
          <a class = "nav" href = "blog.html">B l o g</a>
        </span>
       </div>
    <!-- Page Tittle-->
    <div class = "heading">
      <span class = "row">
        <div class = "col-6" style = "float: right;"><h1>PHP: If Statements</h1></div>
        <div class = "col-3" style = "float: left;"><img width = "300px;" src ="../logo.png"></div>
      </span>
    </div>
  </div>
  <!-- Copy Box-->
  <div class = "copyContainer">
    <div class = "row" style="inline-block">
      <div col-3>
        <button data-copytarget="#website">Copy Syntax</button>
      </div>
        <div>
          <textarea text-align = "left" rows = "5" col = "20" id="website">
          if (condition) {
            code... ;
          }
        </textarea>
       </div>
       <div>
         <label font-size = 14px; for="website"> Code Template</label>
     </div>
   </div>
 </div>
  <!-- Content-->
  <div col-9 align = "center">
    <div>
      <p >If-statements are used when you want a block of code to execute only under certain conditions.
         You will use <a href="logicalOpeators.php">logical operators</a> and
       <a href="comparisonOpeators.php">comparison operators</a> to code conditions.</p>
       <br>
   </div>
   <div>
     <h2>Syntax</h2>
         <!-- Syntax Image-->
         <img align = "center" src = "iffyPics/ifSyn.PNG">
       </div>
     </div>
   </div>
     <h2>Example</h2>
     <img src = "iffyPics/ifExample.PNG">
     <br></br>
     <p>In the above example we are are randomly generating a number
       between 1 and 11.  The random number's value is the condition
       in our statements.</p><br><br>
       <p><strong>ifelse:</strong> In our example there are 4 different outcomes for
         our condition.  We start our first statement with "if". After that we begin
         our statements with "elseif".</p><br><br>
        <p><strong>else:</strong>  The final statement starts with else.  We do not
          provide conditions in an Else statement.  This statement says run this code block
          for every case that we did not specify</p>
          <br><br>
     <h2>Not Equal</h2>
     <img src = "iffyPics/ifExample2.PNG">
     <p>The above code declares a second random number called $randInt2.
       If the two random numbers are not equal, the code executed is:
      <i> echo "Not equal...";</i> If not (meaning they are equal) the code
      executed is <i>echo "EQUAL!...";</i></p>
     <br></br>
     <h2>Less than or equal to</h2>
     <img src = "iffyPics/ifExample3.PNG">
     <br><br>
     <p>If $randInt is less than or equal to
       $randInt2, the code executed is:<i> echo "less than or eqal to..."
        (notice I spelt equal wrong :p).</i> In all other cases the code
         executed is: <i>echo "greater than... ";</i></p>
     <h2>Example</h2>
     <img src = "iffyPics/ifExample4.PNG">
     <br></br>
     <h2>Example</h2>
     <img src = "iffyPics/ifExample5.PNG">
     <br></br>
     <h2>Example</h2>
     <img src = "iffyPics/ifExample6.PNG">
     <br></br>
     <h2>Example</h2>
     <img src = "iffyPics/ifExample7.PNG">
     <br></br>
   </div>
   <br></br>
   <!-- Code Editior-->
   <div class = "row">
  <iframe frameborder="0" width="100%" height="500px" src=""></iframe>
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
