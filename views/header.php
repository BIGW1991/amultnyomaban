<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML>
	<html lang="hu" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
			<meta http-equiv="Content-Language" content="hu-hu" />
			<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE11">
			<!-- [if IE]>
			<meta http-equiv="imagetoolbar" content="no" />
			<meta name="MSSmartTagsPreventParsing" content="true" />
			<meta http-equiv="X-UA-Compatible" value="IE=Edge">
			<![endif]-->
			<title><?php echo $this->Title; ?> - A múlt nyomában</title>
			<link rel="shortcut icon" href="<?php echo $this->Icon;?>"/>
			<link rel="stylesheet" href="<?php echo URL; ?>publics/css/global.css"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<meta name="author" content="Varga Máté (BIGWarriorSoftware) Szoftverfejlesztő és Web Programozó"/>
			<meta name="keywords" content="Múlt,Múlt Nyomában,Történelmi Weboldal és Fórum"/>
			<meta name="robots" content="ALL"/>
			<meta name="googlebot" content="ALL"/>
			<meta name="resource-type" content="document" />
			<meta name="dc.language" content="hu">
			<meta name="dc.source" content="<?php echo URL; ?>">
			<meta name="dc.title" content="A Múlt Nyomában">
			<meta name="dc.keywords" content="Múlt,Múlt Nyomában,Történelmi Weboldal és Fórum">
			<meta name="dc.subject" content="Történelmi Weboldal és Fórum">
			<meta name="dc.description" content="A Múlt Nyomában Történelmi Weboldal és Fórum">
			<meta property="og:title" content="A Múlt Nyomában">
			<meta property="og:type" content="document">
			<meta property="og:url" content="<?php echo URL; ?>">
			<meta property="og:image" content="<?php echo $this->CoverImage; ?>" />
			<?php echo $this->PreLoadJs;?>
		</head>
		<body class="body">
			<header class="MainHeader">
				<h1>A Múlt Nyomában</h1>
				<image src="<?php echo $this->CoverImage; ?>"/>