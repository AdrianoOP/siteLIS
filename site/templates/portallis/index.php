<?php
/**
 * Template desenvolvido por Adriano Pires e Marilia Brittes e Aurélio Grott
 * 
 */

defined('_JEXEC') or die;


$DEBUG_CLASS = "borda";

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

<article <?php echo "class=\"$DEBUG_CLASS"?> corpo_main">
<?php if ($this->countModules('mod_header')||
		$this->countModules('mod_header1') ||
		$this->countModules('mod_header2') ||
		$this->countModules('mod_header3')) : ?>
	<header <?php echo "class=\"$DEBUG_CLASS"?> header">
		<?php if ($this->countModules('mod_header')) : ?>
			<div <?php echo "class=\"$DEBUG_CLASS"?> mod_header">
				<jdoc:include type="modules" name="mod_header" style="xhtml" />
			</div>
		<?php endif; ?>
		<div class="clearer"></div>
		<?php if ($this->countModules('mod_header1')) : ?>
			<div <?php echo "class=\"$DEBUG_CLASS"?> mod_header1">
				<jdoc:include type="modules" name="mod_header1" style="xhtml" />
			</div>
		<?php endif; ?>
		<?php if ($this->countModules('mod_header2')) : ?>
			<div <?php echo "class=\"$DEBUG_CLASS"?> mod_header2">
				<jdoc:include type="modules" name="mod_header2" style="xhtml" />
			</div>
		<?php endif; ?>
		<?php if ($this->countModules('mod_header3')) : ?>
			<div <?php echo "class=\"$DEBUG_CLASS"?> mod_header3">
				<jdoc:include type="modules" name="mod_header3" style="xhtml" />
			</div>
		<?php endif; ?>
	</header>
	<div class="clearer"></div>
<?php endif; ?>

<?php if ($this->countModules('mod_main_up')||
		$this->countModules('mod_main_logo') ||
		$this->countModules('mod_sec_logo')) : ?>
	<article <?php echo "class=\"$DEBUG_CLASS"?> main_up">
		<?php if ($this->countModules('mod_main_up')) : ?>
			<div <?php echo "class=\"$DEBUG_CLASS"?> mod_main_up">
				<jdoc:include type="modules" name="mod_main_up" style="xhtml" />
			</div>
			<div class="clearer"></div>
		<?php endif; ?>
		<?php if ($this->countModules('mod_main_logo')) : ?>
			<div <?php echo "class=\"$DEBUG_CLASS"?> mod_main_logo">
				<jdoc:include type="modules" name="mod_main_logo" style="xhtml" />
			</div>
		<?php endif; ?>
		<?php if ($this->countModules('mod_sec_logo')) : ?>
			<div <?php echo "class=\"$DEBUG_CLASS"?> mod_sec_logo">
				<jdoc:include type="modules" name="mod_sec_logo" style="xhtml" />
			</div>
		<?php endif; ?>
	</article>
	<div class="clearer"></div>
<?php endif; ?>

<?php if ($this->countModules('mod_main_down')) : ?>
	<article <?php echo "class=\"$DEBUG_CLASS"?> main_down">
			<jdoc:include type="modules" name="mod_main_down" style="xhtml" />
	</article>
	<div class="clearer"></div>
<?php endif; ?>
</article>
<div class="clearer"></div>

<?php if ($this->countModules('mod_footer_up')||
		$this->countModules('mod_foot1') ||
		$this->countModules('mod_foot2') ||
		$this->countModules('mod_foot3')) : ?>
	
	<footer <?php echo "class=\"$DEBUG_CLASS"?> footer_up">
		<?php if ($this->countModules('mod_footer_up')) : ?>
		<div <?php echo "class=\"$DEBUG_CLASS"?> mod_footer_up">
			<jdoc:include type="modules" name="mod_footer_up" style="xhtml" />
		</div>
		<div class="clearer"></div>
		<?php endif; ?>
		
		<?php if ($this->countModules('mod_foot1')) : ?>
		<div <?php echo "class=\"$DEBUG_CLASS"?> mod_foot1">
			<jdoc:include type="modules" name="mod_foot1" style="xhtml" />
		</div>
		<?php endif; ?>
		<?php if ($this->countModules('mod_foot2')) : ?>
		<div <?php echo "class=\"$DEBUG_CLASS"?> mod_foot2">
			<jdoc:include type="modules" name="mod_foot2" style="xhtml" />
		</div>
		<?php endif; ?>
		<?php if ($this->countModules('mod_foot3')) : ?>
		<div <?php echo "class=\"$DEBUG_CLASS"?> mod_foot3">
			<jdoc:include type="modules" name="mod_foot3" style="xhtml" />
		</div>
		<?php endif; ?>
	</footer>
	<div class="clearer"></div>
<?php endif; ?>

<?php if ($this->countModules('mod_footer_down')||
		$this->countModules('mod_copyright') ||
		$this->countModules('mod_icons')) : ?>
	
	<footer <?php echo "class=\"$DEBUG_CLASS"?> footer_down">
		<?php if ($this->countModules('mod_footer_down')) : ?>
		<div <?php echo "class=\"$DEBUG_CLASS"?> mod_footer_down">
			<jdoc:include type="modules" name="mod_footer_down" style="xhtml" />
		</div>
		<div class="clearer"></div>
		<?php endif; ?>
		
		<?php if ($this->countModules('mod_copyright')) : ?>
		<div <?php echo "class=\"$DEBUG_CLASS"?> mod_copyright">
			<jdoc:include type="modules" name="mod_copyright" style="xhtml" />
		</div>
		<?php endif; ?>
		<?php if ($this->countModules('mod_icons')) : ?>
		<div <?php echo "class=\"$DEBUG_CLASS"?> mod_icons">
			<jdoc:include type="modules" name="mod_icons" style="xhtml" />
		</div>
		<?php endif; ?>
	</footer>
<?php endif; ?>

<!-- END FOOTER -->
</body>
</html>