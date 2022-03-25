
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="stylegaleria.css">
	<script src="https://kit.fontawesome.com/037e05c7ff.js" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>

	<header>
		<nav>
			<a class="logo" href="/">LOGO</a>
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
			<li><a href="/">(00)0000-0000</a></li>
			</ul>	
		</nav>
	</header>
<div class="body-container-div">
	<?php 
	 include "db.php";
$cadastro = mysqli_query($con, "SELECT * FROM tb_conteudo ORDER BY id ASC");
while($dados = mysqli_fetch_assoc($cadastro)){
$id = $dados['id'];
$descricao = $dados['descricao'];
$img = $dados ['img'];                   
 ?>
	<div class="gallery" >
		<img src="<?php  echo $img; ?>">					
		<div class="desc"><?php  echo $descricao; ?> </div>
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
<footer >

	<div class="footer-content">
		<ul>
	 		<img src="imagens/footerimg.jpg">
		</ul>
 		
	</div>
	<div class="footer-content">
		<h2>Pessoa ou Empresa</h2>
		<ul>
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

			</ul>
   </div>
   <div class="footer-content">
	<h2>Acesse Também</h2>
	<ul>
		<li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"> facebook.com/loremipsum</i></li>
		<li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"> instagram.com/loremipsum</i></a></li>
		<li><a href="https://www.flickr.com/"><i class="fa-brands fa-flickr"> flickr.com/loremipsum</i></a></li>
	
	</ul>

</footer>
<div class="footer">
	<h4>Todos os direitos reservados 2022</h4>
</div>

	<script src="js/mobile-nav-bar.js"></script>
</body>
</html>