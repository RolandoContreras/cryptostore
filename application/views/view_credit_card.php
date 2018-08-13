<!DOCTYPE html>
<html lang="en">
<!--START HEAD-->
<?php $this->load->view("head");?>
<!--END HEAD-->
<body>
<div class="super_container">
	<!-- Header -->
	<header class="header d-flex flex-row justify-content-end align-items-center trans_200">
		<!-- Logo -->
		<div class="logo mr-auto">
                    <img src="<?php echo site_url().'static/page_front/images/logo/logo.png';?>" alt="logo" width="130">
		</div>
		<!-- Navigation -->
                <?php $this->load->view("nav2");?>
		<!-- Hamburger -->
		<div class="hamburger_container bez_1">
                    <i class="fa fa-bars trans_200"></i>
		</div>
	</header>
	<!-- Menu -->
	<div class="menu_container">
		<div class="menu menu_mm text-right">
			<div class="menu_close"><i class="fa fa-times-circle trans_200"></i></div>
                        <?php 
                            //INIT VAR
                            $active_home = "";
                            $active_buy = "";
                            $active_login = "";
                            $active_faq = "";
                            $active_contact = "";

                            $url = explode("/",uri_string());
                            $nav = $url[0];
                            switch ($nav) {
                                case 'home':
                                    $active_home = "active";
                                    break;
                                case 'buy':
                                    $active_buy = "active";
                                    break;
                                case 'login':
                                    $active_login = "active";
                                    break;
                                case 'faq':
                                    $active_faq = "active";
                                    break;
                                case 'contact':
                                    $active_contact = "active";
                                    break;
                                default:
                                    $active_home = "active";
                                    break;
                            }        
                            ?>
                           <ul>
                                <li class="<?php echo $active_home;?>"><a href="<?php echo site_url().'home'?>">Inicio</a></li>
                                <li><a href="<?php echo site_url().'home/#features'?>" >Características</a></li>
                                <li class="<?php echo $active_buy;?>"><a href="<?php echo site_url().'buy';?>">¡Comprar!</a></li>
                                <li class="<?php echo $active_contact;?>"><a href="<?php echo site_url().'home/#contact';?>">Contacto</a></li>
                                <li class="<?php echo $active_login;?>"><a href="<?php echo site_url().'login';?>">Login</a></li>
                                <li class="<?php echo $active_faq;?>"><a href="<?php echo site_url().'faq';?>">FAQ</a></li>
                                <li>
                                    <a style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="espanol" width="40"/></a>
                                    <a style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/en.png';?>" alt="espanol" width="40"/></a>
                                </li>
                            </ul>
		</div>
	</div>
	<!-- Home -->
        <!--CRIPTOCURRENCY-->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center margin-bottom-30">
                        <div class="icon_box_title">
                            <h1 class="title-currency-contact margin-top100">Detalles de su Pago</h1>
                        </div>
                    </div>
                </div>
                <div class="row panel-bitcoinDinero">
                          <div class="modal__featured">
                            <button type="button" class="button--transparent button--close">
                              <svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                <g><path fill="#ffffff" d="M1.293,15.293L11,5.586L12.414,7l-8,8H31v2H4.414l8,8L11,26.414l-9.707-9.707 C0.902,16.316,0.902,15.684,1.293,15.293z"></path> </g></svg>
                                <span class="visuallyhidden"><a >Return to Product Page</a></span>
                            </button>
                            <div class="modal__circle"></div>
                            <img src="<?php echo site_url().'static/page_front/images/pagos_tarjeta.png';?>" class="modal__product" />
                          </div>
                          <div class="modal__content">
                              <form action="<?php echo site_url().'buy/charge_payment';?>" method="post" id="payment-form">
                              <ul class="form-list">
                                <li class="form-list__row">
                                  <label>Nombre</label>
                                  
                                  <div class="form-group has-feedback">
                                        <div class="input-group bitcoinDineroDatos">
                                            <span class="input-group-addon">
                                                <span id="btcwallet-faq" class="fa fa-user-circle fa-2x"></span>
                                            </span>
                                            <input disabled="" value="<?php echo $_SESSION['buy']['name']." ".$_SESSION['buy']['last_name'];?>" required="" class="form-control padding-right-27" id="wallet" name="wallet" type="text">
                                        </div>
                                    </div>
                                </li>
                                <li class="form-list__row">
                                  <label>Número de Tarjeta</label>
                                  <div id="input--cc" class="creditcard-icon">
                                      <div class="form-group has-feedback">
                                        <div class="input-group bitcoinDineroDatos">
                                            <span class="input-group-addon">
                                                <span id="btcwallet-faq" class="fa fa-credit-card fa-2x"></span>
                                            </span>
                                            <input required="" class="form-control padding-right-27" id="card_number" name="card_number" type="text">
                                        </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="form-list__row form-list__row--inline">
                                  <div>
                                    <label>Fecha de Expiración</label>
                                    <div class="form-list__input-inline">
                                        <div class="form-group has-feedback">
                                            <div class="input-group bitcoinDineroDatos">
                                                <span class="input-group-addon">
                                                    <span id="btcwallet-faq" class="fa fa-calendar-alt fa-2x"></span>
                                                </span>
                                                <input required="" class="form-control padding-right-27" id="cc_month" maxlength="2" name="cc_month" placeholder="MM" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <div class="input-group bitcoinDineroDatos">
                                                <span class="input-group-addon">
                                                    <span id="btcwallet-faq" class="fa fa-calendar-alt fa-2x"></span>
                                                </span>
                                                <input required="" class="form-control padding-right-27" maxlength="4" id="cc_year" name="cc_year" placeholder="AAAA" type="text">
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div>
                                    <label>CVC</label>
                                      <div class="form-group has-feedback">
                                            <div class="input-group bitcoinDineroDatos">
                                                <span class="input-group-addon">
                                                    <span id="btcwallet-faq" class="fa fa-question-circle fa-2x"></span>
                                                </span>
                                                <input onkeyup="fade_wallet(this.value);" required="" class="form-control padding-right-27" id="wallet" name="wallet" placeholder="123" type="text">
                                                <input type="hidden" name="total" id="total" value="<?php echo format_number_2decimal($total);?>"/>    
                                            </div>
                                        </div>
                                  </div>
                                </li>
                                <li class="form-list__row form-list__row--agree"></li>
                                <li>
                                    <button type="submit" name="btnsubmit" class="button">Pagar Ahora</button>
                                </li>
                              </ul>
                                  <?php 
                                  if(isset($message)){echo $message;}
                                  ?>
                            </form>
                      </div>
                </div>
        </header>
<script>
        // Create a Stripe client.
            var stripe = Stripe('pk_test_o0c1SIapQ0qxBEPnpdbESNtl');
            // Create an instance of Elements.
            var elements = stripe.elements();
            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
              base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                  color: '#aab7c4'
                }
              },
              invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
              }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();

              stripe.createToken(card).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error.
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;
                } else {
                  // Send the token to your server.
                  stripeTokenHandler(result.token);
                }
              });
            });
            
            
            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
            
</script>
        
        
        <!--END CRYPTOCURRENCY-->
	<!-- Footer -->
	<?php $this->load->view("footer");?>
        <!--END FOOTER-->
    </div>
<!--//GET API STRIPE-->            
<script src="https://js.stripe.com/v3/"></script>            
<!--//GET CSS STYLE CREDIR CARD-->            
<link rel="stylesheet" href="<?php echo site_url().'static/page_front/css/stripe.css';?>">   
<script src="<?php echo site_url().'static/page_front/js/bank.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/jquery-3.2.1.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/popper.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/bootstrap.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/TweenMax.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/TimelineMax.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/ScrollMagic.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/animation.gsap.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/ScrollToPlugin.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/slick.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/owl.carousel.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/jquery.scrollTo.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/easing.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/custom.js';?>"></script>
</body>
</html>