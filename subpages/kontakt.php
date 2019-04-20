<?php
    require_once '../structure/template.php';
?>
<!doctype html>
<html lang="pl">
    <?php echo $template_start_head; ?>
    <title>Kontakt</title>
    <?php echo $template_end_head; ?>
    <body>
        <header id="header">
            <?php echo $nav_menu; ?>
            <?php echo $breadcrumbs; ?>
        </header>
        <main>
            <div class="container">
                <h1>Kontakt</h1>
                
                <div class="row subpage-contact">
                    <div class="col-4 subpage-contact__address">
                        {dane adresowe}
                    </div>
                    <div class="col-8 subpage-contact__form">
                        <form>
                            <input type="email">
                            <input type="tel">
                            <textarea rows="4" cols="50">
                                At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
                            </textarea>
                            <input type="checkbox">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                    <div class="col-12 subpage-contact__gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3544.3408238899156!2d17.051897672424307!3d51.085810127861144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd219ba0dee9742d8!2sSara+Nowodworska+Sara+Nails!5e0!3m2!1spl!2spl!4v1555750197582!5m2!1spl!2spl" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </main>
        <?php
        echo $footer;
        echo $template_copyright;
        echo $socialMedia_fix;
        echo $template_end_body; 
        ?>
</html>