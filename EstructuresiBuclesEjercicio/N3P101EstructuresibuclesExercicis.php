<html>
<head>
<title> Site developed by: Marc Aspas Martinez</title>
<style>
  .actividad{
	color:<?php echo $_POST['color'];?>;
	font-family:<?php echo $_POST['fuentedetexto'];?>;
	size:<?php echo $_POST['rango'];?>;
  }
</style>
</head>
<body>
<div style="text-align: center">
<p>Site developed by: Marc Aspas Martinez</p>
<a href="https://mail.google.com/mail/u/0/?tab=rm#inbox">Click here for enter in my gmail</a>
<br/>
<?php
date_default_timezone_set("America/New_York");
echo "Today is ";
echo date("F d");
echo ", ";
echo date("Y");
?>

<br/>
</div>

<?php
echo $_POST['name'];
echo $_POST['surname'];
echo $_POST['surname2'];
echo $_POST['age'];
echo $_POST['color'];
echo $_POST['font-size'];
echo $_POST['range'];
echo "<p class='actividad'>Esta es la actividad 4 del Modulo 3 Estructures i Bucles</p>"
?>
</body>
</html>

<?php
session_start();
echo "Yesterday it was ";
$yesterday = date("Y-m-d", mktime(0,0,0, date("m"), date("d")-1,date("Y")));
echo $yesterday;
echo "<br>";

echo "The previous month is ";
$dt = new DateTime('2021-10-08');
$dt->modify('next month');
echo $dt->format('d-m-Y');
echo "<br>";

function dias_hasta_fin_mes(){

       $total_mes = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y"));

       $transcurrido = date("d");
       
       return $total_mes - $transcurrido;

}
echo 'There are ' . dias_hasta_fin_mes() . ' days left in this month.' ;

echo "<br>";
echo "There are ";
$month = 12 - date("m");
echo $month;
echo " months in the current year.";

function mostrar_horario(){
      $mesActual=date('m');

      if($mesActual>='6' && $mesActual<='9'){
        return 'Good summer!';
      }else{
	return 'Good winter!';
      }

}

echo '<br>';
echo mostrar_horario();

 setcookie("username", "Marc", time() + 3600);
 setcookie("surname", "Aspas", time() + 3600);
 setcookie("surname2", "Martinez", time() + 3600);
 setcookie("age", 21, time() + 3600);
 setcookie("color","red", time() + 3600);
 setcookie("range",45, time() + 3600);
 setcookie("font-size","Verdana", time() + 3600);

session_start();

if(isset( $_SESSION['contador'])){
	$_SESSION['contador'] +=1;
}else{
	$_SESSION['contador'] = 1;
}

$mensaje = "Has visitado esta pagina ". $_SESSION['contador']. " veces";
echo "<p>$mensaje</p>";
echo "<p>Recargar la pagina para incrementar el contador</p>";
?>

