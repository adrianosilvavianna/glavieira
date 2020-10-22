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
    <div class="bradcam_area bradcam_bg_1">
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
                                <a target="_black" href="https://sl.onerpm.com/5209095522?_ga=2.39774051.1164708396.1597097860-770625695.1590939926" class="genric-btn warning radius">Salve na sua Playlist</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- music_area end  -->
    @enddesktop

    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <h3>Novidades</h3>
                        <p> O Glavieira Studio agora tem produtos! <br> Confira aqui algumas dessas novidades que preparamos com muito carinho e gratidão aqueles que nos apoiam nessa jornada.
                    </div>
                </div>
            </div>
            <div class="row grid">
                    
                    <div class="col-xl-4 col-lg-6 grid-item cat4 col-md-6">
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
                                    <img src="img/gallery/1.png" alt="">
                            </div>
                            <div class="gallery_hover">
                                    <a class="popup-image" href="img/gallery/1.png" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                        <div class="single-gallery mb-30">
                            <div class="portfolio-img">
                                    <img src="img/gallery/7.png" alt="">
                            </div>
                            <div class="gallery_hover">
                                    <a class="popup-image" href="img/gallery/7.png" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 grid-item cat4 col-md-6">
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
                                    <img src="img/gallery/6.png" alt="">
                            </div>
                            <div class="gallery_hover">
                                    <a class="popup-image" href="img/gallery/6.png" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 grid-item cat4 col-md-6">
                        <div class="single-gallery mb-30">
                                <div class="portfolio-img">
                                        <img src="img/gallery/8.png" alt="">
                                </div>
                                <div class="gallery_hover">
                                        <a class="popup-image" href="img/gallery/8.png" class="hover_inner">
                                            <i class="ti-plus"></i>
                                        </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                        <div class="single-gallery mb-30">
                            <div class="portfolio-img">
                                    <img src="img/gallery/9.png" alt="">
                            </div>
                            <div class="gallery_hover">
                                    <a class="popup-image" href="img/gallery/9.png" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                        <div class="single-gallery mb-30">
                            <div class="portfolio-img">
                                    <img src="img/gallery/10.png" alt="">
                            </div>
                            <div class="gallery_hover">
                                    <a class="popup-image" href="img/gallery/10.png" class="hover_inner">
                                        <i class="ti-plus"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

        
    <!--/ about_area  -->

    <!-- music_area  -->
    <div class="music_area music_gallery">
        <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-65">
                            <h3 id="contribuir">
                                Quer receber esses produtos?
                            </h3>
                            
                            <p class="sample-text" style="margin: 30px">
                                Faça a sua contribuição e de brinde receba um presente especial do Glavieira!!!! <br>
                                
                                Envie seu comprovante para nós pelo Whatsapp!! Click no <i class="fa fa-whatsapp "></i>.<br>
                                Recompensas: <br>
                                <ul>
                                    <li>Para R$ 15 ou mais: Enviamos um kit com 7 adesivos</li>
                                    <li>Para R$ 30 ou mais: Enviamos uma caneca personalizada</li>
                                    <li>Para R$ 60 ou mais: Enviamos uma camiseta personalizada + kit com 7 adesivos</li>
                                    <li>Para R$ 120 ou mais: Enviamos uma camiseta + caneca personalizada + kit com 7 adesivos</li>
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
                                                <img src="img/bank/qr_code_paypal.png" alt="">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>PayPal</h4>
                                                    <ol>
                                                        <li>1 - Abra seu aplicativo do Paypal;</li>
                                                        <li>2 - Clique no ícone <i class="fa fa-qrcode"></i></li>
                                                        <li>3 - Direcione a camera para a imagem ao lado;</li>
                                                        <li>4 - Digite o valor que deseja doar e confirme a transação.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn">
                                        <div class="music_btn" >
                                            <a href="https://www.paypal.com/donate?hosted_button_id=489T8XKQ28CKU" class="boxed-btn" >Ver Dados</a>
                                        </div>
                                    </div>
                                </div>
                            @elsedesktop
                                <div class="col-xl-9 col-md-9">
                                    <div class="music_field">
                                            <div class="thumb">
                                                <img src="img/bank/qr_code_paypal.png" alt="Transferência bancária Bancos CAIXA e ITAU">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Paypal</h4>
                                                    <a href="https://www.paypal.com/donate?hosted_button_id=489T8XKQ28CKU" class="genric-btn success-border" >Ver Dados</a>
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
                                                <img src="img/bank/qr_code_mp.png" alt="">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Mercado Pago</h4>
                                                    <ol>
                                                        <li>1 - Clique no botão ao lado;</li>
                                                        <li>2 - Selecione uma das opções; </li>
                                                        <li>3 - Você será direcionado para o app do Mercado Pago;</li>
                                                    </ol>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn" >
                                        <div id="btn_verDados_MP">
                                            <button class="boxed-btn" id="dados_MP" onclick="showDataMP()" >Ver Dados</button>
                                        </div>
                                    </div>
                                </div>
                            @elsedesktop
                                <div class="col-xl-9 col-md-9">
                                    <div class="music_field">
                                            <div class="thumb">
                                                <img src="img/bank/qr_code_mp.png" alt="Transferência bancária Bancos CAIXA e ITAU">
                                            </div>
                                            <div class="audio_name">
                                                <div class="name">
                                                    <h4>Mercado Pago</h4>
                                                    <button class="genric-btn success-border" id="dados_MP" onclick="showDataMP()" >Ver Dados</button>
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
                                                    <a class="genric-btn success-border" href="https://app.picpay.com/user/giovana.luiza.carneiro" >Ver Dados</a>
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
                                            Conta: 00115694-2  <br/>
                                            Ag: 0783 <br/>
                                            Operação: 013 <br/>
                                            Nome: Adriano Silva Vianna <br/>
                                            Cpf: 071.363.305-05 <br/>
                                        </p>
                                        -------------------------
                                        <p>
                                            Banco: Itaú <br>
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
                                                            Banco: Itaú <br/>
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

    <div class="container" style="margin-top: 2%">
        <div class="row align-items-center">
            <div class="col-xl-12">
                <a href="/about">
                    <img src="img/banner/banner_about.png" style="width: 100%;height: auto;">
                </a>
            </div>
        </div>   
    </div>

    <div class="gallery_area" style="padding-bottom: 0px">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <h3>IGTV</h3>
                    </div>
                </div>
            </div>
            <div class="container row">
                <div class="col-xl-4 col-lg-6 grid-item cat1 col-md-6">
                    <div class="single-gallery mb-30">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/tv/CGn_N1ig6hL/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/tv/CGn_N1ig6hL/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Ver essa foto no Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/tv/CGn_N1ig6hL/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Nhaii Brasel!! Como é que vcs tão??? Pra esta semana preparamos só as melhores canções pra cantarolar nesse feed pra vocês!! A letra desta música do saudoso Cartola é lindíssima e aqui trouxemos nossa interpretação!! Esperamos que gostem! Ahh e se você curtir, compartilha lá nos seus stories pra mais gente conhecer o nosso trabalho &lt;3 Tamo junto &lt;3 . . . . . #cartola #precisomeencontrar #vozeviolao #samba #anos70 #mpb #choro #musicabrasileira #homestudio #plants #urbanjungle #coverbrasil</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Uma publicação compartilhada por <a href="https://www.instagram.com/glavieira_studio/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> GLAVIEIRA STUDIO | COVERS</a> (@glavieira_studio) em <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-10-22T00:01:54+00:00">21 de Out, 2020 às 5:01 PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 grid-item cat2 col-md-6">
                    <div class="single-gallery mb-30">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/tv/CGYid16nISB/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/tv/CGYid16nISB/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Ver essa foto no Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/tv/CGYid16nISB/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Nhaii amadxs!! E nesta semana anos 60, também temos clássicos nacionais da Jovem Guarda! Grande parte do nosso repertório tem influência nessa década maravilhosa e esta música é uma das que a gente ouviu muito quando era criança por causa dos nossos pais sempre estarem ouvindo Roberto Carlos, Silvinha, Erasmo entre outros mestres da JV. Amamos fazer esta interpretação e esperamos que gostem!! . . . . #splishsplash #jovemguarda #anos60 #robertocarlos #silvinha #plants #urbanjungle #vozeviolao #glavieirastudio #homestudio</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Uma publicação compartilhada por <a href="https://www.instagram.com/glavieira_studio/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> GLAVIEIRA STUDIO | COVERS</a> (@glavieira_studio) em <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-10-16T00:02:31+00:00">15 de Out, 2020 às 5:02 PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>    
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 grid-item cat3 col-md-6">
                    <div class="single-gallery mb-30">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/tv/CGV-QaWnSkb/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/tv/CGV-QaWnSkb/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Ver essa foto no Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/tv/CGV-QaWnSkb/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Nhaiii amadxs!! Como é que vocês tão? Esta semana damos início às belas canções dos anos 60 nacionais e internacionais que iremos também reproduzir na live de domingo!!! Fiquem atentos aos próximos posts!! . . . . . . #VOZEVIOLAO #CANTBUYMELOVE #BEATLES #GLAVIEIRA #HOMESTUDIO #PLANTS #URBANJUNGLE #COUPLE</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Uma publicação compartilhada por <a href="https://www.instagram.com/glavieira_studio/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> GLAVIEIRA STUDIO | COVERS</a> (@glavieira_studio) em <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-10-15T00:07:35+00:00">14 de Out, 2020 às 5:07 PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>    
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <div class="youtube_video_area" style="margin-top: 50px">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <h3 id="contribuir">
                            Últimos Vídeos
                        </h3>
                    </div>
                </div>
            </div>
    
            <div class="row no-gutters">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="img/video/1.png" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=OCSfqPZmqjk"> 
                                    <i class="fa fa-play"></i>
                                </a>     
                            </div>
    
                            <div class="hover_inner">
                                <span>Cover </span>
                                <h3>
                                    <a href="#">COMO NOSSOS PAIS 
                                    </a>
                                </h3>
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
                                <a class="popup-video" href="https://www.youtube.com/watch?v=mbq-o0DbFww"> 
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
    
                            <div class="hover_inner">
                                <span>Cover </span>
                                <h3>
                                    <a href="#">
                                        MEU JEITO DE AMAR 
                                    </a>
                                </h3>
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
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=gYDlQf9_7Og"> 
                                        <i class="fa fa-play"></i>
                                    </a>
                            </div>
    
                            <div class="hover_inner">
                                <span>Cover </span>
                                <h3><a href="#">PODE SE ACHEGAR </a></h3>
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
                                <a class="popup-video" href="https://www.youtube.com/watch?v=D6YvJTooqCY"> 
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
    
                            <div class="hover_inner">
                                <span>Cover</span>
                                <h3>
                                    <a href="#">
                                        EMOTION
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  