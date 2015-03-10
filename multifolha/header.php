<?php session_start();?>
<?php
//If the form is submitted
if(isset($_POST['submit'])) {
    //Check to make sure that the name field is not empty
    if(trim($_POST['contactname']) == '') {
        $hasError = true;
    } else {
        $name = trim($_POST['contactname']);
    }   
    //Check to make sure sure that a valid email address is submitted
    if(trim($_POST['email']) == '')  {
        $hasError = true;
    } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
    //Check to make sure comments were entered
    if(trim($_POST['message']) == '') {
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['message']));
        } else {
            $comments = trim($_POST['message']);
        }
    }
    //If there is no error, send the email
    if(!isset($hasError)) {        
        $emailTo = "elielcezar@gmail.com";
        $subject = "[Multifolha] - Contato Pelo Site";       
        $body = "Nome: $name \nEmail: $email \n\nMensagem:\n $comments";
        $headers = "From: ".$name." <".$emailTo.">" . "\r\n" . "Reply-To:" . $email;
        mail($emailTo, $subject, $body, $headers);
        $emailSent = true; 
        $_SESSION['mensagem']="ok";            
    }   
}
?>
<!DOCTYPE html>
<html>
	<head>
 
<title>Multifolha - Consultoria em Recursos Humanos</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta property="og:title" content="Multifolha - Consultoria em Recursos Humanos"/>
<meta property="og:description" content="Terceirização de Folha de Pagamento, Consultoria em Recursos Humanos, Gestão de Pagamento de Empregados Domésticos e Consultoria Trabalhista."/>
<meta property="og:image" content="http://multifolha.com.br/img/imagem-fb.png"/>    
<meta property="og:type" content="website" /> 
<link rel="image_src" href="http://multifolha.com.br/img/imagem-fb.png" />


<meta name="robots" content="all" />
<meta name="description" content="Terceirização de Folha de Pagamento, Consultoria em Recursos Humanos, Gestão de Pagamento de Empregados Domésticos e Consultoria Trabalhista." />
<meta name="keywords" content="terceirização, folha de pagamento, consultoria, recursos humanos, RH, empregados domésticos, trabalhista, gestão de pessoas" />


<link href="css/bootstrap-theme.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="css/animate.css" rel="stylesheet">        
<link href="css/geral.css" rel="stylesheet">        
<link href="css/home.css" rel="stylesheet">

<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />

<!--[if lt IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->
<!-- Le fav and touch icons -->

<!-- GOOGLE FONT-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,600,700,300' rel='stylesheet' type='text/css'>
<!-- /GOOGLE FONT-->

</head>

<body data-spy="scroll" data-target=".navbar">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=1392679577714408&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


