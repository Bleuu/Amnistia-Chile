<?php get_header(); ?>
<section class="servicios">
    <div class="banner_serv">
        <div class="img_bck" style="background-image: url('http://miriadna.com/desctopwalls/images/max/Strasbourg-(France).jpg'); background-color: #ddd;"></div>
        <div class="pattern"></div>
        <div class="wrap">
            <p><?php the_title(); ?></p>
            <h2><?php the_field('pag_tit_sec'); ?></h2>
        </div>   
    </div>
    <div class="ban_serv_baj">
        <div class="wrap">
            <p><?php the_field('pag_ext_sec'); ?></p>
        </div>
    </div>
    <div class="servicio">
        <div class="wrap">
            <?php 
                query_posts(array(
                    'post_type'=>'servicio',
                    'posts_per_page'=>10
                ));
                if(have_posts()) : ?>
                <?php while(have_posts()) : the_post();
            ?>
            <div class="txt">
                <div class="izq">
                    <div class="img_ct">
                        <a href="ficha_servicios.php" title="Conocer servicio"><?php the_post_thumbnail( 'list_img' ); ?></a>
                    </div>
                </div>
                <div class="der">
                    <a href="ficha_servicios.php" title="Conocer servicio"><h3>ESTRATEGIA DIGITAL</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam, suscipit ac lectus quis, dictum ornare ipsum.</p>
                    <a href="ficha_servicios.php" title="Conocer servicio" class="hlink">Conocer servicio ›</a>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
    <div class="baj_all">
        <div class="wrap">
            <div class="baj">
                <img src="img/baj_img.png" alt="Contacto">
                <p>  Conoce a nuestros Clientes</p>
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
<?php get_footer(); ?>