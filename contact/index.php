<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send me an email.<br /><br /><span style="font:13px HelveticaNeue; ">3-D Position Sensing </span><span style="font:13px AppleSDGothicNeo-Regular; ">기술을</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">이용한</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">실시간</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">방사선</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">이미징</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">장치인</span><span style="font:13px HelveticaNeue; "> POLARIS Series </span><span style="font:13px AppleSDGothicNeo-Regular; ">검출기는</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">우수한</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">에너지</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">분해능과</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">자동화된</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">스펙트럼</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">분석으로</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">방사선의</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">종류와</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">세기를</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">정확하게</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">판별하는</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">최첨단의</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">상온반도체</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">방사선</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">검출기입니다</span><span style="font:13px HelveticaNeue; ">. </span><span style="font:13px AppleSDGothicNeo-Regular; ">볼</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">수</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">없는</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">감마선</span><span style="font:13px HelveticaNeue; "> (invisible gamma-ray)</span><span style="font:13px AppleSDGothicNeo-Regular; ">을</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">실시간으로</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">시각화하여</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">방사선</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">작업자가</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">방사선</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">위험에</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">효과적으로</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">대처할</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">수</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">있도록</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">직관적인</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">정보를</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">제공합니다</span><span style="font:13px HelveticaNeue; ">.<br /><br /><hr></span>';	
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
<html lang="en">
<head>
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Contact | CGiTEC">
	<meta name="twitter:url" content="https://cgitec.com/contact/index.php">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="CGiTEC">
	<meta property="og:title" content="Contact | CGiTEC">
	<meta property="og:url" content="https://cgitec.com/contact/index.php">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width">
  <meta name="baseurl" content="https://cgitec.com/">

  <title>Contact | CGiTEC</title>

  <link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/offroad/consolidated.css?rwcache=628652972" />
		
  

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
            <ul><li><a href="../home/" rel="">Home</a></li><li><a href="../about/" rel="">About</a></li><li><a href="../" rel="" class="parent">Products</a><ul><li><a href="../page-3/" rel="">Team</a></li><li><a href="../page-2/" rel="">Link</a></li></ul></li><li class="selected"><a href="./" rel="" class="current">Contact</a></li><li><a href="../support/" rel="">Support</a></li></ul>
          </div>
        </div>
      </div>
    </nav><!-- .site-navigation -->

    <header id="masthead" class="site-header" role="banner">
      <div class="container">
        <div class="site-branding">
          <div class="site-title">
            <a href="https://cgitec.com/">CGiTEC</a>
          </div>

          <div class="site-logo">
            <a href="https://cgitec.com/" class="site-logo"></a>
          </div>

          <div class="site-description">
            Changing the world, one site at a time&hellip;
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
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Interesting Devices</label> *<br />
		<input <?php echo check('element3', 'radio', 'A 시리즈'); ?> type="radio" name="form[element3]" value="A 시리즈" />
			<label>A 시리즈</label><br />

		<input <?php echo check('element3', 'radio', 'H  시리즈'); ?> type="radio" name="form[element3]" value="H  시리즈" />
			<label>H  시리즈</label><br />

		<input <?php echo check('element3', 'radio', 'M 시리즈'); ?> type="radio" name="form[element3]" value="M 시리즈" />
			<label>M 시리즈</label><br />

		<input <?php echo check('element3', 'radio', 'S 시리즈'); ?> type="radio" name="form[element3]" value="S 시리즈" />
			<label>S 시리즈</label><br />

		<input <?php echo check('element3', 'radio', 'P 시리즈'); ?> type="radio" name="form[element3]" value="P 시리즈" />
			<label>P 시리즈</label><br />

<br />
		<label>Message</label> *<br />
		<textarea class="form-input-field" name="form[element4]" rows="8" cols="38"><?php echo check('element4'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		
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
            <img class="imageStyle" alt="H100" src="files/h100.jpg" width="156" height="157" /><br /><br /><br /><span style="font:13px HelveticaNeue; ">3-D Position Sensing </span><span style="font:13px AppleSDGothicNeo-Regular; ">기술을</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">이용한</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">실시간</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">방사선</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">이미징</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">장치인</span><span style="font:13px HelveticaNeue; "> POLARIS Series </span><span style="font:13px AppleSDGothicNeo-Regular; ">검출기는</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">우수한</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">에너지</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">분해능과</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">자동화된</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">스펙트럼</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">분석으로</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">방사선의</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">종류와</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">세기를</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">정확하게</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">판별하는</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">최첨단의</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">상온반도체</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">방사선</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">검출기입니다</span><span style="font:13px HelveticaNeue; ">. </span><span style="font:13px AppleSDGothicNeo-Regular; ">볼</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">수</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">없는</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">감마선</span><span style="font:13px HelveticaNeue; "> (invisible gamma-ray)</span><span style="font:13px AppleSDGothicNeo-Regular; ">을</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">실시간으로</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">시각화하여</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">방사선</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">작업자가</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">방사선</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">위험에</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">효과적으로</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">대처할</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">수</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">있도록</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">직관적인</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">정보를</span><span style="font:13px HelveticaNeue; "> </span><span style="font:13px AppleSDGothicNeo-Regular; ">제공합니다</span><span style="font:13px HelveticaNeue; ">.</span>
          </div>

          <div class="plugin-sidebar">
            
          </div>
        </aside>
      </div>
    </div>

    <footer id="footer" class="site-footer" role="contentinfo">
      <div class="row">
        <div class="col-xs-12">
          Copyrights &copy; 2014 CGITEC <br>씨지텍, 34187 대전광역시 유성구 계룡로141번길 29-25, (TEL: +82-42-825-1838) <br>CGITEC, 29-25, Gyeryong-ro 141beon-gil, Yuseong-gu, Daejeon 34187, Korea <a href="#" id="rw_email_contact">Contact Me</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":cg";var _rwObsfuscatedHref3 = "ite";var _rwObsfuscatedHref4 = "c.i";var _rwObsfuscatedHref5 = "nfo";var _rwObsfuscatedHref6 = "@gm";var _rwObsfuscatedHref7 = "ail";var _rwObsfuscatedHref8 = ".co";var _rwObsfuscatedHref9 = "m";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9; document.getElementById("rw_email_contact").href = _rwObsfuscatedHref;</script>
        </div>
      </div>
    </footer>
  </div>

  <div class="body-overlay"></div>

  <!-- Javascript includes -->
  <script src="../rw_common/themes/offroad/javascript.js?rwcache=628652972"></script>
  <script src="../rw_common/themes/offroad/assets/javascript/background-blur.js?rwcache=628652972"></script>
		<script src="../rw_common/themes/offroad/assets/javascript/sidebar-right.js?rwcache=628652972"></script>
		
  
</body>
</html>
