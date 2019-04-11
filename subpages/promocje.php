<?php
    require_once '../structure/template.php';
?>
<!doctype html>
<html lang="pl">
    <?php echo $template_start_head; ?>
    <title>Promocja</title>
    <?php echo $template_end_head; ?>
    <body>
        <header id="header">
            <?php echo $nav_menu; ?>
            <?php echo $breadcrumbs; ?>
        </header>
        <main>
            <div class="container">
                <h1>Nagłówek h1</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur placeat illo inventore cumque dolore corrupti rem ea explicabo maxime rerum. Eos quibusdam commodi odit minima sed, natus excepturi optio unde!</p>

                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div class="card-promotion" style="background-image: url('../images/promocje/promocja.jpg')">
                            <div class="card-promotion__text">
                                <h2>Na dzień matki</h2>
                                <span>-40%</span>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing Lorem, ipsum dolor sit amet consectetur adipisicing</p>
                            </div>
                            <div class="card-promotion__more">
                                btn
                            </div>
                        </div>
                        https://pl.pinterest.com/pin/310185493082498672/
                    </div>
                </div>
            </div>
        </main>
        <?php
        echo $cta;
        echo $footer;
        echo $template_copyright;
        echo $socialMedia_fix;
        echo $template_end_body; 
        ?>
</html>