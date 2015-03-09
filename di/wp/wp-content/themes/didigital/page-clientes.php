<?php include('header.php'); ?>
<section class="clientes">
    <div class="ban">
        <div class="wrap">
            <div class="fondo">
                <div class="img_bck" style="background-image: url('http://miriadna.com/desctopwalls/images/max/Strasbourg-(France).jpg'); background-color: #ddd;"></div>
                <div class="pattern"></div>
            </div>
            <div class="wrap">
                <p>CLIENTES</p> 
                <h2>The European languages are members of the same family.</h2>
            </div>
        </div>
    </div>
    <div class="ban_cl_baj">
        <div class="wrap">
            <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar.</p>
        </div>
    </div>
    <div class="sup">
        <div class="wrap">
            <a href="#">Todos</a>
            <a href="#">Transporte</a>
            <a href="#">Educación</a>
            <a href="#">Inmobiliario</a>
            <a href="#">Bancaria</a>
            <a href="#">Salud</a>
        </div>
    </div>
    <div class="cont_all">
        <div class="wrap">
              <?php 
                query_posts(array(
                    'post_type'=>'cliente',
                    'posts_per_page'=>15
                ));
                if(have_posts()) : ?>
                <?php while(have_posts()) : the_post();
            ?>
            <div class="cl_img">
               <?php the_post_thumbnail( 'list_img' ); ?> <img src="img/caja.png" alt="">
            </div>
               <?php endwhile; endif; ?>
        </div>
    </div>
    <div class="baj_all">
        <div class="wrap">
            <div class="baj">
                <img src="img/baj_img.png" alt="Contacto">
                <p>  Conoce a nuestros  Clientes</p>
                <a href="clientes.php"> › Ir a Clientes</a>
            </div>
            <div class="baj">
                <img src="img/baj_img.png" alt="Contacto">
                <p>Conoce nuestros Proyectos</p>
                <a href="proyectos.php"> › Ver Proyectos</a>
            </div>
            <div class="baj">
                <img src="img/baj_img.png" alt="Contacto">
                <p>Queremos conocer tu Proyecto!</p>
                <a href="contacto.php"> › Contáctanos</a>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>