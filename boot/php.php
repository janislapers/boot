<!DOCTYPE html>
<html>

<head>
  <title>Tīmekļa Tehnoloģijas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>


<body>


<div class="col-xs-12 col-sm-12 col-md-12">
<nav class="navbar navbar-default">
<div class="container-fluid">
    <div class="navbar-header">
        <a href="index.html" class="btn btn-info btn-lg">
                    <span class="glyphicon glyphicon-home"></span>
        </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
      <li><a href="html-bootstrap.html">html-bootstrap</a></li> 
      <li><a href="javascript.html">javascript</a></li> 
      <li><a href="php.php">php</a></li> 
      <li><a href="drupal.html">drupal</a></li> 
    </ul></div></nav>


	<div class="container">
		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="jumbotron">
		  <div class="container text-center">
			<h1>Par PHP pastāsta to, ka:</h1> 
		     
		  </div>

		  <p>Izmanto, lai izveidotu tīmekļa projektus. Var izmantot tieši HTML kodā. Skriptu operācijas rezultāts bieži tiek parādīts tieši klienta pārlūkprogrammā, jāatcerās, ka viena pārlūkprogramma nav pietiekama, lai strādātu PHP. Jūs nevarēsiet palaist index.php failu pārlūkprogrammā, kā index.html failu. Lai php skripts strādātu būs nepieciešams tīmekļa serveris, kā piemēram apache.</p>

</div>
 <meta property="og:description" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" property='stylesheet' href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</div></div>

<footer class="container-fluid text-center">


<h2>Viens no piemēriem, ko iespējams paveikt ar php, būtu vienkāršs kalkulators, kurš sarēķina jūsu iegūtu atzīmi kursa darbā</h2>

<form method="POST" action="php.php">


  Vārds: <input class="form-control input-lg" id="inputlg" type="text" name="persona[uzvards]"  ><br>
  Ieguldītās stundas kursa darba rakstīšanā: <input class="form-control input-lg" id="inputlg" type="text" name="persona[nauda]" ><br>

  <input type="submit" name="send" value="Rēķināt!">

   


  
</form> 



  
<?php


$uzvards=$_POST['persona']['uzvards'];




echo ' ' .$uzvards. '! Jūs atzīme šajā kursa darbā ir  '; echo rand(5, 10);


?>






</body>
</html>
