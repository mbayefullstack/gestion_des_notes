<!doctype html>
<html lang="en">
  <head>
  	<title>Login 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <!-- <link rel="stylesheet" href="../view/template/bootstrap/css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="bg-dark-subtle">
	<section class="ftco-section d-flex align-items-center vh-100">
		<div class="container bg-body col-4 shadow">
			<div class="row justify-content-center">
				<div class="text-center bg-primary text-white text-uppercase">
					<h2 class="heading-section">Authentification</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center ">
		      		<span class="fa fa-user-o fa-5x bg-primary text-white rounded-circle p-5"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Connectez-vous</h3>
						<form action="index.php?menu=listerEleve" class="login-form">
		      		<div class="form-group m-3">
		      			<input type="text" class="form-control rounded-left" placeholder="Votre E-mail" required>
		      		</div>
	            <div class="form-group d-flex m-3">
	              <input type="password" class="form-control rounded-left" placeholder="Votre Password" required>
	            </div>
	            <div class="form-group m-3">
	            	<a type="submit" href="http://localhost:3011/annee/getAllData" class="form-control btn btn-primary rounded submit px-3">Se connecter</a>
	            </div>
	            <div class="form-group d-md-flex m-3">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Me Mémoriser
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right" style="text-align:right;">
									<a href="#">Mot de Passe Oublié</a>
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
	</body>


	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

<source src="../view/template/bootstrap/js/bootstrap.js" type="">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
        crossorigin="anonymous"></script>
</html>