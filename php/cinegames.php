<?php
require_once "includes/header.php";

?>
<main>
<style type="text/css">
	#conteudo{
		position: absolute;
		top:50px;
			}
</style>
<section id="content">
	<section id="conteudo">
	<style type="text/css">
		.slide{
			padding-top: 200px;
		}
	</style>
	<section id="slider" class="banner">
	<ul>
	<?php
	$SQL_B = mysql_query("SELECT id_noticia, imagem FROM noticias ORDER BY id_noticia DESC LIMIT 5");
	while($bn = mysql_fetch_array($SQL_B)){
	?>
		<li><a href="noticia.php?id=<?php echo $bn['id_noticia']; ?>"><img src="paineldecontrole/imagens/imgNoticia/<?php echo $bn['imagem'];?>"alt="Postagem 1"/></a></li>
		<?php } ?>
		</ul>
		
			</section> <!--Banner-->
			<section id="artigos"> 
			<?php 

			$SQL_F = mysql_query("SELECT * FROM categoria WHERE categoria_noticia='Futebol' ");
			while($ft= mysql_fetch_array($SQL_F)){
				$id_ft = $ft['id_categoria'];
			}
			$SQL_FN = mysql_query("SELECT * FROM noticias WHERE categoria='$id_ft' ORDER BY id_noticia DESC LIMIT 3");
				while($ftn = mysql_fetch_array($SQL_FN)){
					?>
					<article>
						<h1><a href="categoria.php?id=<?php echo $id_ft; ?>">Futebol</a></h1>
						<img src="paineldecontrole/imagens/imgNoticia/<?php echo $ftn['imagem'];?>"alt="<?php echo $ftn['titulo'];?>"/>
						<h2><a href="noticia.php?id=<?php echo $ftn['id_noticia'];?>"><?php echo $ftn['titulo'];?></a></h2>
					</article>
					<?php }?>






					<?php 

			$SQL_E = mysql_query("SELECT * FROM categoria WHERE categoria_noticia='Ecônomia' ");
			while($ec= mysql_fetch_array($SQL_E)){
				$id_ec = $ec['id_categoria'];
			}
			$SQL_EC = mysql_query("SELECT * FROM noticias WHERE categoria='$id_ec'ORDER BY id_noticia DESC LIMIT 3");
				while($ecn = mysql_fetch_array($SQL_EC	)){
					?>
					<article>
						<h1><a href="categoria.php?id=<?php echo $id_ec; ?>">Economia</a></h1>
						<img src="paineldecontrole/imagens/imgNoticia/<?php echo $ecn['imagem'];?>"alt="<?php echo $ecn['titulo'];?>"/>
						<h2><a href="noticia.php?id=<?php echo $ecn['id_noticia'];?>"><?php echo $ecn['titulo'];?></a></h2>
					</article>
					<?php }?>

					<?php 
		$SQL_C = mysql_query("SELECT * FROM categoria WHERE categoria_noticia='Ciência' ");
			while($ci= mysql_fetch_array($SQL_C)){
				$id_c = $ci['id_categoria'];
			}
			$SQL_CI = mysql_query("SELECT * FROM noticias WHERE categoria='$id_c'ORDER BY id_noticia DESC LIMIT 3");
				while($ci = mysql_fetch_array($SQL_CI)){
					?>
					<article>
						<h1><a href="categoria.php?id=<?php echo $id_c; ?>">Ciência</a></h1>
						<img src="paineldecontrole/imagens/imgNoticia/<?php echo $ci['imagem'];?>"alt="<?php echo $ci['titulo'];?>"/>
						<h2><a href="noticia.php?id=<?php echo $ci['id_noticia'];?>"><?php echo $ci['titulo'];?></a></h2>
					</article>
					<?php }?>
			</section> <!--Artigos -->
			<section id="publicidade-conteudo">
				
			</section> <!--Publicidade e conteudo -->

</section> <!-- Conteudo -->
	<section id="sidebar">
				<?php require_once 'includes/sidebar.php';
				?>
			</section>
</section> <!-- Content -->


</main>