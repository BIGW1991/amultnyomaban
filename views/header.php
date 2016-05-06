<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML>
	<html lang="hu">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
			<title><?php echo $this->Title; ?> - A múlt nyomában</title>
			<link rel="shortcut icon" href="<?php echo $this->Icon;?>"/>
			<link rel="stylesheet" href="<?php echo URL; ?>publics/css/global.css"/>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<meta name="author" content="Varga Máté (BIGWarriorSoftware) Szoftverfejlesztő és Web Programozó"/>
			<meta name="keywords" content="Múlt,Múlt Nyomában,Történelmi Weboldal és Fórum"/>
			<meta name="robots" content="index,follow"/>
			<meta name="dc.language" content="hu">
			<meta name="dc.source" content="http://www.amultnyomaban.hu/">
			<meta name="dc.title" content="A Múlt Nyomában">
			<meta name="dc.keywords" content="Múlt,Múlt Nyomában,Történelmi Weboldal és Fórum">
			<meta name="dc.subject" content="Történelmi Weboldal és Fórum">
			<meta name="dc.description" content="A Múlt Nyomában Történelmi Weboldal és Fórum">
		</head>
		<body class="body">
		<h1>A Múlt Nyomában</h1>
		<image src="<?php echo $this->CoverImage; ?>"/>