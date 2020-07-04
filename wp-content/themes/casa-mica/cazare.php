<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 6/10/2020
 * Time: 01:33
 */
/* Template Name: Cazare */

get_header() ?>

    <section class="main">
        <div class="slick-carousel">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/resources/rsz_slider-1-1.jpg" alt="">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/resources/slider-1-2.jpg" alt="">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/resources/slider-1-3.jpg" alt="">
        </div>
        <section class="price-list">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mt-5 mb-4">
                        <h5 style="color: #555;" class="text-uppercase facilities-title">Grila de prețuri</h5>
                        <div class="divider"></div>
                    </div>
                <div class="col-12">
                    <table width="100%" class="text-center">
                        <tr>
                            <td>Cameră</td>
                            <td>Preț</td>
                            <td>Acțiuni</td>
                        </tr>
                        <tr>
                            <td>Dublă</td>
                            <td>100 RON</td>
                            <td>Rezervă!</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <section class="facilities pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mt-2 mb-4">
                        <h5 class="text-uppercase facilities-title">Facilități</h5>
                        <div class="divider"></div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="facilities-badge">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/wifi.png"
                                 class="img-fluid"/>
                            <span>Uscător de păr</span>
                        </div>
                        <div class="facilities-badge mt-5">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/parking.png"
                                 class="img-fluid"/>
                            <span>Baie proprie</span>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="facilities-badge">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/selfcheck-in.png"
                                 class="img-fluid"/>
                            <span>Mic dejun</span>
                        </div>
                        <div class="facilities-badge mt-5">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/terrace.png"
                                 class="img-fluid"/>
                            <span>Aer condiționat</span>
                        </div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="facilities-badge">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/pool.png"
                                 class="img-fluid"/>
                            <span>Minifrigider</span>
                        </div>
                        <div class="facilities-badge mt-5">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/lounge.png"
                                 class="img-fluid"/>
                            <span>TV prin cablu</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="booking-container">
            <div class="container booking-container">
                <div class="col-12 text-center mt-5 mb-4">
                    <h5 style="color: #555;" class="text-uppercase facilities-title">Formular de rezervare</h5>
                    <div class="divider"></div>
                </div>
                <form method="post" id="booking_form" class="mb-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="fname">
                                Nume
                                <input type="text" class="form-control">
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label for="lname">
                                Prenume
                                <input type="text" class="form-control">
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="email">
                                Adresă de email
                                <input type="email" class="form-control">
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label for="phone">
                                Număr telefon
                                <input type="tel" class="form-control">
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="calendar-in">
                                Venire
                                <input type='text' class="form-control calendar-input-in" id='datetimepicker_in' />
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label for="calendar-out">
                                Plecare
                                <input type='text' class="form-control calendar-input-out" id='datetimepicker_out' />
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="number_of_persons">
                                Număr de persoane
                                <input type="number" class="form-control">
                            </label>
                        </div>
                        <div class="col-sm-6 extra-bed">
                            <label for="extra_bed">
                                <i class="fa fa-bed" aria-hidden="true"></i>
                                Pat suplimentar
                                <input type="checkbox">
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="observatiiations">
                                Observații
                                <textarea class="form-control" rows="5"></textarea>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </section>

<?php get_footer() ?>