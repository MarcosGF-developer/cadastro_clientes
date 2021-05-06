  
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<title>Sistema - Programação Web</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">

			<div class="row w-100">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNavDropdown">
				    <ul class="navbar-nav">
				      <li class="nav-item active">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				      </li>
				      
				    </ul>
				  </div>
				</nav>
			</div>


			<div class="col-md-8 mt-5">
			
				@yield('conteudo')
				
			</div>

		</div>
	</div>