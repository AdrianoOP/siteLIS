<?php
/**
 * Template desenvolvido por Adriano Pires e Marilia Brittes e Aurélio Grott
 * 
 */

defined('_JEXEC') or die;

// Pegar os parametros do template
$params = JFactory::getApplication()->getTemplate(true)->params;

// Pegar o parametro logo que eh a url de onde se encontra a imagem logo pro site
if ($this->params->get('logo'))
{
	$logo = '<img src="'. JURI::root() . $this->params->get('logo') .'" id="logo" alt="Portal LIS" />';
	//apenas simplifica a insercao da imagem do logo
}
else
{
	$logo = '';//caso o user nao tenha escolhido nenhum logo, a imagem nao sera colocada
}

//pegar o parametro 
if ($this->params->get('background-image'))
{
	$backgroundimage = JURI::root() . $this->params->get('background-image');
	//apenas simplifica a insercao da imagem do logo
}
else
{
	$backgroundimage = '';//caso o user nao tenha escolhido nenhum logo, a imagem nao sera colocada
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" /> 
	<script src="<?php echo "templates/".$this->template."/script/jquery.js" ?>"></script>
	<link href="<?php echo "templates/".$this->template."/css/main.css" ?>" rel="stylesheet" type="text/css">
	
	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 7]> <link rel="stylesheet" href="<?php echo "templates/".$this->template."/css/ie.css" ?>" type="text/css"> <![endif]-->
	<!--[if IE 7]>    <link rel="stylesheet" href="<?php echo "templates/".$this->template."/css/ie.css" ?>" type="text/css"> <![endif]-->
	<!--[if IE 8]>    <link rel="stylesheet" href="<?php echo "templates/".$this->template."/css/ie.css" ?>" type="text/css"> <![endif]-->
</head>

<body>
<!-- Adiciona o cabecalho -->
<header class="header_main">
</header>

<article class="corpo_main">
</article>

<!-- FOOTER -->

<footer class="footer_main">
</footer>
<!-- END FOOTER -->
</body>
</html>