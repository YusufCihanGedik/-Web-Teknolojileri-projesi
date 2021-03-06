

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- Ikon Kutuphanesi -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="Css/Stilim.css" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
  
  <title>Document</title>
  
</head>

<body id="body1" style="background-image: url(images/Login.jpg); ">
    

	<nav class="navbar bg-dark navbar-expand-sm navbar-dark fixed-top">
		<div class="container">
			<a href="index.html" class="navbar-brand">
				YCG
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a href="özgeçmiş.html" class="nav-link active">
							Özgeçmiş
						</a>
					</li>
					<li class="nav-item">
						<a href="şehrim.html" class="nav-link active">
							Şehrim
						</a>
					</li>
					<li class="nav-item">
						<a href="Mirasımız.html" class="nav-link active">
							Mirasımız
						</a>
					</li>
					<li class="nav-item">
						<a href="İlgi_alanlarım.html" class="nav-link active">
							İlgi Alanlarım
						</a>
					</li>
                    
				</ul>
                <ul class="navbar-nav ml-auto">
					
                    <li class="nav-item">
						<a href="iletişim.html" class="nav-link active">
							İletişim
						</a>
					</li>
					<li class="nav-item">
						<a href="login.php" class="nav-link active">
							Login <i class="fas fa-sign-in-alt"></i>
						</a>
					</li>
				</ul>
			</div>

		</div>
	</nav>
	<header>
	<div class=" container py-5">
      <div class="jumbotron text-dark jumbotron-image shadow" style="background-image: url(images/);">
        <h1 class=" display-2 mb-4">
          HOŞGELDİNİZ
        </h1>
        
      </div>
    </div>

	</header>	
    
    <main>
		<div class="container">
			
			<?php 

				include("kullanicilar.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("SİTEYE GİRİŞ YAPTINIZ !!");
				   echo("ANA SAYFAYA GEÇİŞ YAPABİLİRSİNİZ !!");
				   header("Refresh: 5; url=index.html");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış.";
			            echo "!!!TEKRAR DENEYİN!!!";
			            header("Refresh: 1; url=login.php");
			    }
			
			?>
			
		</div>
		
    </main>
    <footer id="footer1" class="py-3 bg-dark text-white text-center">
		Web Teknolojileri Projesi © Yusuf Cihan GEDİK 2021
	</footer>
	
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</body>

</html>