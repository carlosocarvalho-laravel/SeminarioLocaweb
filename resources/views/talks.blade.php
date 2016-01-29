<!doctype html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">

		<title>5º Seminário Locaweb PHPSP</title>

		<meta name="description" content="5º Seminário Locaweb PHPSP">
		<meta name="author" content="PHPSP">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="mobile-web-app-capable" content="yes">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="css/reveal.css">
        <link rel="stylesheet" href="css/diego.css">
        <link rel="stylesheet" href="css/marcel.css">
        <link rel="stylesheet" href="css/draw.css">
        <link href='https://fonts.googleapis.com/css?family=Raleway:700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/theme/league.css" id="theme">

		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">
		<link rel="stylesheet" href="css/style.css">

        <!-- Printing and PDF exports -->
		@include('partials.export')

		<!--[if lt IE 9]><script src="lib/js/html5shiv.js"></script><![endif]-->
	</head>

	<body data-websockets-address="{{ $websocketsAddress }}" data-mode="{{ $mode }}">

		<div class="reveal">
            <div class="users-counter"></div>
			<div class="slides">

                @include('talks.intro')

                <!-- Title: Programação Funcional em PHP -->
                <!-- Author: Marcel Gonçalves dos Santos -->
                @include('talks.talk1')

				@include('talks.intro')

                <!-- Title: Arquitetura Orientada a Eventos -->
                <!-- Author: Edson José de Lima Junior -->
                @include('talks.talk2')

				@include('talks.intro')

                <!-- Title: React além dos WebSockets -->
                <!-- Author: Níckolas Daniel da Silva -->
                @include('talks.talk3')

				@include('talks.intro')

                <!-- Title: Autenticação com Json Web Token (JWT) -->
                <!-- Author: Ivan Rosolen -->
                @include('talks.talk4')

				@include('talks.intro')

                <!-- Title: PSR-7 e os Middlewares -->
                <!-- Author: Daniel Ferreira Gimenes -->
                @include('talks.talk5')

				@include('talks.intro')
                @include('talks.panel')
				@include('talks.intro')

                <!-- Title: Automatizando casas com PHP -->
                <!-- Author: Diego Pires -->
                @include('talks.talk6')

				@include('talks.intro')
                @include('talks.draw')

			</div>
		</div>

        <img onclick="toggleFullScreen();" src="images/fullscreen.png" style="position: fixed; bottom: 1em; right: 1em; width:2 em; z-index: 9999999;">

		<script src="js/plugins/jquery.min.js"></script>
		<script src="lib/js/head.min.js"></script>
		<script src="js/plugins/reveal.js"></script>
        <script src="js/plugins/soundjs-0.6.0.combined.js"></script>

        <!-- Reveal bootstrap -->
        @include('partials.reveal')

        <script src="js/plugins/NoSleep.min.js"></script>

        <!-- Other -->
        @include('partials.other')
	</body>
</html>
