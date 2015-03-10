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





<nav id="topnav" class="navbar navbar-default" role="navigation">
    <div class="container">
      
      <h1><a href="http://multifolha.com.br"><img src="img/logo.png" alt="Multifolha - Consultoria em Recursos Humanos" class="img-responsive logo" /></a></h1>

      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>   
      </div> 

      <div class="collapse navbar-collapse navbar-ex1-collapse">   
         <div class="menu-secoes">
         <ul id="menu-secoes" class="nav navbar-nav">
              <li class="active"><a href="#topo">Página Inicial</a></li>              
              <li><a data-toggle="pill" href="#perguntas">Serviços</a></li>
              <li><a data-toggle="pill" href="#contato">Contato</a></li>                          
            </ul>  

        </div>
     </div><!-- /.navbar-collapse --> 

  </div>  
</nav>

 <div id="principal">

<section id="topo">
  <div class="conteudo-topo">   
    <div class="container">   
      <ul>
        <li>Terceirização de Folha de Pagamento</li>
        <li>Consultoria em Recursos Humanos</li>
        <li>Gestão de Pagamento de Empregados Domésticos</li>
        <li>Consultoria Trabalhista</li>
      </ul>    
      <div class="container-acao">
        <div class="row">
          <div class="col-xs-6"><div class="botao saiba-mais"><a href="#contato">Saiba Mais</a></div></div>
          <div class="col-xs-6"><div class="botao contato"><a href="#contato">Contato</a></div></div>
        </div>
      </div>
    </div>    
</div>
</section>



 <section id="contato">
  <div class="container">    
    <div class="row">      
      <div class="col-sm-6">
        <h2>Vantagens em Terceirizar</h2>
        <p>Ao terceirizar serviços de folha de pagamento sua empresa reduz custos e pode manter o foco na gestão do negócio, além de automatizar controle dos processos e deixar o cumprimento de atividades e prazos legais para especialistas.</p>
        <p>Entre em contato, teremos o maior prazer em atendê-lo!</p>
        <p><i class="fa fa-phone-square"></i>(41) 8422-5199</p>
        <p><i class="fa fa-envelope"></i> contato@multifolha.com.br</p>

        <div class="row"><div class="fb-like-box" data-href="https://www.facebook.com/pages/Multifolha/1610248562542790?fref=ts" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div></div>
      </div>
      <div class="col-sm-6">
        <h2>Entre em Contato</h2>

            <div class="mensagens">
              <?php if(isset($hasError)) { //If errors are found ?>
                      <div class="erro">
                        <p>Por favor, preencha todos os campos.</p>
                      </div>
                    <?php } ?>                                      
                    <?php if(isset($_SESSION['mensagem'])) { //If email is sent ?>
                        <div class="sucesso">
                            <p><strong>Obrigado por entrar em contato!</strong> <br/> Sua mensagem foi enviada com sucesso e será respondida o mais rápido possível.</p>
                        </div>
                    <?php } ?>
                    <?php unset($_SESSION['mensagem']); ?>                 
            </div>

            <form action="http://multifolha.com.br/#contato" method="post" id="contactform">            
              <div class="row">
                <div class="col-sm-6">
                  <div class="nome"><input type="text" name="contactname" id="contactname" value="" class="required" placeholder="Nome" /></div>
                </div>
                <div class="col-sm-6">
                  <div class="email"><input type="text" name="email" id="email" value="" class="required email" placeholder="Email" /></div>
                </div>
              </div>              
              <div class="mensagem"><textarea rows="5" cols="50" name="message" id="message" class="required" placeholder="Mensagem"></textarea></div>                                         
              <input type="submit" value="Enviar" name="submit" class="submit" />              
            </form>

      </div>
    </div>
  </div>
</section>

 </div>


<footer>
  <div class="container">
      <p>
      MULTIFOLHA - CONSULTORIA EM RECURSOS HUMANOS<br/>
      Telefone: (41) 8422-5199<br/>
      Email:  contato@multifolha.com.br<br/>
      Facebook: <a href="https://www.facebook.com/pages/Multifolha/1610248562542790?fref=ts">facebook.com/MultiFolha</a><br/>
      Curitiba - Paraná
      </p>
  </div>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery.nicescroll.min.js" type="text/javascript" ></script>
<script src="js/jquery.parallax-1.1.3.j" type="text/javascript" ></script>
<script src="js/jquery.localscroll-1.2.7-min.js" type="text/javascript" ></script>
<script src="js/jquery.scrollTo-1.4.6-min.js" type="text/javascript" ></script>

<script src="sites/all/themes/purpurinealguem/js/geral.js" type="text/javascript"></script>

<script>
jQuery(document).ready(function(){
  $('#topnav').localScroll({offset: {top:0}});
  $('.botao').localScroll({offset: {top:0}});
})
</script>

 <!--[if !IE]><!-->
<script src="js/jquery.inview.js"></script>
<script src="js/custom_inview.js"></script>
<!--<![endif]--> 




<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4170806-19', 'auto');
  ga('send', 'pageview');

</script>



</body>
</html>