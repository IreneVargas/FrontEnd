<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<meta name="keywords" content="qa, testing, automatizado, manual, jira, rapise, spiraplan">
    <title>Vargas, Irene</title>
</head>
<body>
<!--contact-->
<div class="contenedor-texto" id="contact-form">
<div class="container">
<p><span class="content1">
        <? $nombre=$_GET['Nombre']; 
   $telefono=$_GET['Telefono'];
   $email=$_GET['Email'];
   $comentarios=$_GET['Comentarios'];

   $cuerpo = "Comentarios Pagina irenevargas2015@gmail.com \n"; 
   $cuerpo .= "Nombre: " .$nombre.  "\n"; 
   $cuerpo .= "Telefono: ".$telefono. "\n"; 
   $cuerpo .= "E-mail: ".$email."\n";
   $cuerpo .= "Comentarios: " .$comentarios. "\n"; 	
   mail("irenevargas2015@gmail.com", "Nuevo Comentario de la pagina \n" ,$cuerpo ,"from:irenevargas2015@gmail.com"); 
   
?>
      </span>Gracias, le responderé a la brevedad.</p		
	></div>
</div>
</div>

<!--/contact -->
</body>
</html>