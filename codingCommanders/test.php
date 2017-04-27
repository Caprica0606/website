<!DOCTYPE html>
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="codingCommanders.css">
<title>Supplimental Materials</title>
<style>
body{
  font-family: "Lucida Console", sans-serif;
  font-size: 18px
}
col-group > div {
  padding: 1em;
}
@media screen and (min-width: 44em) {
  .col-group {
    overflow: hidden;
  }
  .col-group > div {
    float: left;
    width: 50%;
    margin-right: 15px;
    margin-left: 15px;
  }
  .col-group > div:nth-child(odd) {
    clear: left;
  }
}
@media screen and (min-width: 64em) {
  .col-group > div {
    width: 100%;
  }
  .col-group > div:nth-child(odd) {
    clear: none;
  }
}
</style>
</head>
<body background = "transLogo.png" >
  <div id="pattern" class="pattern">
    <div class="col-group">
      <div align = "center" class = "contentBox">
        <h1>By Language</h1>
        <h2> HTML</h2>
        <a class = "links" href="htmlSuppliment.php">HTML Materials</a>
        <h2> PHP</h2>
        <a class = "links" href="phpSuppliment.php">PHP Materials</a>
        <h2> MySQL</h2>
        <a class = "links" href="phpSuppliment.php">MySQL Materials</a>
        <h2> JavaScript</h2>
        <a class = "links" href="javascriptSuppliment.php">PHP Materials</a>
        </div>
      <div align = "center" class = "contentBox">
      <div>
        <h2>Here's another column of text</h2>
        <p>Sed sit amet molestie diam. Etiam adipiscing dictum eros, vitae feugiat augue convallis sit amet. Nunc quis massa non dolor dictum condimentum.</p>
      </div>
      <div>
        <h2>Here's the third column</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque turpis diam, tincidunt nec convallis vitae, dapibus vitae enim. Nam bibendum nisl in risus imperdiet vestibulum.</p>
      </div>

    </div>
  </div>
</body>
