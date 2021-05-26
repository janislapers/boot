<!DOCTYPE html>

<html>


<head>
  <title>Kaloriju kalkulators</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
body {
  background-image: url("3.jpg");
}
</style>
</head>

<body>

<h2>Kaloriju kalkulators</h2>


<form action="5Prakt.php" method="GET">

  <input type="text" name="number" class="well" placeholder="Ievadiet produktu skaitu" value=""><br>
  <button type="submit"  name="submit">Izveidot!</button>
  </form>
  <?php

if(isset($_GET["submit"])){
  $skaits =$_GET["number"];
 

  ?>
  <form method="Post">
  <?php

    for ($i = 0; $i <$skaits; $i++){
      echo ($i+1);
      echo "<br/>";
    
      ?>
<form action="/action_page.php" class="was-validated">
    <div class="form-group">

      <input type="text"  class="form-control" id="uname"  name="product[]" placeholder="Produkts(g)" required><br>
      <input type="text" class="form-control" id="uname"  name="olbaltumvielas[]" placeholder="olbaltumvielas(g)" required><br>
      <input type="text"  class="form-control" id="uname"  name="tauki[]" placeholder="tauki(g)" required><br>
      <input type="text" class="form-control" id="uname"  name="oglhidrati[]" placeholder="oglhidrati(g)" required><br>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    
    
   

      <?php
    }
    }

    ?>
    <button type="submit"   name="calculate">Aprēķināt!</button>
    <?php

           if(isset($_POST["calculate"])){
            $produkts=$_POST["product"];
            $olbv=$_POST["olbaltumvielas"];
            $tauki=$_POST["tauki"];
            $oglhidrati=$_POST["oglhidrati"];

            $sumOFkcal = 0;
            
            


  for ($i = 0; $i<$skaits;$i++) {
   
  $sumOFkcal= ($olbv[$i]*4)+ ($tauki[$i]*9) + ($oglhidrati[$i]*4);

  echo "<br />";
  echo "100 gramos produkta " ,$produkts[$i] ," ir "  ,$sumOFkcal," kcal";
  echo "<br />";
  

}
  }
  
 
 


?>



<div class="container">           
  <img src="1.jpg" class="rounded-circle"  width="304" height="236"> 
</div>


</body>
</html>
