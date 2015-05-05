<?php
/**
 * Template desenvolvido por Adriano Pires e Marilia Brittes e Aurélio Grott
 * 
 */

defined('_JEXEC') or die;


$DEBUG_CLASS = "";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" /> 
	<script src="<?php echo "templates/".$this->template."/script/jquery.js" ?>"></script>
	<script src="<?php echo "templates/".$this->template."/script/background_change.js" ?>"></script>
	<link href="<?php echo "templates/".$this->template."/css/main.css" ?>" rel="stylesheet" type="text/css">
	
	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 7]> <link rel="stylesheet" href="<?php echo "templates/".$this->template."/css/ie.css" ?>" type="text/css"> <![endif]-->
	<!--[if IE 7]>    <link rel="stylesheet" href="<?php echo "templates/".$this->template."/css/ie.css" ?>" type="text/css"> <![endif]-->
	<!--[if IE 8]>    <link rel="stylesheet" href="<?php echo "templates/".$this->template."/css/ie.css" ?>" type="text/css"> <![endif]-->
</head>

<body>

<article <?php echo "class=\"$DEBUG_CLASS"?> corpo_main">
<?php if ($this->countModules('modHeaderImages')||
		$this->countModules('modMenu')) : ?>
	<header <?php echo "class=\"$DEBUG_CLASS"?> header">
		<?php if ($this->countModules('modHeaderImages')) : ?>
			<div <?php echo "class=\"$DEBUG_CLASS"?> modHeaderImages">
				<jdoc:include type="modules" name="modHeaderImages" style="xhtml" />
			</div>
		<?php endif; ?>
		<div class="clearer"></div>
		<?php if ($this->countModules('modMenu')) : ?>
			<div <?php echo "class=\"$DEBUG_CLASS"?> modMenu">
				<jdoc:include type="modules" name="modMenu" style="xhtml" />
			</div>
			<div class="clearer"></div>
		<?php endif; ?>
	</header>
	<div class="clearer"></div>
<?php endif; ?>

<article <?php echo "class=\"$DEBUG_CLASS"?> corpo_main">
<?php if ($this->countModules('modMain')) : ?>
	<div <?php echo "class=\"$DEBUG_CLASS"?> modMain">
		<jdoc:include type="modules" name="modMain" style="xhtml" />
	</div>
	<div class="clearer"></div>
<?php endif; ?>
<?php if ($this->countModules('modMainImages')) : ?>
	<div class="modMainBorder"></div>
	<div <?php echo "class=\"$DEBUG_CLASS"?> modMainImages">
		<jdoc:include type="modules" name="modMainImages" style="xhtml" />
	</div>
	<div class="clearer"></div>
<?php endif; ?>
</article>

<footer <?php echo "class=\"$DEBUG_CLASS"?>">
	<?php if ($this->countModules('modFooter')) : ?>
		<div <?php echo "class=\"$DEBUG_CLASS"?> modFooter">
			<jdoc:include type="modules" name="modFooter" style="xhtml" />
		</div>
		<div class="clearer"></div>
	<?php endif; ?>
</footer>

<!-- END FOOTER -->
</body>
</html>