@extends('app')

    <!-- bradcam_area  -->
    <div class="bradcam_area breadcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>contato</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      {{-- <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
        
      </div> --}}

      <div class="row">
        <div class="container">
           
				<h3 class="mb-15 text-center">Entre em contato conosco!</h3>
				<div class="row">
					<div class="col-lg-12">
						<blockquote class="generic-blockquote">
                No momento estamos em <b>quarentena</b>, mas caso queira agendar ou solicitar nossos serviços ficaremos muito honrados!<br/>
                Para aulas particulares ou para agendar eventos: casamento, aniversário, comemorações em geral, preencha o formulário abaixo para entrarmos em contato:             
            </blockquote>
					</div>
				</div>
			</div>
    </div>

    <div class="section-top-border">

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Deixe sua mensagem:</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="/contact" method="post" id="contactForm" >

          <input type="text" name="_token" id="_token" value="{{ csrf_token() }}" hidden>

            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escreva sua mensagem'" placeholder = 'Escreva sua menssagem'></textarea>
                </div>
              </div>
              <div class="col-sm-6" style="margin-top: 20px;">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Qual seu nome?'" placeholder = 'Qual seu nome?'>
                </div>
              </div>
              <div class="col-sm-6" style="margin-top: 20px;">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" placeholder = 'E-mail'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Assunto'" placeholder = 'Assunto'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="number" id="number" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu telefone'" placeholder = 'Seu telefone'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4 boxed-btn">Enviar</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Almirante Tamandaré - PR</h3>
              <p>Rua Victório Prosdócimo - 427</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+55 (41) 995558643</h3>
              <p>Segunda a Sexta - 9:00 am - 21:00 pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>glavieirastudio@gmail.com</h3>
              <p>Envie seu email e retornaremos o contato o quanto antes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

    