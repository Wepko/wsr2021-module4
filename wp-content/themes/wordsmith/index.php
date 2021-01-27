<?php get_header() ?>
<div>

    <section class="s-content">
        <div class="row entries-wrap wide">
            <div class="entries">
                <?php while( have_posts() ) :
                    the_post();
                ?>
                    <article class="col-block">
                        
                        <div class="item-entry" data-aos="zoom-in">
                            <div class="item-entry__thumb">
                                <a href="<?php the_permalink() ?>" class="item-entry__thumb-link">

                                   <?php 
                                     add_image_size( 'spec_thumb', 500, 300, true );
                                     the_post_thumbnail('spec_thumb');
                                    ?>
                                </a>
                            </div>
            
                            <div class="item-entry__text">    
                                <div class="item-entry__cat">
                                    <a href="category.html">Design</a> 
                                </div>

                                <h1 class="item-entry__title"><a href="single-standard.html"><?php the_title() ?></a></h1>
                                    
                                <div class="item-entry__date">
                                    <a href="single-standard.html"><?php the_time('j F Y') ?></a>
                                    <a href=""></a>
                                </div>
                            </div>
                        </div> <!-- item-entry -->
                    </article> <!-- end article -->
              <?php endwhile?>
            </div> <!-- end entries -->
        </div> <!-- end entries-wrap -->

        <div class="row pagination-wrap">
            <div class="col-full">
                <nav class="pgn" data-aos="fade-up">
                    <ul>
                        <li><a class="pgn__prev" href="#0">Prev</a></li>
                        <li><a class="pgn__num" href="#0">1</a></li>
                        <li><span class="pgn__num current">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li><a class="pgn__next" href="#0">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <
<!--                 <h3></h3>
                <div><strong></strong></div>
                <a href="<?php the_permalink() ?>">Далее</a>
  -->
<?php get_footer() ?>