<!DOCTYPE html>
  <html>
  <header>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <link rel= 'stylesheet' type= 'text/css' href ='../codingCommanders.css'>

    <link rel='stylesheet' type= 'text/css' href='customLessons.css'>

    <link rel='stylesheet' type= 'text/css' href='syntax_style.css'>

    <script src='highlight/highlight.pack.js'></script>

    <script>hljs.initHighlightingOnLoad();</script>

    <script src = 'copyBox.js'></script>

    <script src = 'yellowHighlighter.js'></script>

    <title>Intro to PHP:  Variables</title>

    <style>

      div.callout .condition {
        color: red;
      }
      div.callout .body {
        color: blue;
      }
      .highlighted {
        background-color: rgba(170,300,86,0.5);
        color: black;
      }
    </style>
  </header><body onload = 'autoHighlight()'>
    <div class = 'headContainer'>
      <div class = 'topnav'>
        <a  href = '../codingCommanders.php'>Home</a>
        <a  href = '../lessonsMain.php'>Lessons</a>
        <a  href ='../lampStack.php'>LAMP</a>
        <a  href ='../htmlLessons.php'>HTML/CSS</a>
        <a  href ='../phpLessons.php'>PHP</a>
        <a  href ='../mysqlLessons.php'>MySQL</a>
        <a  href ='../jsLessons.php'>JavaScript</a>
        <a  href = 'https://www.youtube.com/channel/UC-gCUMK_EGUqJ7P9VA7BJmQ'>YouTube Channel</a>
        <a  href = '../blog.html'>B l o g</a>
      </div>
      <div class = 'row'>
        <div class = 'col-6' style = 'float: right;'>
          <div class = 'heading'>
            <h1>Intro to PHP:  Variables</h1>
         </div>
       </div>
       <span>
         <div class = 'col-4' style = 'float: left;'>
            <img width = '275px;' src = '../logo.png'>
      </div>
    </div>
    </span>
  </div>
  <div class = 'row'>
    <div class = 'col-3'>
    </div><div class = 'col-6'>
      <div align = 'center'><p>Math Operators are used to perform numeric calculations.
It is pretty much just like in grammar school math class.</p>
<i class = 'dG'>At the bottom of this page there is a code editor pre-loaded with the
lesson's code.</i>
</div>
</div>
</div>
<div class = 'row'>
  <div class = 'col-3'>
    <div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#addition' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='addition' style = 'inline-block'>$c = $a + $b;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='addition' >addition</label>
        </div>
    </div>
    </div>
    <div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#subtraction' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='subtraction' style = 'inline-block'>$c = $a - $b;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='subtraction' >subtraction</label>
        </div>
    </div>
    </div>
    <div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#multiplication' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='multiplication' style = 'inline-block'>$c = $a * $b;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='multiplication' >multiplication</label>
        </div>
    </div>
    </div>
    <div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#division' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='division' style = 'inline-block'>$c = $a / $b;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='division' >division</label>
        </div>
    </div>
    </div>
    <div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#negation' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='negation' style = 'inline-block'>$a = - $b;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='negation' >negation</label>
        </div>
    </div>
    </div><div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#exponents' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='exponents' style = 'inline-block'>$c = $a ** $b;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='exponents' >exponents</label>
        </div>
    </div>
    </div><div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#modul' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='modul' style = 'inline-block'>$c = $a % $b;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='modul' >modul</label>
        </div>
    </div>
    </div><div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#preincrement' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='preincrement' style = 'inline-block'>++$i;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='preincrement' >Pre-increment</label>
        </div>
    </div>
    </div><div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#postincrement' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='postincrement' style = 'inline-block'>$i++;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='postincrement' >Post-increment</label>
        </div>
    </div>
    </div><div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#predecrement' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='predecrement' style = 'inline-block'>--$i;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='predecrement' >Pre-decrement</label>
        </div>
    </div>
    </div><div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#postdecrement' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='postdecrement' style = 'inline-block'>$i--;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='postdecrement' >Post-decrement</label>
        </div>
    </div>
    </div>
  </div>
  <div class = 'col-6'>
    <!--Addition-->
      <h2>Addition:  $a + $b</h2>
      <div class = 'callout'>
      <tt><pre>
        <code class = 'php'>
            <span class="highlight-hrsPlayedMon "><font class = 'rd'>$hrsPlayedMon </font>= 10;</span>
            <span class="highlight-hrsPlayedTues "><font class = 'rd'>$hrsPlayedTues</font> = 9;</span>
            <span class="highlight-hrsTotal "><font class = 'rd'>$hrsTotal</font> = <font class = 'rd'>$hrsPlayedMon</font> + <font class = 'rd'>$hrsPlayedTues</font>;</span>
            <span class="highlight-echoHrs">echo <font class = 'rd'>$hrsTotal</font>;</span>
            </code>
          </pre></tt>
      </div>
      <div class = "description">
      <p> <strong><code><span class="highlight-hrsPlayedMon auto"># $hrsPlayedMon</span></code></strong> is a variable that repersents how many hours
        Commander Bob played video games on Monday.  He played 10 hours.
        <br>
        <strong># <code><span class="highlight-hrsPlayedTues auto">$hrsPlayedTues</span></code></strong> is a variable that repersents the number of hours
         Commander Bob played video games on Tuesday.  He played 9 hours.
         <br>
         <strong># <code><span class="highlight-hrsTotal auto"> $hrsTotal</span></code></strong> is a variable that repersents that number of hours Commander Bob
         played on Monday (10) <strong>plus</strong> the number of hours he played on Tuesday (9).
         He played a total of 19 hours between Monday and Tueday.
        <br>
        <strong># <code><span class="highlight-echoHrs auto">echo $hrsTotal;</span></code></strong>  will print the value of $hrsTotal  <strong> Output:  </strong><u>19</u><br></p>
        <br><br>
    </div>
    <!-- Subtraction-->
    <h2>Subtraction: $a - $b</h2>
    <div class = 'callout'>
    <tt><pre>
      <code class = 'php'>
          <span class="highlight-hrsDifference"><font class = 'rd'>$hrsDifference </font>= <font class = 'rd'>$hrsPlayedMon </font>- <font class = 'rd'>$hrsPlayedTues</font>;</span>
          <span class="highlight-echoDiff">echo <font class = 'rd'>$hrsDifference</font>;</span>
          </code>
        </pre></tt>
    </div>
    <div class = "description">
    <p> <strong># <code><span class="highlight-hrsDifference auto"> $hrsDifference  </span></code></strong>is a variable
      that repersents the number of hours Comander Bob played on Monday (10)
      <strong>minus</strong> the number of hours he played on Tuesday (9).
      <br>
      <strong># <code><span class="highlight-echoDiff auto">echo $hrsDifference;  </span></code></strong>Will print the
       value of $hrsDifference  <strong> Output:  </strong><u>1</u><br></p>
      <br>
  </div>
  <!-- Multiplication-->
  <h2>Multiplication: $a * $b</h2>
      <div class = 'callout'>
      <tt><pre>
        <code class = 'php'>
            <span class="highlight-const">define("NUMBER_WEEK_DAYS", 7);</span>
            <span class="highlight-week "><font class = 'rd'>$weekMultiple</font> = NUMBER_WEEK_DAYS  * <font class = 'rd'>$hrsPlayedMon</font>;</span>
            <span class="highlight-mult">echo <font class = 'rd'>$weekMultiple</font>;</span>
            </code>
          </pre></tt>
      </div>
      <div class = "description">
      <p> <strong># <code><span class="highlight-const auto"> NUMBER_WEEK_DAYS </span></code></strong>is a
        <a href = 'variablesM.php'>constant</a> that equals 7.
        <br>
        <strong># <code><span class="highlight-week auto">$weekMultiple </span></code></strong>is a variable
        used to predict how many hours Commander Bob will play video games during the week.
          It <strong>multiplies</strong> NUMBER_WEEK_DAYS (7) and $hrsPlayedMonday (10). This
          is probably not the best prediction algorithm, but I think it is sufficent for our
          example.
         <br>
         <strong># <code><span class="highlight-mult auto">echo $weekMultiple;  </span></code></strong> will
         print the value of $weekMultiple  <strong>  Output:  </strong><u>70</u><br></p>
        <br>
    </div>
    <!-- Division-->
    <h2>Division: $a / $b</h2>
        <div class = 'callout'>
        <tt><pre>
          <code class = 'php'>
              <span class="highlight-1"><font class = 'rd'>$daysCounter</font> = 2;</span>
              <span class="highlight-2"><font class = 'rd'>$avgDailyHours</font> <font class = 'rd'>$hrsTotal</font> / <font class = 'rd'>$daysCounter</font></span>
              <span class="highlight-3">echo <font class = 'rd'>$avgDailyHours</font>;</span>
              </code>
            </pre></tt>
        </div>
        <div class = "description">
        <p><strong># <code><span class="highlight-1 auto">$daysCounter</span></code></strong> is a
          variable that repersents how many days we have been tracking Commander Bob's video
          game hours.  We have data for Monday and Tuesday, so I set $daysCounter equal
          to 2.
           <br>
           <strong># <code><span class="highlight-2 auto">$avgDailyHours</span></code></strong> is a
           variable that calculates the average number of hours that Commander Bobby
           plays per day.  It is equal to $hrsTotal (19) divided by $daysCounter (2).
          <br>
           <strong># <code><span class="highlight-3 auto">echo $avgDailyHours; </span></code></strong>
            will print the value of $avgDailyHours <strong>  Output:  </strong><u>9.5</u><br></p>
          <br>
      </div>
      <!-- Exponents-->
      <h2>Exponents:  $a ** $b</h2>
<p>An exponent repersents how many times you should multiple the base number by itself.<br>
Example: 3<sup>4</sup>,which in PHP is written <span class = 'atom'>3 ** 4</span>,
equals 3*3*3*3, which equals 81.  We say <span class = 'atom'>3 ** 4</span> as 'three to
the fourth power'.  <u>3</u> is the base number and <u>4</u> is the exponent. If you do
not understand what an exponent is, you might want to visit this page:
<a href = 'http://www.algebra-class.com/exponent.html'>Algebra Class: Exponents</a>.</p>
<br>
    <div class = 'callout'>
    <tt><pre>
      <code class = 'php'>
          <span class="highlight-square "><font class = 'rd'>$monSquared</font> = <font class = 'rd'>$hrsPlayedMon</font> ** 2;</span>
          <span class="highlight-monSquare">echo <font class = 'rd'>$monSquared</font>;</span>
          </code>
        </pre></tt>
    </div>
    <div class = "description">
    <p><strong># <code><span class="highlight-square auto">$monSquared </span></code></strong> is a
      variable that repersents $hrsPlayedMon (10) to the second power.  (10 ** 2)
       <br>
       <strong># <code><span class="highlight-monSquare auto">echo $monSquared;  </span></code></strong>
       will print the value of $monSquared <strong>  Output:  </strong><u>100</u><br></p>
      <br>
  </div>
  <!-- Negation-->
  <h2>Negation: - $a</h2>
  <p><a href = 'http://www.math.toronto.edu/preparing-for-calculus/3_logic/we_3_negation.html'>Negation</a>
   means getting the opposite.  The opposite of a possitive number would be negative.
   The opposite of a negative number would be possitive.  The minus symbol (-) is used to
   show negation<br>
   Example 1: $a = 3; $b = -$a; => $b = -3 <br>
   Example 2: $a = -5; $b = -$a; => $b = 5.</p>
  <br>
      <div class = 'callout'>
      <tt><pre>
        <code class = 'php'>
            <span class="highlight-opp"><font class = 'rd'>$monOpposite</font> = - <font class = 'rd'>$hrsPlayedMon</font>;</span>
            <span class="highlight-echoO">echo <font class = 'rd'>$monOpposite</font>;</span>
            </code>
          </pre></tt>

      </div>
      <div class = "description">
      <p><strong># <code><span class="highlight-opp auto">$monOpposite</span></code></strong> is a
        variable that repersents the opposite of $hrsPlayedMon.
         <br>
         <strong># <code><span class="highlight-echoO auto">echo $monOpposite;  </span></code></strong>
         will print the value of $monOpposite <strong>  Output:  </strong><u>-10</u><br></p>
        <br>
    </div>
    <!-- Modul-->
    <h2>Modul: Remainder of $a % $b</h2>
    <p>Modul will find the remainder of two numbers when they are divided.  The
      remainder is basically what is left after 2 numbers are divided.<br>
    # Example 1:  19 / 3 = 6 1/3, or 6 remainder 1, modul is 1<br>
    # Example 2:  11 / 4 = 2 3/4, or 2 remainder 3, modul is 3<br>
    (if you don't understand remainders, try visiting <a href = 'https://www.mathsisfun.com/definitions/remainder.html'>Math is fun: Remainders</a></p>
    <br>
        <div class = 'callout'>
        <tt><pre>
          <code class = 'php'>
              <span class="highlight-days"><font class = 'rd'>$daysCounter</font> = 2;</span>
              <span class="highlight-echoM">echo <font class = 'rd'>$hrsTotal</font> % <font class = 'rd'>$daysCounter</font>;</span>
              </code>
            </pre></tt>
        </div>
        <div class = "description">
        <p><strong># <code><span class="highlight-days auto">$daysCounter</span></code></strong> is intialized
          at 2.
           <br>
           <strong># <code><span class="highlight-echoM auto">echo $hrsTotal % $daysCounter; </span></code></strong>
           will print the remainder when $hrsTotal(19)
            is divided by $daysCounter (2).<strong>  Output:  </strong><u>1</u><br></p>
          <br>
      </div>
      <!-- Increment-->
      <h2>Increment</h2>
      <p>The increment operator adds one to the value of a variable</p>
      <br>
      <h2>Post-increment:  Returns $a, then increments $a by one</h2>
      <p>To give the following example some context, let's say you are writing code for
        an online browser game.</p>
      <br>
      <div class = 'callout'>
      <tt><pre>
        <code class = 'php'>
            <span class="highlight-a"><font class = 'rd'>$currentLevel</font> = 1;</span>
            <span class="highlight-b">echo 'You completed level: ' . <font class = 'rd'> $currentLevel</font> ++;</span>
            <span class="highlight-c">echo "\n";</span>
            <span class="highlight-d">echo "You are now on level " . <font class = 'rd'> $currentLevel</font>;</span>
            </code>
          </pre></tt>
      </div>
    <div class = "description">
    <p><strong># <code><span class="highlight-a auto">$currentLevel</span></strong> represents the current level being played.
    Its value is initialized at <strong>1</strong>.</code>
    <br>
    <i>At the end of each level you write code to tell the player what level they completed and
    then increment (add 1) to the game level:</i>
    <br>
    <strong># <code><span class="highlight-b auto">echo 'You completed level: ' . $currentLevel++;</span></code></strong>   This code will
    print 'You completed level:  ' followed by the value of $currentLevel. Then it will add
  <strong>1</strong> to the value of $currentLevel.  <strong>Output:  </strong><u> You completed level: 1</u>
    <br><i>*Value of $currentLevel after the echo statement:  <u>2</u></i>
    <br>
    <strong><code><span class="highlight-c auto">echo "\n";</span></code></strong>  inserts a <a href = 'https://en.wikipedia.org/wiki/Newline'>line break</a>
    <br>
    <i>Now you write code to let the player know what level they are about to start:</i><br>
    <strong><code><span class="highlight-d auto">echo 'You are now on level ' . $currentLevel;</span></code></strong> will print 'You are now on
    level ' followed by the value of $currentLevel. <strong>Output:  </strong><u>You are now on level 2</u></p>
      <br>
    </div>
    <!-- Pre-increment-->
    <h2>Pre-increment:  Increments $a by one, then returns $a.</h2>
  <div class = "callout">
  <tt><pre>
    <code class = "php">
        <span class="highlight-e"><font class = "rd">$currentLevel</font> = 1;</span>
        <span class="highlight-f">echo ++<font class = "rd">$currentLevel</font>;</span>
        <span class="highlight-g">echo " " . ++<font class = "rd">$currentLevel</font>;</span>
        </code>
      </pre></tt>
  </div>
  <div class = "description">
     <p><strong ># <code><span class="highlight-e auto">$currentLevel = 1;</span></code></strong>  The variable $currentLevel is intialized
     back at <strong>1</strong>.<br>
     <strong># <span class="highlight-f auto">echo ++$currentLevel;</span></strong>  $currentLevel will be incremented, then printed <strong>Output:  </strong><u>2</u><br>
     <strong># <span class="highlight-g auto"><code>echo " " . ++$currentLevel;</code></span></strong>  will print a blank space, increment $currentLevel,
     then print the value of $currentLevel <strong> Output:  </strong><u>3</u></p>
 </div>
 <!-- Decrement-->
 <h2>Decrement </h2>
 <p>Decrement subtracts one from the value.  It works simularly to
   increment, but subtracts instead of adds.</p>
   <br>
 <p>So, you are still working on that online browser game.  You have to write code to
 keep track of how many lives the player has remaining.  Let's look at the difference
 between pre- and post- decrement.</p>
 <br>
<!-- Post-decrement-->
<h2>Post-decrement:  Returns $a, then decrements $a by one</h2>
<br>
<div class = "callout">
<tt><pre>
 <code class = "php">
     <span class="highlight-i"><font class = "rd">$livesLeft</font> = 3;</span>
     <span class="highlight-j">echo <font class = "rd">$livesLeft</font>-- . " ";</span>
     <span class="highlight-k">echo <font class = "rd">$livesLeft</font>-- . " ";</span>
     <span class="highlight-l">echo <font class = "rd">$livesLeft</font>-- . " ";</span>
     </code>
   </pre></tt>
</div>
<div class = "description">
  <p><strong>#<code> <span class="highlight-i auto"> $livesLeft = 3; </span></code></strong>  The player starts with 3 lives.
  <br>
  <strong>#<code><span class="highlight-j auto"> echo $livesLeft-- . " ";</span></code></strong> Will print the value of $livesLeft,
  then decrement it.<strong> Output:  </strong><u>3</u>
  <br>
  <strong>#<code><span class="highlight-k auto"> echo $livesLeft-- . " ";</span></code></strong> Will print the value of $livesLeft,
  then decrement it.<strong> Output:  </strong><u>2</u>
  <br>
  <strong>#<code><span class="highlight-l auto"> echo $livesLeft-- . " ";</span></code></strong> Will print the value of $livesLeft,
  then decrement it. <strong> Output:  </strong><u>1</u>
  </p>
  <br>
</div>
<!-- Pre-decrement-->
<h2>Pre-decrement:  Decrements $a by one, than returns $a</h2>
<br>
<div class = "callout">
<tt><pre>
 <code class = "php">
     <span class="highlight-m"><font class = "rd">$livesLeft</font> = 3;</span>
     <span class="highlight-n">echo --<font class = "rd">$livesLeft</font> . " ";</span>
     <span class="highlight-o">echo --<font class = "rd">$livesLeft</font> . " ";</span>
     <span class="highlight-p">echo --<font class = "rd">$livesLeft</font> . " ";</span>
     </code>
   </pre></tt>
</div>
<div class = "description">
  <p><strong>#<code> <span class="highlight-m auto"> $livesLeft = 3; </span></code></strong>  $livesLeft is intialized back at 3.
  <br>
  <strong>#<code><span class="highlight-n auto"> echo --$livesLeft . " ";</span></code></strong> Decrements $livesLeft then prints the value
  of $livesLeft<strong> Output:  </strong><u>2</u>
  <br>
  <strong>#<code><span class="highlight-o auto"> echo --$livesLeft . " ";</span></code></strong> Decrements $livesLeft then prints the value
  of $livesLeft<strong> Output:  </strong><u>1</u>
  <br>
  <strong>#<code><span class="highlight-p auto"> echo --$livesLeft . " ";</span></code></strong> Decrements $livesLeft then prints the value
  of $livesLeft<strong> Output:  </strong><u>0</u>
  </p>
  <br>
  <p>Think about how you would want the $livesLeft code to work.  Do you think you
    would pre-decrement or post-decrement?</p>
</div>
<div>
<h2>Applied Assignment</h2>
<p><strong>Background:  </strong><br>
   Imagine you live in a dark and dreary post-apocalyptic Earth.  Earth has been taken over by
   aliens.  Due to their bug-like apperance, the aliens are nicknamed "bugs". As a commander
   in the human resistance, and a web developer, you provide a shining light of hope to
   Earth's orginally inhabitant.<br>
   <strong>Assignment:  </strong><br>
   You are writing code to keep track of bugs living in your district.  Write the following
   statements in PHP code:<br>
   <strong>Example:  </strong><br>
    There were 20 bugs, then you killed 5:
   <code>
    $bugs = 20;
    $bugsKilled = 5;
    $bugs = $bugs - $bugsKilled;
   </code>
  <br>
  <strong>Statements:  </strong><br>
  1)  There are 10 bugs on the south-side and 15 bugs on the north-side.<br>
  2)  You and your squad encounter 10 bugs.  Each bullet fired killed 1 bug.
  7 bullets were fired<br>
  3)  A ship just landed with 11 bugs. There of your cadets found the landing site.<br>
  Each cadet killed 3 bugs. You have to kill the remainder.<br>
  4)  100 bugs have arrived on Eath.  10% of them enter your district.<br>
  5)  Each TNT explosive kills 5 bugs.  Two TNT explosives were used on the bugs.<br>
</div>
    </div>
    <br>
  </div>
<iframe frameborder'=0' width='100%' height='500px' src='https://repl.it/HZaV/11'></iframe>
</body>
</html>
