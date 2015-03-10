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