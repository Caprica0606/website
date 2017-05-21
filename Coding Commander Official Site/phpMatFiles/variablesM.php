
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

      <div align = 'center'><p>We use variables to repersent the vaule of something.  Variables can store different
<a href = 'datatypesM.php'>datatypes</a>.  The value of a variable can change. Contants store values
that do not change, such as the days of the week or pi.</p>

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
        <button data-copytarget = '#variables' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='variables' style = 'inline-block'>$variableName = value;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='variables' >Declaring Variables</label>
        </div>
    </div>
    </div>
    <div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#string' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='string' style = 'inline-block'>$gameDev = "John Romero";</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='string' >String Example</label>
        </div>
    </div>
    </div>
    <div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#float' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='float' style = 'inline-block'>$avgDailyHours = 9.5;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='float' >Float Example</label>
        </div>
    </div>
    </div>
    <div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#bool' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='bool' style = 'inline-block'>$finishedGame = true;</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='bool' >Boolean Example</label>
        </div>
    </div>
    </div>
    <div class = 'copyContainer'>
    <div class =  'row' style='inline-block'>
      <div>
        <button data-copytarget = '#const' >Copy Syntax</button>
    </div>
      <div align = 'left'>
        <textarea rows = '2' col = '35' id='const' style = 'inline-block'>define('NUMBER_WEEK_DAYS', 7);</textarea>
    </div>
      <div>
      <label font-size = 14 px for ='const' >Constant Example</label>
        </div>
    </div>
    </div>
    </div>
<div class = 'col-6'>
<h2>String: Characters</h2><div class = 'callout'>
<tt><pre>
<code class ='php'>
<span class='highlight-1'>$gameDev = 'John Romero';</span>
</code>

        </pre></tt>
    </div><div class = 'description'>
<p> <strong>&#10172;<code><span class='highlight-1 auto'> $gameDev = 'John Romero';</span></code></strong> $gameDev contains a string value.  This means the variable contains characters.<br>
</div><br><h2>Integer:  Whole Numbers</h2><div class = 'callout'>
<tt><pre>
<code class ='php'>
<span class='highlight-2'>$gamesOwnedBy = 3;</span>
</code>

        </pre></tt>
    </div><div class = 'description'>
<p> <strong>&#10172;<code><span class='highlight-2 auto'> $gamesOwnedBy = 3;</span></code></strong> $gamesOwnedBy contains an integer value.  An integer is a whole number.<br>
</div><br><h2>Float:  Decimals</h2><div class = 'callout'>
<tt><pre>
<code class ='php'>
<span class='highlight-3'>$avgDailyHours = 9.5;</span>
</code>

        </pre></tt>
    </div><div class = 'description'>
<p> <strong>&#10172;<code><span class='highlight-3 auto'> $avgDailyHours = 9.5;</span></code></strong> $avgDailyHours contains a float value.  A float is a decimal.<br>
</div><br><h2>Boolean:  True or False</h2><div class = 'callout'>
<tt><pre>
<code class ='php'>
<span class='highlight-4'>$finishedGame = true;</span>
</code>

        </pre></tt>
    </div><div class = 'description'>
<p> <strong>&#10172;<code><span class='highlight-4 auto'> $finishedGame = true;</span></code></strong> $finishedGame contains a boolean value.  A boolean has a value of TRUE or FALSE.<br>
</div><br><h2>Defining a Constant</h2><div class = 'callout'>
<tt><pre>
<code class ='php'>
<span class='highlight-5'>define('NUMBER_WEEK_DAYS', 7)</span>
</code>

          </pre></tt>
      </div><div class = 'description'>
  <p> <strong>&#10172;<code><span class='highlight-5 auto'> define('NUMBER_WEEK_DAYS', 7)</span></code></strong> NUMBER_WEEK_DAYS is a constant whose value will always equal 7.<br>
    </div><br>
    </div>
  <!-- Sidebar-->
  <!--<div class = "col-3">
    <aside class = "sidebar">
      <div class = 'box'>
      </div>
    </aside>
  </div>-->
</div>
<div class = 'row'>
  <div class = 'col-9'>
<h2>Applied Assignment</h2><p><strong>Background:  </strong><br>
   Imagine you are a game developer.  You just started working on a first person shooter game and must
   define the variables and constants.<br>
   <strong>Assignment:  </strong><br>
   For each statement, use PHP to define the variable or constant.  Also, identify what datatype you think is appropriate for the variable.<br>
   <strong>Example:  </strong><br>
    The player will start the game with 100 health.
   <code>
    $health = 100;
   </code>
   (integer)
  <br>
  <strong>Statements:  </strong><br>
  1)  There is a 25% chance a treasure cheast contains ammo.<br>
  2)  When a level is completed a message saying 'Level Complete!' displays.<br>
  3)  The player may or may not find the secret area.<br>
  4)  Shooting a zombie is always worth 150 points.<br>
  5)  When the game starts, the player's weapon is a broken chair leg.<br></p><br></div><br>
  <iframe frameborder'=0' width='100%' height='500px' src='https://repl.it/HXiI/7'></iframe>
 </body>
</html>
