<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 6/10/2020
 * Time: 01:33
 */
/* Template Name: Front-page Template */

get_header() ?>

    <section class="main">
        <div class="slick-carousel">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/resources/rsz_slider-1-1.jpg" alt="">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/resources/slider-1-2.jpg" alt="">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/resources/slider-1-3.jpg" alt="">
        </div>
        <section class="about-us pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p style="max-width:650px;margin:0 auto 30px auto;">Va propunem in Bucuresti, o varianta de
                            cazare economica si de
                            calitate in
                            acelasi timp.</p>
                    </div>
                    <div class="col-6">
                        <p style="max-width:650px;margin:0 auto;">Am imbinat un confort hotelier de 3 stele cu atmosfera
                            unei pensiuni! Curte,
                            piscina, 7 terase, pomi fructiferi, balansoar, un petec de gazon si cat mai multe flori
                            compun
                            un ambient relaxant dupa o zi de alergare cu treburi prin Bucuresti.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="facilities pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mt-2 mb-4">
                        <h5 class="text-uppercase facilities-title">Facilități pensiune</h5>
                        <div class="divider"></div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="facilities-badge">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/wifi.png"
                                 class="img-fluid"/>
                            <span>Wi-Fi gratuit</span>
                        </div>
                        <div class="facilities-badge mt-5">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/parking.png"
                                 class="img-fluid"/>
                            <span>Parcare gratuită</span>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="facilities-badge">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/selfcheck-in.png"
                                 class="img-fluid"/>
                            <span>Self check-in</span>
                        </div>
                        <div class="facilities-badge mt-5">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/terrace.png"
                                 class="img-fluid"/>
                            <span>Terasă</span>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="facilities-badge">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/pool.png"
                                 class="img-fluid"/>
                            <span>Piscină</span>
                        </div>
                        <div class="facilities-badge mt-5">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/lounge.png"
                                 class="img-fluid"/>
                            <span>Lounge în aer liber</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="accepted-payment pt-5 pb-5">
            <div class="container">
                <div class="row accepted-payment-top m-auto">
                    <div class="col-12 text-center mt-2 mb-5">
                        <h5 class="text-uppercase">Acceptăm toate tipurile de <strong>tichete de vacanță</strong> și <strong>carduri de vacanță</strong></h5>
                        <div class="divider"></div>
                    </div>
                    <div class="col-4 text-center">
                        <img class="img-fluid mb-2"
                             src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/edenred-tichet-89.png" alt=""/>
                        <p class="payment-type-title"><strong>Edenred</strong></p>
                        <p class="payment-type-subtitle">Voucher de vacanță</p>
                    </div>
                    <div class="col-4 text-center">
                        <img class="img-fluid mb-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/sodexo-tichet-89.png"
                             alt=""/>
                        <p class="payment-type-title"><strong>Sodexo</strong></p>
                        <p class="payment-type-subtitle">Voucher de vacanță</p>
                    </div>
                    <div class="col-4 text-center">
                        <img class="img-fluid mb-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/up-tichet-89.png"
                             alt=""/>
                        <p class="payment-type-title"><strong>Up</strong></p>
                        <p class="payment-type-subtitle">Voucher de vacanță</p>
                    </div>
                </div>
                <div class="row accepted-payment-bottom pt-3 pb-3 m-auto">
                    <div class="col-4 text-center">
                        <img class="img-fluid payment-card mb-2"
                             src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/edenred-card-65.png" alt=""/>
                        <p class="payment-type-title"><strong>Edenred</strong></p>
                        <p class="payment-type-subtitle">Card de vacanță</p>
                    </div>
                    <div class="col-4 text-center">
                        <img class="img-fluid payment-card mb-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/sodexo-card-65.png"
                             alt=""/>
                        <p class="payment-type-title"><strong>Sodexo</strong></p>
                        <p class="payment-type-subtitle">Card de vacanță</p>
                    </div>
                    <div class="col-4 text-center">
                        <img class="img-fluid payment-card mb-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/up-card-65.png"
                             alt=""/>
                        <p class="payment-type-title"><strong>Up</strong></p>
                        <p class="payment-type-subtitle">Card de vacanță</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-location pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 map-container">
                        <iframe id="home-map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2212.238506124494!2d26.047478385117053!3d44.44796504200246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b201947b182723%3A0xa11c1a4b558085de!2sCasa%20Mic%C4%83!5e0!3m2!1sro!2sro!4v1591815221650!5m2!1sro!2sro"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-6 m-auto">
                        <h5>Indicații de orientare</h5>
                        <div class="directions">
                            <p>In zona REGIE – CAMPUS POLITEHNICA</p>
                            <ul>
                                <li>3.5 km fata de ROMEXPO</li>
                                <li>5 km de PIATA UNIRII</li>
                                <li>1200 m de CAREFOUR ORHIDEEA</li>
                                <li>la 2 minute de statia de metrou Petrache Poenaru (fosta Semanatoarea)</li>
                            </ul>
                            <p>Acces cu metroul de pe 2 magistrale:</p>
                            <ul>
                                <li>Magistrala 1 - dinspre Piata Unirii</li>
                                <li>Magistrala 3 - dinspre Gara de Nord – Pta Victoriei – Stefan Cel Mare</li>
                            </ul>
                            <p>cu masina: dinspre centru, din Piata Unirii direct  pe cheiul Dambovitei;</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

<?php get_footer() ?>