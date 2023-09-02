<?php
session_start();
include 'Assets/includes/head.html';
include 'Assets/includes/navbar.php';

?>

<main>
    <div class="parc-auto_page">
        <div style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;"></div>
        <div class="filters_container" style="visibility: hidden;">
            <div class="filters_window ">
                <p class="filtre_title">Filtres</p>
                <div>
                    <div class="filters range_slider_block">
                        <div class="slider_filter"><span>Km</span>
                            <div class="container_slider"><input type="range" min="12000" max="253485" class="thumb thumb--left" value="12000"><input type="range" min="12000" max="253485" class="thumb thumb--right" value="253485">
                                <div class="slider">
                                    <div class="slider__track"></div>
                                    <div class="slider__range" style="left: 0%; width: 100%;"></div>
                                    <div class="slider__left-value">12000</div>
                                    <div class="slider__right-value">253485</div>
                                </div>
                            </div>
                        </div>
                        <div class="slider_filter"><span>Prix</span>
                            <div class="container_slider"><input type="range" min="1300" max="50000" class="thumb thumb--left" value="1300"><input type="range" min="1300" max="50000" class="thumb thumb--right" value="50000">
                                <div class="slider">
                                    <div class="slider__track"></div>
                                    <div class="slider__range" style="left: 0%; width: 100%;"></div>
                                    <div class="slider__left-value">1300</div>
                                    <div class="slider__right-value">50000</div>
                                </div>
                            </div>
                        </div>
                        <div class="slider_filter"><span>Annèe</span>
                            <div class="container_slider"><input type="range" min="2001" max="2022" class="thumb thumb--left" value="2001" style="z-index: 5;"><input type="range" min="2001" max="2022" class="thumb thumb--right" value="2022">
                                <div class="slider">
                                    <div class="slider__track"></div>
                                    <div class="slider__range" style="left: 0%; width: 100%;"></div>
                                    <div class="slider__left-value">2001</div>
                                    <div class="slider__right-value">2022</div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 50px;">
                            <div class="container--center--row"><label for="Offre"> Filtrer les offres</label><input id="offre" type="checkbox"></div>
                            <div class="reset container--center--row">Reset <span class="reset_icon_filters reset_icon"></span></div>
                        </div>
                        <div><button class="cta cta--red  mar-auto">Filtrer</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_title">
            <h1>Notre Parc Automobile</h1>
        </div>
        <div class="filters_btn_toggle">
            <div class="filters_icon"></div>
        </div>
        <div class="parc_auto_cars_switch_block">
            <div class="parc_auto_cars_section">
                <figure class="car_card"><img src="/images/uploads/64b53966bdf2964b53966bdf2c.webp" alt="Garage Vincent Parrot ,Toyota Yaris ">
                    <figcaption class="car_card_model">Toyota Yaris </figcaption>
                    <div class="car_card_details">
                        <div class="car_card_details--left"><span class="car_card_details--left_km">160563 km</span><span class="car_card_details--left_year">Année: 2015</span></div>
                        <div class="car_card_details--right"><span class="car_card_details_price">6500 $</span></div>
                    </div>
                    <div class="car_card_buttons"><a class="car_card_cta cta--white" href="/parc-auto/details/333">Détails</a><button class="car_card_cta cta--red" style="border: none;"><a class="container--center--row" href="/contact" style="width: 100%;">Contacter</a></button></div>
                </figure>
                <figure class="car_card"><img src="/images/uploads/64b474c50b1a564b474c50b1a8.webp" alt="Garage Vincent Parrot ,Smart ForTwo">
                    <figcaption class="car_card_model">Smart ForTwo</figcaption>
                    <div class="car_card_details">
                        <div class="car_card_details--left"><span class="car_card_details--left_km">158697 km</span><span class="car_card_details--left_year">Année: 2001</span></div>
                        <div class="car_card_details--right"><span class="car_card_details_price">7500 $</span></div>
                    </div>
                    <div class="car_card_buttons"><a class="car_card_cta cta--white" href="/parc-auto/details/332">Détails</a><button class="car_card_cta cta--red" style="border: none;"><a class="container--center--row" href="/contact" style="width: 100%;">Contacter</a></button></div>
                </figure>
                <figure class="car_card"><img src="/images/uploads/64b46eb9e882864b46eb9e882b.webp" alt="Garage Vincent Parrot ,Mercedez Benz">
                    <figcaption class="car_card_model">Mercedez Benz</figcaption>
                    <div class="car_card_details">
                        <div class="car_card_details--left"><span class="car_card_details--left_km">145078 km</span><span class="car_card_details--left_year">Année: 2010</span></div>
                        <div class="car_card_details--right"><span class="car_card_details_price">13250 $</span></div>
                    </div>
                    <div class="car_card_buttons"><a class="car_card_cta cta--white" href="/parc-auto/details/331">Détails</a><button class="car_card_cta cta--red" style="border: none;"><a class="container--center--row" href="/contact" style="width: 100%;">Contacter</a></button></div>
                </figure>
                <figure class="car_card"><img src="/images/uploads/64b46c2e8bfb564b46c2e8bfb7.webp" alt="Garage Vincent Parrot ,Peugeot Race">
                    <figcaption class="car_card_model">Peugeot Race</figcaption>
                    <div class="car_card_details">
                        <div class="car_card_details--left"><span class="car_card_details--left_km">145243 km</span><span class="car_card_details--left_year">Année: 2021</span></div>
                        <div class="car_card_details--right"><span class="car_card_details_offer_price">16000 $</span><span class="car_card_details_price" style="text-decoration: line-through;">16500 $</span></div>
                    </div>
                    <div class="car_card_buttons"><a class="car_card_cta cta--white" href="/parc-auto/details/330">Détails</a><button class="car_card_cta cta--red" style="border: none;"><a class="container--center--row" href="/contact" style="width: 100%;">Contacter</a></button></div>
                </figure>
                <figure class="car_card"><img src="/images/uploads/64b4bdb8bf61564b4bdb8bf61a.webp" alt="Garage Vincent Parrot ,Peugeot Race">
                    <figcaption class="car_card_model">Peugeot Race</figcaption>
                    <div class="car_card_details">
                        <div class="car_card_details--left"><span class="car_card_details--left_km">145243 km</span><span class="car_card_details--left_year">Année: 2021</span></div>
                        <div class="car_card_details--right"><span class="car_card_details_price">16500 $</span></div>
                    </div>
                    <div class="car_card_buttons"><a class="car_card_cta cta--white" href="/parc-auto/details/328">Détails</a><button class="car_card_cta cta--red" style="border: none;"><a class="container--center--row" href="/contact" style="width: 100%;">Contacter</a></button></div>
                </figure>
                <figure class="car_card"><img src="/images/uploads/64b46aef5219864b46aef5219b.webp" alt="Garage Vincent Parrot ,Peugeot Race">
                    <figcaption class="car_card_model">Peugeot Race</figcaption>
                    <div class="car_card_details">
                        <div class="car_card_details--left"><span class="car_card_details--left_km">12000 km</span><span class="car_card_details--left_year">Année: 2022</span></div>
                        <div class="car_card_details--right"><span class="car_card_details_price">25000 $</span></div>
                    </div>
                    <div class="car_card_buttons"><a class="car_card_cta cta--white" href="/parc-auto/details/327">Détails</a><button class="car_card_cta cta--red" style="border: none;"><a class="container--center--row" href="/contact" style="width: 100%;">Contacter</a></button></div>
                </figure>
                <figure class="car_card"><img src="/images/uploads/64b465b553f8364b465b553f89.webp" alt="Garage Vincent Parrot ,Mercedes-Benz A 200">
                    <figcaption class="car_card_model">Mercedes-Benz A 200</figcaption>
                    <div class="car_card_details">
                        <div class="car_card_details--left"><span class="car_card_details--left_km">180451 km</span><span class="car_card_details--left_year">Année: 2020</span></div>
                        <div class="car_card_details--right"><span class="car_card_details_price">15000 $</span></div>
                    </div>
                    <div class="car_card_buttons"><a class="car_card_cta cta--white" href="/parc-auto/details/326">Détails</a><button class="car_card_cta cta--red" style="border: none;"><a class="container--center--row" href="/contact" style="width: 100%;">Contacter</a></button></div>
                </figure>
                <figure class="car_card"><img src="/images/uploads/64b465606007b64b465606007e.webp" alt="Garage Vincent Parrot ,Mercedes-Benz A 200">
                    <figcaption class="car_card_model">Mercedes-Benz A 200</figcaption>
                    <div class="car_card_details">
                        <div class="car_card_details--left"><span class="car_card_details--left_km">125000 km</span><span class="car_card_details--left_year">Année: 2020</span></div>
                        <div class="car_card_details--right"><span class="car_card_details_offer_price">13900 $</span><span class="car_card_details_price" style="text-decoration: line-through;">15000 $</span></div>
                    </div>
                    <div class="car_card_buttons"><a class="car_card_cta cta--white" href="/parc-auto/details/324">Détails</a><button class="car_card_cta cta--red" style="border: none;"><a class="container--center--row" href="/contact" style="width: 100%;">Contacter</a></button></div>
                </figure>
                <figure class="car_card"><img src="/images/uploads/64b464a60e03664b464a60e03a.webp" alt="Garage Vincent Parrot ,Smart ForTwo">
                    <figcaption class="car_card_model">Smart ForTwo</figcaption>
                    <div class="car_card_details">
                        <div class="car_card_details--left"><span class="car_card_details--left_km">25000 km</span><span class="car_card_details--left_year">Année: 2022</span></div>
                        <div class="car_card_details--right"><span class="car_card_details_price">9550 $</span></div>
                    </div>
                    <div class="car_card_buttons"><a class="car_card_cta cta--white" href="/parc-auto/details/323">Détails</a><button class="car_card_cta cta--red" style="border: none;"><a class="container--center--row" href="/contact" style="width: 100%;">Contacter</a></button></div>
                </figure>
            </div>
            <div class="switch_page_block"><a class="switch_page_block_arrow switch_page_block_arrow--left " href="/parc-auto" style="opacity: 0.2;"></a>
                <div class="switch_page_block_numbers"><a class="page_number" href="/parc-auto" style="text-decoration: underline;">0</a><a class="page_number" href="/parc-auto">1</a><a class="page_number" href="/parc-auto">2</a></div><a class="switch_page_block_arrow switch_page_block_arrow--right" href="/parc-auto" style=""></a>
            </div>
        </div>
    </div>
</main>






<?php
include './Assets/includes/footer.html';
?>