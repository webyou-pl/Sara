<?php
    require_once 'structure/template.php';
?>

<!doctype html>
<html lang="pl">
    <?php echo $template_start_head; ?>
    <title>Nazwa Sara</title>
    <?php echo $template_end_head; ?>
    <body>
        <header id="header">
            <?php echo $nav_menu; ?>
            <div id="slider" class="text-center">
                <div class="trianglesDown"></div>
                <div class="slider-logo">
                    <img src="images/sygnet-sara.svg" alt="logo sara nowodwosrka">
                </div>
                <!-- <h1 class="bottomLine">Wszystko dla piękna w jednym miejscu</h1> -->
                    <!-- miejsce na slider -->
            </div>
        </header>

        <section id="aboutMe">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 ">
                        <div class="images">
                            <h2 class="rotate-15">O mnie</h2>
                            <img src="images/strona-glowna/o-mnie/Nyska-61A.jpg" class="imageUnder" alt="Nsuak 61A">
                            <div class="imageOn">
                                <img src="images/strona-glowna/o-mnie/Nowodworska-Sara.jpg" alt="Sara Nowodworska">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 px-5 pt-5 text-center tytul">
                        <h1 class="h3 mb-5 bottomLine">Nowodworska <span>Sara</span></h3>
                        <p class="mb-5"> Stylizacja paznokci jest moją <strong>pasją od wielu lat.</strong> Hobby stało się moją pracą, w którą wkładam wiele serca dając satysfakcje i poczucie piękna swoim klientkom. To z kolei <strong>motywuje mnie</strong> do nieustannego poszerzania wiedzy i poznawania nowych technik oraz trendów w tej branży. Poza stylizacją paznokci wykonuję również inne zabiegi, których spis został przedstawiony w cenniku. <strong>Zapraszam serdecznie!</strong></p>
                        <a href="#!" class="btn btn-primary">Kontakt</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="numbers">
            <div class="trianglesInImages-up"></div>
            <div class="container text-center">
                <h2 class="mb-5">Pasja mnie napędza</h2>
                <p class="mb-5">Praesent quis ante nec <strong>erat hendrerit</strong> fermentum et ac nunc. Pellentesque condimentum convallis nulla, <strong>eu dictum diam pellentesque vel.</strong> Morbi id gravida arcu, non pharetra magna. Mauris tincidunt erat eget tristique lacinia. <strong>Etiam at dapibus ligula, at blandit enim.</strong> Maecenas at sem condimentum, facilisis sapien eget, dignissim mi. Nullam ligula mauris, aliquam vitae lectus a, sagittis ornare est. Proin tempor mauris arcu, nec <strong>egestas justo luctus sollicitudin.</strong> Phasellus ac suscipit nisl.</p>
                <div class="row">
                    <div class="col-sm-12 col-md-4 d-flex justify-content-center">
                        <div class="number-wheel">
                            <div class="number-wheel__border">
                                <div class="number-wheel__value">
                                    <h4>Zadowolonych klijentów</h4>
                                    <p><span data-counter="100">0</span>%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 d-flex justify-content-center">
                        <div class="number-wheel">
                            <div class="number-wheel__border">
                                <div class="number-wheel__value">
                                    <h4>Lat na rynku</h4>
                                    <p data-counter="2">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 d-flex justify-content-center">
                        <div class="number-wheel">
                            <div class="number-wheel__border">
                                <div class="number-wheel__value">
                                    <h4>Zrealizowanych stylizacja</h4>
                                    <p data-counter="647">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trianglesInImages-down"></div>
        </section>

        <section id="sale">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6  px-5 pt-5 text-center">
                        <h3 class="mb-5 bottomLine">Specjalne <span>oferty<span></h3>
                        <p class="mb-5">Integer tincidunt iaculis pellentesque. <strong>Duis rutrum nulla quam,</strong> vitae sollicitudin arcu iaculis quis. Pellentesque hendrerit est <strong>ac justo pulvinar,</strong> ultrices faucibus orci fringilla. Nullam vel orci ut sapien molestie tempus. Vivamus finibus, <strong>orci vel porttitor</strong> accumsan, risus mi sodales risus, vitae vestibulum nisl est id quam. Nulla pulvinar erat luctus velit scelerisque cursus. <strong>Cras eleifend tristique est.</strong></p>
                        <a href="#!" class="btn btn-primary">Sprawdź promocje</a>
                    </div>
                    <div class="col-sm-12 col-md-6 ">
                        <div class="images">
                            <h2 class="rotate15">Promocje</h2>
                            <img src="images/strona-glowna/promocja/okazja.jpg" class="imageUnder" alt="Wyjątkowe promocje">
                            <div class="imageOn">
                                <img src="images/strona-glowna/promocja/moje-promocje.jpg" alt="moje promocje">
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </section>

        <section id="gallery">
            <div class="gallery-bg trianglesDown">
            </div>
                <div class="container text-center">
                    <h2 class="mx-auto mb-5">Galeria</h2>
                    <div class="row justify-content-center gallery">
                        <div class="col-4">
                            <div class="gallery-image">
                                <a href="#!">
                                    <img src="images/strona-glowna/galleria/41725372.jpg" class="img-fluid" alt="Wyjątkowe paznokcie">
                                </a>
                            </div>
                        </div>
                        <div class="col-4 " >
                            <div class="gallery-image">
                                <a href="#!">
                                    <img src="images/strona-glowna/galleria/42872961.jpg" class="img-fluid" alt="Manicure">
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="gallery-image">
                                <a href="#!">
                                    <img src="images/strona-glowna/galleria/45770701.jpg" class="img-fluid" alt="Stylizacja paznokci">
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="#!" class=" mt-5 btn btn-primary">Zobacz Galerie</a>   
                        </div>
                    </div>
                </div>
            
        </section>

        <?php echo $cta;
        echo $footer;
        echo $template_copyright;
        echo $socialMedia_fix;
     echo $template_end_body; ?>
</html>