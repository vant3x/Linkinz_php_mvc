<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Linkinz MVC</title>
	<link rel="stylesheet" href="<?=base_url?>assets/css/uikit-rtl.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/uikit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/css/uikit.min.css" />
	<link rel="stylesheet" href="<?=base_url?>assets/css/custom.css">
   
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>

	<nav class="bg-blue uk-navbar-container uk-margin uk-navbar white-text">
    <div class="uk-navbar-left white-text">

        <a class="uk-navbar-item uk-logo f-title white-text" href="<?=base_url?>">Linkinz</a>

        <div class="uk-navbar-item white-text">
            <div><strong><a href="<?=base_url?>" class="white-text"><i class="fas fa-home"></i> Inicio</a></strong></div>
        </div>
		
		<div class="uk-navbar-item white-text">
            <div><strong>Análisis de enlaces</strong></div>
        </div>


        <div class="uk-navbar-item">
            <form action="javascript:void(0)">
                <input class="uk-input uk-form-width-medium" type="text" placeholder="Enlaces">
                <button class="uk-button uk-button-primary white-text">Buscar</button>
            </form>
        </div>

    </div>
</nav>
