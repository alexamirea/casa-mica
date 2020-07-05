<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 6/10/2020
 * Time: 01:33
 */
/* Template Name: Contact */

get_header() ?>

<section class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 m-auto col-sm-12">
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
                    <p>cu masina: dinspre centru, din Piata Unirii direct pe cheiul Dambovitei;</p>
                </div>
            </div>
            <div class="col-lg-6 map-container col-sm-12">
                <iframe id="home-map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2212.238506124494!2d26.047478385117053!3d44.44796504200246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b201947b182723%3A0xa11c1a4b558085de!2sCasa%20Mic%C4%83!5e0!3m2!1sro!2sro!4v1591815221650!5m2!1sro!2sro"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <section class="contact-form-wrapper">
        <div class="container contact-form mt-5 mb-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-sm-12">
                    <form action="">
                        <label for=""> Nume
                            <input type="text">
                        </label>
                        <label for=""> Adresa de email
                            <input type="text">
                        </label>
                        <label for=""> Mesaj
                            <textarea></textarea>
                        </label>
                        <button class="submit-form">Trimite</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>

<?php get_footer() ?>
