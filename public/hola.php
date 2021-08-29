<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<head>
	<title></title>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<div class="container text-center">
		<div class="row col-xl-12 col-md-12">
			<div class="col-12">
				<p1 class="bg-primary">De click en el la imagen para recibir su premio</p1>
				<br>
				<br>
				<br>
				<br>
			</div>
			<div class="col-12">
				<img id="imganimate" onclick="myFunction()" class="" src="descarga.jpg">
			</div>
		</div>
		<br>
		<br>
		<p id="textocod"></p>
		<!-- <button id="botonanimate" onclick="myFunction()">Probar suerte</button> -->
		<script>
		var activado = true;
		function myFunction() {
			if (activado) {
			document.getElementById("textocod").innerHTML = "El codigo de su premio es: 6576475675637";
			document.getElementById("imganimate").className = "animated swing delay-4s";
			alert("El codigo de su premio es: 6576475675637");
			activado = false;
			}
		}
		</script>
	</div>
</body>
</html>