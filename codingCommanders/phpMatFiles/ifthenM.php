<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../codingCommanders.css">
<link rel="stylesheet" type="text/css" href="customLessons.css">
<title>Into to PHP: If Staements</title>
</head>
<body>
  <!-- Header-->
    <div class = "headContainer">
      <!-- Top Menu-->
      <div class = "menuDiv">
        <span class = "row">
          <a class = "nav" href = "../codingCommanders.php">Home</a>
          <a class ="nav" href ="../phpLessons.php">Lessons</a>
          <a class = "nav" href = "https://www.youtube.com/channel/UC-gCUMK_EGUqJ7P9VA7BJmQ">YouTube Channel</a>
          <a class = "nav" href = "../blog.html">B l o g</a>
        </span>
      </div>
    <!-- Page Tittle-->
    <span class = "row">
      <div class = "heading">
        <div class = "col-6" style = "float: right;">
          <h1>PHP: If Statements</h1>
       </div>
        <div class = "col-3" style = "float: left;">
          <img width = "300px;" src ="../logo.png">
        </div>
      </div>
      </span>
  </div>
<!-- row 1-->
 <div class = "row">
   <!-- copy boxes-->
    <div class = "col-3">
      <!-- Copy Box 1-->
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
             <label font-size = 14px; for="website">PHP: if statement</label>
         </div>
       </div>
     </div>
     <!-- Copy Box 2-->
     <div class = "copyContainer">
       <div class = "row" style="inline-block">
         <div col-3>
           <button data-copytarget="#example1">Copy Syntax</button>
        </div>
       <div align = "left">
         <textarea rows = "10" col = "25" id="example1" style = "inline-block">if (/*condition*/) {
      //code... ;
    }
    elseif (/*condition*/) {
      //code... ;
    }
    else {
      //code... ;
    }
        </textarea>
      </div>
          <div>
            <label font-size = 14px; for="website">PHP: elseif statement</label>
        </div>
      </div>
     </div>
    </div>
      <!-- Content-->
        <!-- Content Intro-->
        <div class = "col-7" >
          <p>If-statements are used to only execute a block of when certain conditions are true.
             You will use <a href="logicalOperatorsM.php">logical operators</a> and
           <a href="comparisonOperatorsM.php">comparison operators</a> to code conditions.</p>
           <br>
           <!-- Syntax-->
           <h2>Syntax</h2>
           <!-- Syntax Image-->
           <img src = "iffyPics/ifSyn.PNG">
           <!-- Example-->
           <h2>Example</h2>
           <img src = "iffyPics/ifExample.PNG">
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
        </div>
<!-- row 2-->
<div class = "row">
  <!-- Copy boxes-->
  <div class = col-3>
    <div class = "copyContainer">
      <div class = "row" style="inline-block">
        <div col-3>
          <button data-copytarget="#lessthan">Copy Syntax</button>
       </div>
      <div align = "left">
        <textarea rows = "4" col = "25" id="lessthan" style = "inline-block">if ($value1 < $value2) {
     //code... ;
  }
       </textarea>
     </div>
         <div>
           <label font-size = 14px; for="lessthan">PHP: less than</label>
       </div>
     </div>
   </div>
   <div class = "copyContainer">
     <div class = "row" style="inline-block">
       <div col-3>
         <button data-copytarget="#grteql">Copy Syntax</button>
      </div>
     <div align = "left">
       <textarea rows = "4" col = "25" id="grteql" style = "inline-block">if ($value1 >= $value2) {
    //code... ;
 }
      </textarea>
    </div>
        <div>
          <label font-size = 14px; for="grteql">PHP: greater than or equal to</label>
      </div>
    </div>
  </div>
  <div class = "copyContainer">
    <div class = "row" style="inline-block">
      <div col-3>
        <button data-copytarget="#notequal">Copy Syntax</button>
     </div>
    <div align = "left">
      <textarea rows = "4" col = "25" id="notequal" style = "inline-block">if ($value1 != $value2) {
   //code... ;
}
     </textarea>
   </div>
       <div>
         <label font-size = 14px; for="notequal">PHP: not equal</label>
     </div>
   </div>
 </div>
   </div>
  <!-- content-->
  <div class = "col-7">
     <h2>Not Equal</h2>
     <img src = "iffyPics/ifExample2.PNG">
     <p>The above code says a second random number called $randInt2 is declared.
      If the two random numbers are not equal, the code executed is:
      <i> echo "Not equal...";</i> If not (meaning they are equal) the code
      executed is <i>echo "EQUAL!...";</i></p>
      <br></br>
     <h2>Less than or equal to</h2>
     <img src = "iffyPics/ifExample3.PNG">
     <br><br>
     <p>The above code says if $randInt is less than or equal to
       $randInt2, the code executed is:<i> echo "less than or eqal to..."
       (notice I spelt equal wrong :p).</i> In all other cases the code
       executed is: <i>echo "greater than... ";</i></p>
       <br><br>
       <h2>Greater than or equal to</h2>
       <img src = "iffyPics/ifExample4.PNG">
       <p>The above code says if $randInt is greater than or equal to $randInt2)
         the code executed is: <i>echo "greater than or equl to... ";</i>.  In all
         other cases the code executed is: <i>echo "less than...  ";</i></p>
       <br><br>
    </div>
  </div>
<!-- row 3-->
<div class = "row">
  <div class = "col-3">
    <!-- Copy Box-->
    <div class = "copyContainer">
      <div class = "row" style="inline-block">
        <div col-3>
          <button data-copytarget="#example2">Copy Syntax</button>
       </div>
      <div align = "left">
        <textarea rows = "5" col = "25" id="example2" style = "inline-block">if (/*condition*/ && /*condition/*) {
          //code... ;
 }
       </textarea>
     </div>
         <div>
           <label font-size = 14px; for="website">PHP: && Operator</label>
       </div>
     </div>
   </div>
   <!-- Copy Box 4-->
   <div class = "copyContainer">
     <div class = "row" style="inline-block">
       <div col-3>
         <button data-copytarget="#example4">Copy Syntax</button>
      </div>
     <div align = "left">
       <textarea rows = "5" col = "25" id="example4" style = "inline-block">if (/*condition*/ || /*condition/*) {
         //code... ;
 }
      </textarea>
    </div>
        <div>
          <label font-size = 14px; for="website">PHP: || Operator</label>
      </div>
    </div>
  </div>
  <div class = "copyContainer">
    <div class = "row" style="inline-block">
      <div col-3>
        <button data-copytarget="#xorOperator">Copy Syntax</button>
     </div>
    <div align = "left">
      <textarea rows = "5" col = "25" id="xorOperator" style = "inline-block">if (/*condition*/ xor /*condition/*) {
        //code... ;
}
     </textarea>
   </div>
       <div>
         <label font-size = 14px; for="xorOperator">PHP: xor operator</label>
     </div>
   </div>
 </div>
</div>
  <div class = "col-7">
      <h2>and &&</h2>
      <p> The <a href = "logicalOperatorsM.php">logical operator</a> 'and' means the
        same as '&&'.  You can pick the one you perfer, but you should stick with that one throughout
        your code. Your code should be consistant and easy to read.</p>
      <img src = "iffyPics/ifExample5.PNG">
      <p>The above code says $x equals 6 and $y equals 0.
        if $x is greater than 5 <strong>and </strong>$y equals 0,
        the code executed is: <i>echo "It worked";</i></p>
      <br><br>
       <h2>or ||</h2>
       <p> The <a href = "logicalOperatorsM.php">logical operator</a> 'or' means the
         same as '||'.</p>
       <img src = "iffyPics/ifExample6.PNG">
       <p>The above code says if $x equals 6 <strong>or</strong> $y equals 42, the
       code executed is: <i>echo " ...it worked again;"</i></p>
       <br><br>
      <h2>xor</h2>
      <img src = "iffyPics/ifExample7.PNG">
      <p>The above code says if $x equals 6 or $y equals 42, but the two
        conditions are not both true, the code executed is:
        <i>echo " ...it worked again";</i></p>
      <br><br>
    </div>
  </div>
<!-- Row 4-->
<div class = "row">
  <!-- Code Editior-->
  <iframe frameborder="0" width="100%" height="500px" src="https://repl.it/H4VF/4"></iframe>
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
