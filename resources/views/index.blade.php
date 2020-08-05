@extends('app')
<!-- slider_area_start -->
    @desktop
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center ">
                            <h3>Glavieira </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elsedesktop
    <div class="bradcam_area breadcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Glavieira</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- slider_area_end -->
    @enddesktop

    @desktop
    <!-- music_area  -->
    <div class="music_area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                                <div class="col-xl-9 col-md-9">
                                    <div class="music_field">
                                            <div class="thumb">
                                                    <img src="img/music_man/1.png" alt="">
                                                </div>
                                                <div class="audio_name">
                                                    <div class="name">
                                                        <h4>Sintonia</h4>
                                                        <p>3 Agosto, 2020</p>
                                                    </div>
                                                        <audio preload="auto" controls>
                                                            <source src="songs/sintonia.mp3">
                                                        </audio>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn">
                                        <a target="_black" href="https://sl.onerpm.com/8501569399?_ga=2.265704205.381027215.1596384096-770625695.1590939926" class="genric-btn warning radius">Salve na sua Playlist</a>
                                    </div>
                                </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- music_area end  -->
    @enddesktop

    <!-- about_area  -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                @desktop
                <div class="col-xl-5 col-md-6">
                    <div class="about_thumb">
                        <img class="img-fluid" src="img/about/about_2.png" alt="">
                    </div>
                </div>
                @enddesktop
                <div class="col-xl-7 col-md-6">
                    <div class="about_info">
                        <h3>Somos o Glavieira</h3>
                        <p>O Glavieira é um projeto que surgiu do sonho em comum de um casal que ama música e quer levar isso adiante.<br/> 
                            A proposta conta com a Voz de Giovana Pereira e harmonia de Adriano Vianna produtor e multi-instrumentista. <br/> 
                            Com influências que vão de Jazz a MPB o Glavieira traz uma experiência única repleta de uma serena sinceridade. 
                            Seus versos são coesos com sua vivência, pensamentos ou simplesmente com o que vislumbra em sua própria existência.
                        </p>
                        {{-- <div class="signature">
                            <img src="img/about/signature.png" alt="">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-xl-7 col-md-6">
                    <div class="about_info">
                        <h3>Como Começou</h3>
                        <p>
                            Nós sempre fomos apaixonados por música, e de alguma forma ela sempre se fez presente em nossa vida. <br/>
                            Antes de toda essa situação da pandemia, trabalhávamos na área de tecnologia para empresas que acabaram sendo afetadas pela crise e ambos fomos desligados de nossas funções.
                        </p>
                        <p>
                            Com tempo livre, talento e um sonho há muito tempo guardado esperando para acontecer, decidimos colocar a mão na massa e fazer tudo que estivesse ao nosso alcance para viver de música. <br/>
                            Montamos aos poucos nosso Home Studio e começamos a mostrar nosso trabalho nas <a href="https://www.instagram.com/glavieira_studio/">Redes Sociais</a>. <br/>
                            Antes da pandemia, nos apresentávamos nas noites de quinta-feira no bar underground <a href="https://www.instagram.com/92graus/" >92 Graus</a> tocando MPB, Soul, Jazz e Blues, o que nos rendeu grandes experiências, além de dividir palco com grandes músicos das noites Curitibanas.
                        </p>
                        <p>
                            A música nos inspira e nos move e queremos com todo nosso coração ir muito além e levar nossa música aos mais diversos lugares.                        
                        </p>

                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="about_thumb">
                        <img class="img-fluid" src="img/about/about_1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about_area">
        <div class="container">
 
				<h2 class="text-center">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>  
                        Por favor leia este recado  
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                </h2>
				<div class="row">
					<div class="col-lg-12">
						<blockquote class="generic-blockquote">
                            Caso você possa e queira nos ajudar com esse projeto de vida, nós disponibilizamos aqui algumas formas de contribuição VOLUNTÁRIA.<br/>
                            <i class="text-center">Qualquer valor já nos ajuda muito!!! </i> Agradecemos de coração. <br/>
                            <a href="#contribuir" class="text-center genric-btn success circle">Faça Sua Doação</a>
                        </blockquote>
					</div>
				</div>

        </div>
    </div>

    
    <!--/ about_area  -->

    <!-- youtube_video_area  
        <div class="youtube_video_area">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single_video">
                            <div class="thumb">
                                <img src="img/video/1.png" alt="">
                            </div>
                            <div class="hover_elements">
                                <div class="video">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=Ltpi2qUQXmo"> 
                                                <i class="fa fa-play"></i>
                                            </a>
                                </div>

                                <div class="hover_inner">
                                    <span>Curitiba - PR </span>
                                    <h3><a href="#">Cover - Amigo estou aqui</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single_video">
                            <div class="thumb">
                                <img src="img/video/2.png" alt="">
                            </div>
                            <div class="hover_elements">
                                <div class="video">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=AAWbvomTyyo"> 
                                                <i class="fa fa-play"></i>
                                            </a>
                                </div>

                                <div class="hover_inner">
                                    <span>Curitiba - PR </span>
                                    <h3><a href="#">Cover - Say a litle pray for you</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single_video">
                            <div class="thumb">
                                <img src="img/video/3.png" alt="">
                            </div>
                            <div class="hover_elements">
                                <div class="video">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=1QZepOIT2OU"> 
                                                <i class="fa fa-play"></i>
                                            </a>
                                </div>

                                <div class="hover_inner">
                                    <span>Curitiba - PR </span>
                                    <h3><a href="#">Cover - Respect </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single_video">
                            <div class="thumb">
                                <img src="img/video/4.png" alt="">
                            </div>
                            <div class="hover_elements">
                                <div class="video">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=iDKhrE2BTgM"> 
                                                <i class="fa fa-play"></i>
                                            </a>
                                </div>

                                <div class="hover_inner">
                                    <span>Curitiba - PR</span>
                                    <h3><a href="#">Cover - Feeling Good</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    / youtube_video_area  -->

    <!-- music_area  -->
    <div class="music_area music_gallery">
        <div class="container">
                <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title text-center mb-65">
                                <h3 id="contribuir">
                                    Faça sua doação
                                </h3>
                                
                                <p class="sample-text" style="margin: 30px">
                                    Caso queira realizar o pagamento via Boleto Bancário, entre em <a href="/contact">Contato</a> com a gente o valor da doação.    
                                </p>
                                
                            </div>
                        </div>
                    </div>
            <div class="row align-items-center justify-content-center mb-20">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                            @desktop
                                <div class="col-xl-9 col-md-9">
                                    <div class="music_field">
                                            <div class="thumb">
                                                    <img src="img/bank/qr_code_picpay.png" alt="qr code pickpay">
                                                </div>
                                                <div class="audio_name">
                                                    <div class="name">
                                                        <h4>PicPay</h4>
                                                            <ol>
                                                                <li>1 - Abra seu aplicativo do PicPay;</li>
                                                                <li>2 - No canto superior esquerdo clique no ícone <i class="fa fa-qrcode"></i></li>
                                                                <li>3 - Direcione a camera para a imagem ao lado;</li>
                                                                <li>4 - Digite o valor que deseja doar e confirme a transação.</li>
                                                            </ol>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn">
                                        <a href="https://app.picpay.com/user/giovana.luiza.carneiro" target="_blanck" class="boxed-btn">Ver Dados</a>
                                    </div>
                                </div>

                            @elsedesktop

                            <div class="col-xl-9 col-md-9">
                                <div class="music_field">
                                        <div class="thumb">
                                                <img src="img/bank/qr_code_picpay.png" alt="qr code pickpay">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Picpay</h4>
                                                    <a class="genric-btn success-border" href="https://app.picpay.com/user/giovana.luiza.carneiro" class="boxed-btn">Ver Dados</a>
                                                </div>
                                            </div>
                                </div>
                            </div>

                            @enddesktop
                    </div>
                </div>

            </div>
            <div class="row align-items-center justify-content-center mb-20">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                        @desktop
                            <div class="col-xl-9 col-md-9">
                                <div class="music_field">
                                        <div class="thumb">
                                                <img src="img/bank/qr_code_nubank.png" alt="qr code pickpay">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Nubank</h4>
                                                    <ol>
                                                        <li>1 - Abra seu aplicativo do Nubank;</li>
                                                        <li>2 - Clique na opção "Transferir";</li>
                                                        <li>3 - No canto superior direito clique no ícone <i class="fa fa-qrcode"></i>
                                                        <li>4 - Direcione a camera para a imagem ao lado;</li>
                                                        <li>5 - Digite o valor que deseja doar e confirme a transação.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-3">
                                <div class="music_btn" onclick="showDataNu()">
                                    <div id="btn_verDados_Nu">
                                        <button class="boxed-btn" id="dados_nubank" >Ver Dados</button>
                                    </div>
                                    <div id="dados_Nu">
                                        <p>
                                            Banco: 260 - Nu Pagamentos <br/>
                                            Conta: 5090357-8 <br/>
                                            Ag: 0001 <br/>
                                            Nome: Adriano Silva Vianna <br/>
                                            Cpf: 071.363.305-05 <br/>
                                        </p>
                                    </div>        
                                </div>
                            </div>
                        @elsedesktop

                            <div class="col-xl-9 col-md-9">
                                <div class="music_field">
                                        <div class="thumb">
                                                <img src="img/bank/qr_code_nubank.png" alt="qr code pickpay">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Nubank</h4>
                                                    
                                                    <div onclick="showDataNu()">
                                                        <div id="btn_verDados_Nu">
                                                            <button class="genric-btn success-border" id="dados_nubank" >Ver Dados</button>
                                                        </div>
                                                        <div id="dados_Nu">
                                                            <p>
                                                                Banco: 260 - Nu Pagamentos <br/>
                                                                Conta: 5090357-8 <br/>
                                                                Ag: 0001 <br/>
                                                                Nome: Adriano Silva Vianna <br/>
                                                                Cpf: 071.363.305-05 <br/>
                                                            </p>
                                                        </div>        
                                                    </div>

                                                </div>
                                            </div>
                                </div>
                            </div>

                        @enddesktop
                    </div>
                </div>

            </div>
            <div class="row align-items-center justify-content-center mb-20">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                        @desktop
                            <div class="col-xl-9 col-md-9">
                                <div class="music_field">
                                        <div class="thumb">
                                            <img src="img/bank/itau_caixa.png" alt="">
                                        </div>
                                        <div class="audio_name">
                                            <div class="name">
                                                <h4>Transferência Bancária</h4>
                                                <ol>
                                                    <li>
                                                        Clique no botão "Ver Dados" para ter acesso às informações para transferência TED.
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-3">
                                <div class="music_btn" onclick="showDataIC()">
                                    <div id="btn_verDados_IC">
                                        <button class="boxed-btn" id="btn_dados_IC" >Ver Dados</button>
                                    </div>
                                    <div id="dados_IC">
                                        <p>
                                            Banco: Caixa Econômica Federal <br/>
                                            Conta: 00115694  <br/>
                                            Ag: 0783 <br/>
                                            Operação: 013 <br/>
                                            Nome: Adriano Silva Vianna <br/>
                                            Cpf: 071.363.305-05 <br/>
                                        </p>
                                        -------------------------
                                        <p>
                                            Banco: Itaú
                                            Conta: 33060-8 <br/>
                                            Ag: 8612 <br/>
                                            Nome: Giovana Luiza Carneiro Pereira <br/>
                                            Cpf: 097.812.239-95 <br/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @elsedesktop
                            <div class="col-xl-9 col-md-9">
                                <div class="music_field">
                                        <div class="thumb">
                                            <img src="img/bank/itau_caixa.png" alt="Transferência bancária Bancos CAIXA e ITAU">
                                        </div>
                                        <div class="audio_name">
                                            <div class="name">
                                                <h4>TED</h4>
                                                <div onclick="showDataIC()">
                                                    <div id="btn_verDados_IC">
                                                        <button class="genric-btn success-border" id="btn_dados_IC" >Ver Dados</button>
                                                    </div>
                                                    <div id="dados_IC">
                                                        <p>
                                                            Banco: Caixa Econômica Federal <br/>
                                                            Conta: 00115694  <br/>
                                                            Ag: 0783 <br/>
                                                            Operação: 013 <br/>
                                                            Nome: Adriano Silva Vianna <br/>
                                                            Cpf: 071.363.305-05 <br/>
                                                        </p>
                                                        -------------------------
                                                        <p>
                                                            Banco: Itaú
                                                            Conta: 33060-8 <br/>
                                                            Ag: 8612 <br/>
                                                            Nome: Giovana Luiza Carneiro Pereira <br/>
                                                            Cpf: 097.812.239-95 <br/>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        @enddesktop
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- music_area end  -->
    @desktop
    <!-- gallery -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <h3>Galeria</h3>
                    </div>
                </div>
            </div>
            <div class="row grid">
                    <div class="col-xl-5 col-lg-5 grid-item cat1 col-md-6">
                        <div class="single-gallery mb-30">
                                <div class="portfolio-img">
                                        <img src="img/gallery/1.png" alt="">
                                </div>
                                <div class="gallery_hover">
                                    <a  class="popup-image"  href="img/gallery/1.png" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-7 grid-item cat3 cat4 col-md-6">
                        <div class="single-gallery mb-30">
                                <div class="portfolio-img">
                                        <img src="img/gallery/2.png" alt="">
                                </div>
                                <div class="gallery_hover">
                                        <a class="popup-image" href="img/gallery/2.png" class="hover_inner">
                                            <i class="ti-plus"></i>
                                        </a>
                                </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                        <div class="single-gallery mb-30">
                            <div class="portfolio-img">
                                    <img src="img/gallery/5.png" alt="">
                            </div>
                            <div class="gallery_hover">
                                    <a class="popup-image" href="img/gallery/5.png" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                        <div class="single-gallery mb-30">
                            <div class="portfolio-img">
                                    <img src="img/gallery/4.png" alt="">
                            </div>
                            <div class="gallery_hover">
                                    <a class="popup-image" href="img/gallery/4.png" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 grid-item cat4 col-md-6">
                        <div class="single-gallery mb-30">
                                <div class="portfolio-img">
                                        <img src="img/gallery/3.png" alt="">
                                </div>
                                <div class="gallery_hover">
                                        <a class="popup-image" href="img/gallery/3.png" class="hover_inner">
                                            <i class="ti-plus"></i>
                                        </a>
                                </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!--/ gallery -->
    @enddesktop
