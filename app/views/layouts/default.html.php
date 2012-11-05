<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2012, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<title><?php echo $this->title(); ?></title>
	<?php echo $this->html->style(array('/bootstrap/docs/assets/css/bootstrap')); ?>
	<?php echo $this->html->style(array('/bootstrap/docs/assets/css/bootstrap-responsive')); ?>	
	<?php echo $this->html->style(array('/bootstrap/docs/assets/css/docs')); ?>	
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>

	<?php
	$this->scripts('<script src="/bootstrap/docs/assets/js/jquery.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/application.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap-affix.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap-alert.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap-button.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap-carousel.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap-collapse.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap-dropdown.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap-modal.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap-popover.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap-scrollspy.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap-tab.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap-tooltip.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap-transition.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap-typeahead.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap.js"></script>'); 
	$this->scripts('<script src="/bootstrap/docs/assets/js/bootstrap.min.js"></script>'); 
	$this->scripts('<script src="/ckeditor/ckeditor.js"></script>');
	?>   		
	<?php echo $this->scripts(); ?>
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
	<div id="container" class="container">
		<div id="header">
			<?	echo $this->_render('element', 'header');?>
		</div>
		<div id="content" class="container" >
			<textarea name="Content" class="ckeditor" id="Content"></textarea>			
			<?php echo $this->content(); ?>
		</div>
	</div>

</body>
</html>