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
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur placeat illo inventore cumque dolore corrupti rem ea explicabo maxime rerum. Eos quibusdam commodi odit minima sed, natus excepturi optio unde!</p>
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
        </main>
        <?php
        echo $cta;
        echo $footer;
        echo $template_copyright;
        echo $socialMedia_fix;
        echo $template_end_body; 
        ?>
</html>