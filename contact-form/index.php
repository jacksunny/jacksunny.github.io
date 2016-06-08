<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = '';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = '';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>

   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
   
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="responsive" content="responsive theme with modern design" />
		<meta name="description" content="rapidweaver responsive theme with modern design" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		<!-- User defined head content such as meta tags and encoding options -->
	<title>Contact Form</title>
	
	<!-- Google's Font service -->		
	<link href='http://fonts.googleapis.com/css?family=Raleway:400|Ruluko|Open%20Sans%20Condensed:300|Bree%20Serif|?v=481458904' rel='stylesheet' type='text/css'>  
	<!-- Awesome Font - Icons -->  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	   		   
	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/lander/consolidated-3.css?v=481458904" />
		
	
	
	<!-- Style variations - these are set up in the theme.plist -->
	<!-- User defined styles -->
			
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
	  
      <script type="text/javascript" src="../rw_common/themes/lander/javascript.js?v=481458904"></script>
	 <script type="text/javascript" src="../rw_common/themes/lander/js/box.js?v=481458904"></script>
	 <script type="text/javascript" src="../rw_common/themes/lander/js/multithemes.js?v=481458904"></script> 
	 
	<!-- User defined javascript -->
	
	
	
</head>
	
<!-- This page was created with RapidWeaver from Realmac Software. http://www.realmacsoftware.com -->

<body>
<div id="container"><!-- Start container -->	 
<!--box trigger-->
<div id="drop" class="togglebox">
    <i class="fa fa-plus-square-o"></i>
  </div>
<div class="clearer"></div>
 <!--drop nav --> 
  <div id="accordion"><!-- BOX-->	 
     <div id="navcontainer_box">
     <div id="navcontainer_opacity"></div>
       <div id="navcontainer"><ul><li><a href="../" rel="" class="parent">主页</a><ul><li><a href="../sitemap/" rel="">导航</a></li></ul></li><li><a href="../styled/" rel="" class="parent">StyledText</a><ul><li><a href="../styled/markdown/" rel="">Markdown</a></li></ul></li><li><a href="../blog/" rel="">Android</a></li><li><a href="../photos/" rel="">画廊</a></li><li><a href="./" rel="" id="current">联系我</a></li><li><a href="../downloads/" rel="">资源下载</a></li></ul></div>
      </div>
    </div><!-- BOX END--> 
   <div class="clearer"></div>    
  <div id="headerbox">  
   <div id="rw-banner-image"> </div>    
    <div id="banner_grid"></div>        
      <div id="pageHeader"><!-- Start page header -->
     <div id="logo"><a href="http://rdors.com/"><img src="../rw_common/images/logo.png" width="100" height="100" alt="<i class="fa fa-envelope"></i> Contact Form"/></a></div>
	  <div id="fade_titles">	
	   <h1><i class="fa fa-envelope"></i> Contact Form</h1>
	   <h2>RD哥哥带你装逼带你飞</h2></div>
    </div><!-- End page header -->        
  <div id="breadcrumbcontainer_box">  
    <div id="opacity_background"></div>
     <div id="breadcrumbcontainer">   
        <ul><li><a href="../">主页</a>&nbsp;&nbsp;</li><li><a href="./">联系我</a>&nbsp;&nbsp;</li></ul>
      </div><!-- End breadcrumb -->
    </div><!-- End breadcrumbcontainer_box -->  
  </div><!-- End headerbox-->     
 <div id="global_width">	 	
	 <div id="contentContainer"><!-- Start main content wrapper -->
		 <div id="content"><!-- Start content -->
		   
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="RESET" />
		<input class="form-input-button" type="submit" name="submitButton" value="SEND" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
		 </div><!-- End content -->
	 </div><!-- End main content wrapper -->
  <div id="sidebarBackground"></div>
<div id="sidebarContainer"><!-- Start Sidebar wrapper -->
  <div class="sideHeader">联系方式</div><!-- Sidebar header -->
	 <div id="sidebar"><!-- Start sidebar content -->
	  <!-- sidebar content such as the blog archive links -->
	 <div class="clearer"></div>
		<p style="text-align:center;"> <i class="fa fa-envelope fa-5x"></i><br /></p><p style="text-align:left;"><br /><h4>如有疑问或建议，请通过邮箱联系我.</h4><br /><hr><br /><i class="fa fa-home fa-2x fa-fw"></i> Office  +001 123456790<br /><i class="fa fa-mobile fa-2x fa-fw"></i> Mobile +001 123456790<br /><i class="fa fa-map-marker fa-2x fa-fw "></i> <a href="#" key="Open Map">My location</a><br /><br /> <hr><br /></p><p style="text-align:center;"><a href="#"><i class="fa fa-apple  fa-3x fa-fw"></i></a>  &nbsp;  <a href="#"><i class="fa fa-instagram  fa-3x fa-fw"></i></a>  &nbsp;  <a href="#"><i class="fa fa-android fa-3x  fa-fw"></i></a>  </p><!-- sidebar content you enter in the page inspector -->		
     </div><!-- End sidebar content -->
   </div><!-- End sidebar wrapper -->
 </div><!-- global_width -->
<div class="clearer"></div>	
  <div id="footer"><!-- Start Footer -->
   <div class="footer_breadcrumbcontainer"> <ul><li><a href="../">主页</a>&nbsp;&nbsp;</li><li><a href="./">联系我</a>&nbsp;&nbsp;</li></ul></div>
	  <p>Site made with jacksunny&copy;</p>
  </div><!-- End Footer -->
</div><!-- End container -->

 <div id="up"><a href="#up"><span><i class="fa fa-angle-up"></i></span></a></div>

<!-- trigger options in multithemes.js -->
<div id="banner_parallax_on_off" class="settings"></div>
<div id="menuOpened" class="settings"></div>
<div id="banner_fade_in" class="settings"></div>

<!-- theme by http://www.multithemes.com -->
</body>
</html>
