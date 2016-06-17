<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = '<h4>更多问题请联系RD哥哥 <i class="fa fa-envelope "></i>！</h4>';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
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
<html>
<head>
  
<link rel="stylesheet" href="resources/font-awesome/css/font-awesome.min.css?v=481458904">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width">
  <meta name="baseurl" content="http://rdors.com/">

  <title>联系我 | rd 哥哥</title>

  <link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/offroad/consolidated-0.css?v=481458904" />
		
  
  <link href="//fonts.googleapis.com/css?family=Istok+Web:400,700?v=481458904" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic?v=481458904" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="../rw_common/themes/offroad/assets/javascript/html5shiv.js"></script>
    <script src="../rw_common/themes/offroad/assets/javascript/respond.js"></script>
  <![endif]-->

  
  
  
</head>

<body>
  <div id="page" class="site">
    <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>

    <nav class="site-navigation" role="navigation">
      <div class="row">
        <div class="col-xs-12">
          <div class="site-navigation-inner">
            <ul><li><a href="../" rel="">主页</a></li><li><a href="../blog/" rel="">Blog</a></li><li><a href="../downloads/" rel="external">资源下载</a></li><li class="selected"><a href="./" rel="" class="current">联系我</a></li></ul>
          </div>
        </div>
      </div>
    </nav><!-- .site-navigation -->

    <header id="masthead" class="site-header" role="banner">
      <div class="container">
        <div class="site-branding">
          <div class="site-title">
            <a href="http://rdors.com/">rd 哥哥</a>
          </div>

          <div class="site-logo">
            <a href="http://rdors.com/" class="site-logo"><img src="../rw_common/images/logo.png" width="100" height="100" alt="rd 哥哥"/></a>
          </div>

          <div class="site-description">
            我们是穿越银河的火箭队，来和rd哥哥一起飞！<i class="fa fa-space-shuttle "></i>
          </div>
        </div><!-- .site-branding -->
      </div><!-- .container -->
    </header><!-- .site-header -->

    <div class="container container-main">
      <div class="row">
        <main id="content" class="site-content col-xs-12 col-md-9" role="main">
          <div class="site-content-inner">
            
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>title</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>message</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
          </div>
        </main>

        <aside class="site-sidebar col-xs-12 col-md-3">
          <div class="sidebar">
            
          </div>

          <div class="plugin-sidebar">
            
          </div>
        </aside>
      </div>
    </div>

    <footer id="footer" class="site-footer" role="contentinfo">
      <div class="row">
        <div class="col-xs-12">
          Site made with jackSunny&copy;
        </div>
      </div>
    </footer>
  </div>

  <div class="body-overlay"></div>

  <!-- Javascript includes -->
  <script src="../rw_common/themes/offroad/javascript.js?v=481458904"></script>
  <script type="text/javascript" src="../rw_common/themes/offroad/assets/javascript/background-blur.js?v=481458904"></script>
		<script type="text/javascript" src="../rw_common/themes/offroad/assets/javascript/sidebar-right.js?v=481458904"></script>
		
  
</body>
</html>
