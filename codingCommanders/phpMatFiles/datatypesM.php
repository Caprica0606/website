<?php
include 'vars.php';
include 'lessonTemplate.php';
?>
<!DOCTYPE html>
<html lang="en-us">
<?php
$title = "PHP: Datatypes Table";
pageHead ($title);
 ?>
<header>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#bbb;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#bbb;color:#594F4F;background-color:#E0FFEB;border-top-width:1px;border-bottom-width:1px;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#bbb;color:#493F3F;background-color:#9DE0AD;border-top-width:1px;border-bottom-width:1px;}
.tg .tg-twuo{font-weight:bold;font-size:20px;font-family:Georgia, serif !important;;vertical-align:top}
.tg .tg-un94{background-color:#C2FFD6;font-size:20px;font-family:Georgia, serif !important;;vertical-align:top}
.tg .tg-lhr3{font-size:20px;font-family:Georgia, serif !important;;vertical-align:top}
</style>
</header>

<body>

 <?php
 buildHeading ($title);
 ?>
 <br><br>
 <div class = "col-8">
   <h2> Here are PHP datatypes, definitions and examples </h2>
     <div class="tg-wrap"><table class="tg">
       <tr>
         <th class="tg-twuo">Datatype</th>
         <th class="tg-twuo">Definition</th>
         <th class="tg-twuo">Example</th>
       </tr>
       <tr>
         <td class="tg-un94">String</td>
         <td class="tg-un94">Characters</td>
         <td class="tg-un94">$name = 'Steve';</td>
       </tr>
       <tr>
         <td class="tg-lhr3">Integer</td>
         <td class="tg-lhr3">Whole Number</td>
         <td class="tg-lhr3">$gameLevel = 10;</td>
       </tr>
       <tr>
         <td class="tg-un94">Float</td>
         <td class="tg-un94">Decimal Number</td>
         <td class="tg-un94">$probability = .08;</td>
       </tr>
       <tr>
         <td class="tg-lhr3">Boolean</td>
         <td class="tg-lhr3">True or False</td>
         <td class="tg-lhr3">$win = true;</td>
       </tr>
       <tr>
         <td class="tg-un94">Array</td>
         <td class="tg-un94">Stores Multiple Values</td>
         <td class="tg-un94">$cards = array ('hearts','spades','diamonds','clubs');</td>
       </tr>
       <tr>
         <td class="tg-lhr3">Object</td>
         <td class="tg-lhr3">Defined by its Variables <br>&amp;  Functions</td>
         <td class="tg-lhr3">class Fruit { function fruit() { $this-&gt;model = "apple"; } }</td>
       </tr>
       <tr>
         <td class="tg-un94">Null</td>
         <td class="tg-un94">No Value</td>
         <td class="tg-un94">$newGame = NULL;</td>
       </tr>
     </table>
    </div>
</div>
</body>
</html>
