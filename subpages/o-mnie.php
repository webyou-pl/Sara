<?php
    require_once '../structure/template.php';
?>
<!doctype html>
<html lang="pl">
    <?php echo $template_start_head; ?>
    <title>O mnie</title>
    <?php echo $template_end_head; ?>
    <body>
        <header id="header">
            <?php echo $nav_menu; ?>
            <?php echo $breadcrumbs; ?>
        </header>
        <main>
            <div class="container">
                <h1>O mnie</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur placeat illo inventore cumque dolore corrupti rem ea explicabo maxime rerum. Eos quibusdam commodi odit minima sed, natus excepturi optio unde!</p>
                
                <div class="mt-5 row">
                    <div class="col-4">
                        <img src="../images/o-mnie/Nowodworska-Sara.jpg" alt="">
                    </div>
                    <div class="col-8">
                        <p>Phasellus pulvinar risus ut eros sollicitudin tincidunt. Vestibulum blandit sem eget dignissim porttitor. Vivamus non mi tincidunt elit hendrerit aliquet. Donec porta ligula eget erat viverra, non commodo nulla mollis.</p>
                    </div>
                    <div class="col-8 mt-5">
                        <p>Aliquam iaculis, dui nec sollicitudin aliquet, mi ante sagittis mi, ut feugiat elit enim quis nibh. Nulla augue dui, pulvinar at neque quis, gravida porta purus. Praesent sed purus et neque iaculis suscipit ullamcorper ac nisi. Praesent ac metus egestas, molestie quam vitae, feugiat neque. Sed vulputate mattis sem et tincidunt. Aenean egestas turpis vitae sem lobortis, at egestas massa interdum. Aenean volutpat sed enim imperdiet euismod. Morbi ac tincidunt velit.</p>
                    </div>
                    <div class="col-4">
                            <img src="../images/o-mnie/Nowodworska-Sara.jpg" alt="">
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