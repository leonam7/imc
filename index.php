<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora imc</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-light" style="background-color:#00BFFF;">
        <a class="navbar-brand" href="#">
          <img  src="img/Science-Scale-icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
          Calcule aqui seu IMC
        </a>
    </nav>
<div class="container">
    <form name="form_imc" id="form_imc" method="POST" enctype="multipart/form-data" action="imc.php" >
      <div class="form-group">
      <label for="altura">Altura</label>
      <input type="number" step="0.01" min="1" class="form-control" id="altura" name="altura">
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Peso</label>
      <input type="number" step="0.01" min="1" class="form-control" id="peso" name="peso">
      </div>
      <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    </div>     

    <?php

//function calc_imc($peso,$altura){
$peso  = $_POST['peso'];
$altura =$_POST['altura'];
$total = $peso/($altura*$altura);

 if($total < 16){
    echo"Destnutrição grau 3";
    echo '<p class="lead">'.number_format($total,2).'</p>';

} elseif($total >= 16 && $total <17){
    echo"Destnutrição grau 2";
    echo '<p class="lead">'.number_format($total,2).'</p>';
} elseif($total >= 17 && $total <18.5){
    echo"Destnutrição grau 1";
    echo '<p class="lead">'.number_format($total,2).'</p>';
} elseif($total >= 18.5 && $total <24.9){
    echo"Normal";
    echo '<p class="lead">'.number_format($total,2).'</p>';
} elseif($total >= 25 && $total <30){
    echo"Sobrepeso";
    echo '<p class="lead">'.number_format($total,2).'</p>';
} elseif($total >= 30 && $total <35){
    echo"Obesidade Grau 1 ";
    echo '<p class="lead">'.number_format($total,2).'</p>';
} elseif($total >= 35 && $total <40){
    echo"Obesidade Grau 2 ";
    echo '<p class="lead">'.number_format($total,2).'</p>';
} elseif($total > 40){
    echo"Obesidade Grau 3";
    echo '<p class="lead">'.number_format($total,2).'</p>';
}


//}

//echo calc_imc(65,1.9);

?>
    
</body>
</html>
