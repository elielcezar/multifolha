<?php include "header.php" ?>

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
              <li class="active"><a href="http://multifolha.com.br">Página Inicial</a></li>              
              <li><a href="http://multifolha.com.br/servicos.php">Conheça Nossos Serviços</a></li>
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
        <li><a href="http://multifolha.com.br/servicos.php#terceirizacao-folha">Terceirização de Folha de Pagamento</a></li>
        <li><a href="http://multifolha.com.br/servicos.php#consultoria-rh">Consultoria em Recursos Humanos</a></li>
        <li><a href="http://multifolha.com.br/servicos.php#gestao-empregados-domesticos">Gestão de Pagamento de Empregados Domésticos</a></li>
        <li><a href="http://multifolha.com.br/servicos.php#consultoria-trabalhista">Consultoria Trabalhista</a></li>
      </ul>    
      <div class="container-acao">
        
          <div class="col-sm-6"><div class="botao saiba-mais"><a href="http://multifolha.com.br/servicos.php">Saiba Mais</a></div></div>
          <div class="col-sm-6"><div class="botao contato"><a href="#contato">Contato</a></div></div>
       
      </div>
    </div>    
</div>
</section>

<section id="contato">
  <div class="container">    
    <div class="row">      
      <div class="col-sm-6">
        <h2>Vantagens em Terceirizar</h2>
        <p>Queremos ser parceiros de seu escritório, assumindo a responsabilidade pelo processamento da folha de pagamento e outros serviços de departamento pessoal, garantindo a qualidade que somente uma empresa especializada pode oferecer.<p>
        <p>Ao terceirizar os serviços de RH sua empresa reduz custos e pode manter o foco na gestão do negócio, deixando o cumprimento de atividades e prazos legais para especialistas.</p>
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



 <?php include "footer.php" ?>