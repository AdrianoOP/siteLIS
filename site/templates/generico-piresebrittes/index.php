<?php
/**
 * Template desenvolvido por Adriano Pires e Marilia Brittes
 * 
 */

defined('_JEXEC') or die;

// Pegar os parametros do template
$params = JFactory::getApplication()->getTemplate(true)->params;

// Pegar o parametro logo que eh a url de onde se encontra a imagem logo pro site
if ($this->params->get('logo'))
{
	$logo = '<img src="'. JURI::root() . $this->params->get('logo') .'" id="logo" alt="Viviani Foto e Arte" />';
	//apenas simplifica a insercao da imagem do logo
}
else
{
	$logo = '';//caso o user nao tenha escolhido nenhum logo, a imagem nao sera colocada
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" /> 
	<script src="<?php echo "templates/".$this->template."/script/jquery.js" ?>"></script>
	<?php if ($this->countModules('slider')) : ?>
		<link rel="stylesheet" href="<?php echo "templates/".$this->template."/nivo-slider/themes/default/default.css" ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo "templates/".$this->template."/nivo-slider/themes/light/light.css" ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo "templates/".$this->template."/nivo-slider/themes/dark/dark.css" ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo "templates/".$this->template."/nivo-slider/nivo-slider.css"?>" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo "templates/".$this->template."/nivo-slider/jquery.nivo.slider.js"?>"></script>
		<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
		</script>
	<?php endif; ?>
	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 7]> <link rel="stylesheet" href="<?php echo "templates/".$this->template."/css/ie.css" ?>" type="text/css"> <![endif]-->
	<!--[if IE 7]>    <link rel="stylesheet" href="<?php echo "templates/".$this->template."/css/ie.css" ?>" type="text/css"> <![endif]-->
	<!--[if IE 8]>    <link rel="stylesheet" href="<?php echo "templates/".$this->template."/css/ie.css" ?>" type="text/css"> <![endif]-->
	<link href="<?php echo "templates/".$this->template."/css/estilo_geral.css" ?>" rel="stylesheet" type="text/css">

	<script>
	$(document).ready(function(){
		resizeContent();
		$(window).resize(function() {
			resizeContent();
		});
	});
	function resizeContent()
	{
		var docHeight = $(window).height();
		var footerHeight = $('footer').height();
		var footerTop = $('footer').position().top + footerHeight;
	   
		if (footerTop < docHeight) {
			$('footer').css('margin-top', 10 + (docHeight - footerTop) + 'px');
		}
	}
	
	</script>
</head>

<body>
<!-- Adiciona o cabecalho -->
<header>
	<!-- Adiciona o logo -->
	<?php if ($this->countModules('icon')) : ?>
	<div class="modlogo">
		<a href="#"><?php echo $logo ?></a>
		<jdoc:include type="modules" name="icon" style="xhtml" />
	</div>
	<?php endif ?>
	
	<div class="modmenubusca">
		<?php if ($this->countModules('busca')) : ?>
		<!-- Adiciona a busca -->
			<div class="modbusca">
				<jdoc:include type="modules" name="busca" style="xhtml" />
			</div>
			<div class="clearer"></div>
		<?php endif; ?>
		<?php if ($this->countModules('Menu')) : ?>
		<!-- Adiciona o menu -->
			<div class="modmenu">
				<jdoc:include type="modules" name="Menu" style="xhtml" />
			</div>
		<?php endif; ?>
	</div>
	<div class="clearer"></div>
</header>
<article class="corpo">
	<?php if($this->countModules('slider')): ?>
		<div class="modslider">
			<jdoc:include type="modules" name="slider" style="xhtml" />
		</div>
		<div class="clearer"></div>
	<?php endif ?>
		<div class="modcontent">
			<jdoc:include type="component" style="xhtml" />
		</div>
	<?php if($this->countModules('inferior')) :?>
		<div class="modinferior">
			<jdoc:include type="modules" name="inferior" style="xhtml" />
			<?php if($this->countModules('inf1')) :?>
				<div class="modinf1">
					<jdoc:include type="modules" name="inf1" style="xhtml" />
				</div>
			<?php endif ?>
			<?php if($this->countModules('inf2')) :?>
				<div class="modinf2">
					<jdoc:include type="modules" name="inf2" style="xhtml" />
				</div>
			<?php endif ?>
			<?php if($this->countModules('inf3')) :?>
				<div class="modinf3">
					<jdoc:include type="modules" name="inf3" style="xhtml" />
				</div>
			<?php endif ?>
			<?php if($this->countModules('inf4')) :?>
				<div class="modinf4">
					<jdoc:include type="modules" name="inf4" style="xhtml" />
				</div>
			<?php endif ?>
			<div class="clearer"></div>
		</div>
	<?php else : ?>
		<?php if($this->countModules('inf1') OR $this->countModules('inf2') OR $this->countModules('inf3') OR $this->countModules('inf4')) :?>
			<div class="modinferior_zero">
				<?php if($this->countModules('inf1')) :?>
					<div class="modinf1">
						<jdoc:include type="modules" name="inf1" style="xhtml" />
					</div>
				<?php endif ?>
				<?php if($this->countModules('inf2')) :?>
					<div class="modinf2">
						<jdoc:include type="modules" name="inf2" style="xhtml" />
					</div>
				<?php endif ?>
				<?php if($this->countModules('inf3')) :?>
					<div class="modinf3">
						<jdoc:include type="modules" name="inf3" style="xhtml" />
					</div>
				<?php endif ?>
				<?php if($this->countModules('inf4')) :?>
					<div class="modinf4">
						<jdoc:include type="modules" name="inf4" style="xhtml" />
					</div>
				<?php endif ?>
			<div class="clearer"></div>
		</div>
		<?php endif ?>
	<?php endif ?>
</article>
<footer>
	<?php if($this->countModules('contato')) :?>
		<div class="modcontato">
			<jdoc:include type="modules" name="contato" style="xhtml" />
		</div>
	<?php endif ?>
	<?php if($this->countModules('foot2')) :?>
		<div class="modfoot2">
			<jdoc:include type="modules" name="foot2" style="xhtml" />
		</div>
	<?php endif ?>
	<div class="clearer"></div>
	<?php if($this->countModules('copyright')) :?>
		<div class="modcopy">
			Desenvolvido por <a href="http://br.linkedin.com/pub/adriano-pires/30/13/b55/" target="_blank">Adriano Oliveira Pires</a> e <a <a href="http://br.linkedin.com/pub/adriano-pires/30/13/b55/" target="_blank">Marília Brittes</a>, uma parceria <a href="http://www.evolutt.com.br" target="_blank">Evolutt</a> &copy 2013
		</div>
	<?php endif ?>
</footer>
</body>
</html>