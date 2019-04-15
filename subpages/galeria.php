<?php
    require_once '../structure/template.php';
?>
<!doctype html>
<html lang="pl">
    <?php echo $template_start_head; ?>
    <title>Galeria</title>
    <?php echo $template_end_head; ?>
    <body>
        <header id="header">
            <?php echo $nav_menu; ?>
            <?php echo $breadcrumbs; ?>
        </header>
        <main>

            <div class="container">
                <h1>Galeria</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur placeat illo inventore cumque dolore corrupti rem ea explicabo maxime rerum. Eos quibusdam commodi odit minima sed, natus excepturi optio unde!</p>

                <!--Wiersz pierwszy-->
                <div class="row justify-content-center">
                    <div class="col-12 col-sm grid">
                        <img src="../images/galeria/1.jpg" class="grid-image" id="myImg">
                    </div>
                    <div class="col-12 col-sm grid">
                         <img src="../images/galeria/2.jpg" class="grid-image">
                    </div>
     
                </div>  
                <!--Wiersz drugi-->              
                <div class="row justify-content-center">
                    <div class="col-12 col-sm grid">
                        <img src="../images/galeria/3.jpg" class="grid-image">
                    </div>
                    <div class="col-12 col-sm grid">
                         <img src="../images/galeria/4.jpg" class="grid-image">
                    </div>
                </div>
                <!--Wiersz trzeci-->  
                <div class="row justify-content-center">
        
                    <div class="col-12 col-sm grid">
                        <img src="../images/galeria/101.jpg" class="grid-image">
                    </div>
                       <div class="col-12 col-sm grid">
                        <img src="../images/galeria/102.jpg" class="grid-image">
                    </div>
                    <div class="col-12 col-sm grid">
                        <img src="../images/galeria/103.jpg" class="grid-image">
                    </div> 
                </div>
                <!--Wiersz czwarty-->
                                <div class="row justify-content-center">
                    <div class="col-12 col-sm grid">
                        <img src="../images/galeria/5.jpg" class="grid-image">
                    </div>
                    <div class="col-12 col-sm grid">
                         <img src="../images/galeria/6.jpg" class="grid-image">
                    </div>
     
                </div>  
                <!--Wiersz piąty-->              
                <div class="row justify-content-center">
                    <div class="col-12 col-sm grid">
                        <img src="../images/galeria/7.jpg" class="grid-image">
                    </div>
                    <div class="col-12 col-sm grid">
                         <img src="../images/galeria/8.jpg" class="grid-image">
                    </div>
                </div>

                <!--Wiersz szósty-->  
                <div class="row justify-content-center">
        
                    <div class="col-12 col-sm grid">
                        <img src="../images/galeria/104.jpg" class="grid-image">
                    </div>
                       <div class="col-12 col-sm grid">
                        <img src="../images/galeria/105.jpg" class="grid-image">
                    </div>
                    <div class="col-12 col-sm grid">
                        <img src="../images/galeria/106.jpg" class="grid-image">
                    </div> 
                </div>
                <!--Wiersz siódmy-->              
                <div class="row justify-content-center">
                    <div class="col-12 col-sm grid">
                        <img src="../images/galeria/9.jpg" class="grid-image">
                    </div>
                    <div class="col-12 col-sm grid">
                         <img src="../images/galeria/10.jpg" class="grid-image">
                    </div>
                </div>
                
     
            </div>


       
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
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