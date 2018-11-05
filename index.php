<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/script.js">
</script>
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p id="alert" style="display: none;" class="alert alert-success text-center">
					<i class="glyphicon glyphicon-ok"></i>
					<span id="show"></span></p>
				<form >
				  <div class="form-group">
				    <label for="nom" id="hh">Nom</label>
				    <input type="text" class="form-control" id="nom" placeholder="Saisissez votre nom !">
				  </div>
				  <div class="form-group">
				    <label for="prenom">Prenom</label>
				    <input type="text" class="form-control" id="prenom" placeholder="Saisissez votre prenom ! ">
				  </div>
				  <div class="form-group">
				    <label for="phone">Phone</label>
				    <input type="text" class="form-control" id="phone" placeholder="Saisissez votre telephone!">
				  </div>
				  <div class="form-group">
				    <label for="job">Job</label>
				    <input type="text" class="form-control" id="job" placeholder="Saisissez votre job!">
				  </div>

				</form>
								  <button class="btn btn-success" id="btn">Envoyer</button>
			</div>
			
			
		</div>
			
	</div>
</body>
</html>
