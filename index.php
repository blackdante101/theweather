
<!DOCTYPE html>
<html>
<head>
	<title>the.weather</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	ul li a 
	{
		text-decoration: none;
	}
</style>
</head>
<body>
<?php 

if (isset($_GET['city']))
{
	$city = $_GET['city'];
  $api="https://api.weatherbit.io/v2.0/current?city=".$city."&key=3cb12b0be51b45c9b14cf2316da22127";

$json = file_get_contents($api);
$results = json_decode($json,true);


	echo '<div  class="container mt-4">
	<div style="height:550px;" class="row">
	<div style="background-image:url(img/weather.jpg);background-size:cover;" class="col-md-10 rounded">
			
 	<p style="margin:20px;" class="text-white">the.weather</p>
 	<section class="p-4 ml-5" style="margin-top:350px;">
 		<div style="color:white;" class="row">
 			<div style="font-size:6em;">
 				'.$results['data'][0]['temp'].'<sup>&deg;<sup>
 			</div>
 			<div class="pt-4 pl-4">
 				<span style="font-size:3em;">'.$results['data'][0]['city_name'].'</span><br>
 				<span>'.$results['data'][0]['ob_time'].'</span>
 			</div>
 			<div class="pt-4 pl-4">
 				<img src="img/icons/'.$results['data'][0]['weather']['icon'].'.png" width="70" height="70" alt=""><br>
 				<span><center>'.$results['data'][0]['weather']['description'].'</center></span>
 				
 			</div>
 		</div>
 	</section>
  
		</div>
		<div style="background-size:cover;background-position:right; padding:0;" class="col-md-2">
			<div class="" style="height:100%;width:100%;background-color:#0e293eb3;">
		            <form method="get" action="index.php">
					<input name="city" type="text" placeholder="Another Location" style="border:none;background-color: transparent;border-bottom:2px solid gray;margin:20px;width:52%;color:white;">
					<button style="float:right;height:50px;width:50px;color:#102b3f;background-color:#4fb48e;border:none;"><i class="fa fa-search"></i></button></form>
					<ul id="suggested_cities">
						<li><a class="text-white" href="index.php?city=accra">Accra</a></li>
						<li><a class="text-white" href="index.php?city=kumasi">Kumasi</a></li>
						<li><a class="text-white" href="index.php?city=cape_coast">Cape Coast</a></li>
					</ul>
					<hr/>
					<ul class="mt-5" style="text-align:left;padding:0;color:white;font-size:12px;">
						<li>Cloudy <span style="font-weight:bold;float:right;">'.$results['data'][0]['clouds'].'%</span></li>
						<li>Humidity <span style="font-weight:bold;float:right;">'.$results['data'][0]['rh'].'%</span></li>
						<li>Wind <span style="font-weight:bold;float:right;">'.$results['data'][0]['wind_spd'].'m/s</span></li>
					</ul>
		
			</div>
			
		</div>
		
	</div>
	</div>';
}
else
{
	 $api="https://api.weatherbit.io/v2.0/current?city=tamale&key=3cb12b0be51b45c9b14cf2316da22127";

$json = file_get_contents($api);
$results = json_decode($json,true);


	echo '<div  class="container mt-4">
	<div style="height:550px;" class="row">
	<div style="background-image:url(img/weather.jpg);background-size:cover;" class="col-md-10 rounded">
			
 	<p style="margin:20px;" class="text-white">the.weather</p>
 	<section class="p-4 ml-5" style="margin-top:350px;">
 		<div style="color:white;" class="row">
 			<div style="font-size:6em;">
 				'.$results['data'][0]['temp'].'<sup>&deg;<sup>
 			</div>
 			<div class="pt-4 pl-4">
 				<span style="font-size:3em;">'.$results['data'][0]['city_name'].'</span><br>
 				<span>'.$results['data'][0]['ob_time'].'</span>
 			</div>
 			<div class="pt-4 pl-4">
 				<img src="img/icons/'.$results['data'][0]['weather']['icon'].'.png" width="70" height="70" alt=""><br>
 				<span><center>'.$results['data'][0]['weather']['description'].'</center></span>
 				
 			</div>
 		</div>
 	</section>
  
		</div>
		<div style="background-size:cover;background-position:right; padding:0;" class="col-md-2">
			<div class="" style="height:100%;width:100%;background-color:#0e293eb3;">
		
					 <form method="get" action="index.php">
					<input name="city" type="text" placeholder="Another Location" style="border:none;background-color: transparent;border-bottom:2px solid gray;margin:20px;width:52%;color:white;">
					<button style="float:right;height:50px;width:50px;color:#102b3f;background-color:#4fb48e;border:none;"><i class="fa fa-search"></i></button></form>
					<ul class="text-white" id="suggested_cities">
						<li><a class="text-white" href="index.php?city=accra">Accra</a></li>
						<li><a class="text-white" href="index.php?city=kumasi">Kumasi</a></li>
						<li><a class="text-white" href="index.php?city=cape_coast">Cape Coast</a></li>
					</ul>
					<hr/>
					<ul class="mt-5" style="text-align:left;padding:0;color:white;font-size:12px;">
						<li>Cloudy <span style="font-weight:bold;float:right;">'.$results['data'][0]['clouds'].'%</span></li>
						<li>Humidity <span style="font-weight:bold;float:right;">'.$results['data'][0]['rh'].'%</span></li>
						<li>Wind <span style="font-weight:bold;float:right;">'.$results['data'][0]['wind_spd'].'m/s</span></li>
					</ul>
		
			</div>
			
		</div>
		
	</div>
	</div>';
}

?>	

 
</body>
</html>