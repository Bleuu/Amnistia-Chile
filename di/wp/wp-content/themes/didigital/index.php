<?php get_header(); ?>
<section class="inicio">
    <div class="slider">
        <ul class="bxslider">
            <li>
                <div class="img_bck" style="background-image: url('http://miriadna.com/desctopwalls/images/max/Strasbourg-(France).jpg'); background-color: #ddd;"></div>
                <div class="pattern"></div>
                <div class="wrap">
                    <div class="izq">
                        <h4>C-Vive</h4>
                        <h3>Sitio web de Campaña C-Vive lorem ipsum dolor</h3>
                        <div class="txt_here">
                            <p>The European languages are members of the same family, their separate existence is a myth. </p>
                        </div>
                        <a href="ficha_proyectos.php">Conocer este Proyecto ›</a>
                    </div>
                    <div class="der">
                        <img src="img/sexyhand.png" alt="servicio">
                    </div>
                </div>
            </li>
            <li>
                <div class="img_bck" style="background-image: url('http://xdesktopwallpapers.com/wp-content/uploads/2012/04/Bradley%20Cooper%20Cute%20Face%20Closeup%20N%20Grey%20Background.jpg');"></div>
                <div class="pattern"></div>
                <div class="wrap">
                    <div class="izq">
                        <h4>C-Vive</h4>
                        <h3>Sitio web de Campaña C-Vive lorem ipsum dolor</h3>
                        <div class="txt_here">
                            <p>The European languages are members of the same family, their separate existence is a myth. </p>
                        </div>
                        <a href="ficha_proyectos.php">Conocer este Proyecto ›</a>
                    </div>
                    <div class="der">
                        <img src="img/sexyhand.png" alt="servicio">
                    </div>
                </div>
            </li>
            <li>
                <div class="img_bck" style="background-image: url('http://miriadna.com/desctopwalls/images/max/Strasbourg-(France).jpg'); background-color: #ddd;"></div>
                <div class="pattern"></div>
                <div class="wrap">
                    <div class="izq">
                        <h4>C-Vive</h4>
                        <h3>Sitio web de Campaña C-Vive lorem ipsum dolor</h3>
                        <div class="txt_here">
                            <p>The European languages are members of the same family, their separate existence is a myth. </p>
                        </div>
                        <a href="ficha_proyectos.php">Conocer este Proyecto ›</a>
                    </div>
                    <div class="der">
                        <img src="img/sexyhand.png" alt="servicio">
                    </div>
                </div>
            </li>
            <li>
                <div class="img_bck" style="background-image: url('http://xdesktopwallpapers.com/wp-content/uploads/2012/04/Bradley%20Cooper%20Cute%20Face%20Closeup%20N%20Grey%20Background.jpg');"></div>
                <div class="pattern"></div>
                <div class="wrap">
                    <div class="izq">
                        <h4>C-Vive</h4>
                        <h3>Sitio web de Campaña C-Vive lorem ipsum dolor</h3>
                        <div class="txt_here">
                            <p>The European languages are members of the same family, their separate existence is a myth. </p>
                        </div>
                        <a href="ficha_proyectos.php">Conocer este Proyecto ›</a>
                    </div>
                    <div class="der">
                        <img src="img/sexyhand.png" alt="servicio">
                    </div>
                </div>
            </li>
            <li>
                <div class="img_bck" style="background-image: url('http://miriadna.com/desctopwalls/images/max/Strasbourg-(France).jpg'); background-color: #ddd;"></div>
                <div class="pattern"></div>
                <div class="wrap">
                    <div class="izq">
                        <h4>C-Vive</h4>
                        <h3>Sitio web de Campaña C-Vive lorem ipsum dolor</h3>
                        <div class="txt_here">
                            <p>The European languages are members of the same family, their separate existence is a myth. </p>
                        </div>
                        <a href="ficha_proyectos.php">Conocer este Proyecto ›</a>
                    </div>
                    <div class="der">
                        <img src="img/sexyhand.png" alt="servicio">
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="wrap">
        <div class="serv">
           <?php 
                query_posts(array(
                    'pagename'=>'servicios',
                    'showposts'=>1
                ));
                if(have_posts()) : ?>
                <?php while(have_posts()) : the_post();
            ?>
                <h2><?php the_field('pag_tit_home'); ?></h2>
            <?php endwhile; endif;?>
            <?php 
                query_posts(array(
                    'post_type'=>'servicio',
                    'showposts'=>4
                ));
                if(have_posts()) : ?>
                <?php while(have_posts()) : the_post();
            ?>
            <div class="serv_baj">
                <div class="img_ct">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail( 'medium' ); ?>
                    </a>
                </div>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <div class="txt_ser">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <?php endwhile; endif;?>
        </div>
        
        
        <div class="cli">
              <?php 
                query_posts(array(
                    'pagename'=>'cliente',
                    'showposts'=>5
                ));
                if(have_posts()) : ?>
                <?php while(have_posts()) : the_post();
            ?>
            <h2><?php the_field('pag_tit_home'); ?></h2>
              <?php endwhile; endif;?>
                <?php 
                query_posts(array(
                    'post_type'=>'cliente',
                    'showposts'=>10
                ));
                if(have_posts()) : ?>
                <?php while(have_posts()) : the_post();
            ?>
            <div class="img_cn">
             <?php the_post_thumbnail( 'medium' ); ?>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
</section>
<?php get_footer(); ?>