
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<div class="header"><a href=" "><i class="fas fa-phone-alt"  style="font-size:20px" ><small>  (00)</small>0000-0000</i></a></div>
	<header>
		<nav>
			<a class="logo" href="/"> <img src="imagens/logo.png"> </a>
			<div class="mobile-menu">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			
			</div>
			<ul class="nav-list">
				<li><a href="/">Pagina 1</a></li>
				<li><a href="/">Pagina 2</a></li>
				<li><a href="/">Pagina 3</a></li>
				<li><a href="/">Pagina 4</a></li>
				<li><a href="/">Pagina 5</a></li>
				<li><a href="/">Pagina 6</a></li>
				<li><a href="/">Pagina 7</a></li>
				<!--<li><a href="/">(00)0000-0000</a></li>-->
			</ul>	
		</nav>
	</header>
<div class="body-container-div">
	<?php 
	 $con = mysqli_connect("localhost","root","","testrgb") 
or die(mysqli_error($con));
                 mysqli_query($con,"SET NAMES 'utf8'");
                 mysqli_query($con,'SET character_set_connection=utf8');
                 mysqli_query($con,'SET character_set_client=utf8');
                 mysqli_query($con,'SET character_set_results=utf8');
$cadastro = mysqli_query($con, "SELECT * FROM tbd_conteudo ORDER BY id ASC");
while($dados = mysqli_fetch_assoc($cadastro)){
$id = $dados['id'];
$descricao = $dados['descricao'];
$img = $dados ['img'];
                    
 ?>
	<div class="gallery" >
		<img src="<?php echo $img  ?>">					
		<div class="desc"><?php  echo $descricao;          ?> </div>
	</div>
<?php } ?>
	<!-- 
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>

	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
		<div class="desc">lorem epson epsiut </div>
	
	</div>
	
	<div class="gallery" >
		<img src="imagens/imgpqn.jpg">					
			<div class="desc">lorem epson epsiut </div>
	
	</div> -->
</div>

<footer>
    	
	<div class="footer-content">
	
		<ul>
	 		<img src="imagens/footerimg.jpg">
		</ul>
 		
	</div>
	<div class="footer-content">
		<h2>Pessoa ou Empresa</h2>
		<!--<ul>


			</ul>--->
						<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
   </div>
   <div class="footer-content">
	<h2>Acesse Também</h2>
	<ul>
		<li><a href="https://www.facebook.com/"><i class="fab fa-facebook-square" style="font-size:20px" > facebook.com/loremipsum</i></i>
		<li><a href="https://www.twitter.com/"><i class="fab fa-twitter-square" style="font-size:20px" > twitter.com/loremipsum</i></a></li>
		<li><a href="https://www.flickr.com/"><i class="fab fa-flickr" style="font-size:20px" > flickr.com/loremipsum</i></a></li>
	
	</ul>
	</div>
	</div>
	</footer>

			<div class="footer">
				<p><span>Todos os direitos reservados - &#169; 2022</span></p>


				<div  class="img-footer"> <img src="imagens/logofooter.png"> </div>
			</div>
	


	<script src="js/mobile-nav-bar.js"></script>
</body>
</html>