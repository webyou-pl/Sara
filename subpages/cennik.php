<?php
    require_once '../structure/template.php';
?>

<!doctype html>
<html lang="pl">
    <?php echo $template_start_head; ?>
    <title>Nazwa Sara</title>
    <?php echo $template_end_head; ?>
    <body>
        <header id="header">
            <?php echo $nav_menu; ?>
            <?php echo $breadcrumbs; ?>
            
        </header>
        <main>
            <div class="container">
                <h1>Cennik</h1>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur placeat illo inventore cumque dolore corrupti rem ea explicabo maxime rerum. Eos quibusdam commodi odit minima sed, natus excepturi optio unde!</p>
                
                <section class="section__cennik">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             <p>Manicure</p>
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <table>
                                <tr>
                                <td>Manicure tradycyjny z odżywką/lakierem/french</td>
                                <td>40/50/70 zł</td>
                                </tr>
                                <tr>
                                <td>Manicure japoński</td>
                                <td>60 zł</td>
                                </tr>
                                <tr>
                                <td>Manicure hybrydowy kolor/french</td>
                                <td>80/100 zł</td>
                                </tr>
                                <tr>
                                <td>Malowanie lakierem</td>
                                <td>25 zł</td>
                                </tr>
                                <tr>
                                <td>Usunięcie hybrydy bez manicure</td>
                                <td>20 zł</td>
                                </tr>
                                <tr>
                                <td>Usunięcie hybrydy przy manicure</td>
                                <td>bezpłatnie</td>
                                </tr>
                                <tr>
                                <td>Żel na naturalnej płytce kolor/french</td>
                                <td>130/140 zł</td>
                                </tr>
                                <tr>
                                <td>Żel na formie lub tipsie kolor/french</td>
                                <td>150/160 zł</td>
                                </tr>
                                <tr>
                                <td>Usunięcie żelu</td>
                                <td>50 zł</td>
                                </tr>
                                <tr>
                                <td>Usunięcie żelu &#43 manicure klasyczny</td>
                                <td>80 zł</td>
                                </tr>                                
                                <tr>
                                <td>Manicure MEN</td>
                                <td>50 zł</td>
                                </tr>
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <p>Pedicure</p>
                            </button>
                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                               <table>
                                <td>Pedicure klaszyczy z odżywką/lakierem</td>
                                <td>90 zł</td>
                                </tr>
                                <tr>
                                <td>Pedicure hybrydowy kolor/french</td>
                                <td>120/130 zł</td>
                                </tr>
                                <tr>
                                <td>Malowanie lakierem kolor/french 
                                    <br><span>&#40opracowanie paznokci bez frezowania podeszwy stóp&#41<span></td>
                                <td>60/70 zł</td>
                                </tr>
                                <tr>
                                <td>Malowanie hybrydą kolor/french
                                    <br><span>&#40opracowanie paznokci bez frezowania podeszwy stóp&#41<span></td>
                                <td>80/90 zł</td>
                                </tr>
                                <tr>
                                <td>Malowanie lakierem</td>
                                <td>25 zł</td>
                                </tr>
                                <tr>
                                <td>Usunięcie hybrydy bez pedicure</td>
                                <td>20 zł</td>
                                </tr>
                                <tr>
                                <td>Usunięcie hybrydy przy pedicure</td>
                                <td>bezpłatnie</td>
                                </tr>
                                <tr>
                                <td>Pedicure &#43 żel kolor/french</td>
                                <td>130/140 zł</td>
                                </tr>
                                <tr>
                                <td>Frezowanie podeszwy stóp</td>
                                <td>50 zł</td>
                                </tr>
                                <tr>
                                <td>Pedicure MEN</td>
                                <td>100 zł</td>
                                </tr>                                
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p>Brwi i rzęsy</p>
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                    <table>
                                        <tr>
                                        <td>Henna komplet
                                            <br><span>&#40henna brwi i rzęs z regulacją&#41<span></td>
                                        <td>50 zł</td>
                                        </tr>
                                        <tr>
                                        <td>Henna brwi &#43 regulacja
                                            <br><span>&#40opracowanie paznokci bez frezowania podeszwy stóp&#41</span></td>
                                        <td>30 zł</td>
                                        </tr>
                                        <tr>
                                        <td>Henna brwi</td>
                                        <td>20 zł</td>
                                        </tr>
                                        <tr>
                                        <td>Henna rzęs</td>
                                        <td>20 zł</td>
                                        </tr>
                                        <tr>
                                        <td>Regulacja brwi</td>
                                        <td>20 zł</td>
                                        </tr>
                                </table>                        
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                           <p>Depilacja</p>
                            </button>
                        </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                                    <table>
                                        <tr>
                                        <td>Regulacja brwi</td>
                                        <td>20 zł</td>
                                        </tr>
                                        <tr>
                                        <td>Wąsik</td>
                                        <td>20 zł</td>
                                        </tr>
                                        <tr>
                                        <td>Broda</td>
                                        <td>20 zł</td>
                                        </tr>
                                        <tr>
                                        <td>Wąsik &#43 broda</td>
                                        <td>30 zł</td>
                                        </tr>
                                        <tr>
                                        <td>Pachy</td>
                                        <td>30 zł</td>
                                        </tr>
                                        <tr>
                                        <td>Ręce</td>
                                        <td>30 - 50 zł</td>
                                        </tr>
                                        <td>Całe nogi</td>
                                        <td>80 - 100 zł</td>
                                        </tr>
                                        <tr>
                                        <td>Łydki</td>
                                        <td>40 - 50 zł</td>
                                        </tr>                                        
                                        <td>Uda</td>
                                        <td>50 - 60 zł</td>
                                        </tr>
                                </table>   
                            </div>
                    </div>
                </div>
        </section>
            </div>
        </main>
        <?php echo $cta;
        echo $footer;
        echo $template_copyright;
        echo $socialMedia_fix;
     echo $template_end_body; ?>
</html>