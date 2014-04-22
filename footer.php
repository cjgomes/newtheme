<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package novacartografia
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-content alignleft">
            <ul>
                <h1>Contate-nos</h1>
                <li>Skype: novacartografia</li>
                <li>e-mail: pncsa.ufam@yahoo.com.br</li>
                <li>Facebook: facebook.com/PNCSA</li>
                <li>Endereço</li>                
            </ul>
        </div>
        
        <div class="footer-content alignleft">
            <h1>Notícias recentes</h1>
            <ul>
                <?php query_posts('showposts=3'); ?>

                <?php while (have_posts()) : the_post(); ?>
                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                <?php endwhile;?>                
            </ul>    
        </div>
        
        <div class="footer-content alignleft">
            <h1>Sobre</h1>
            <p>O Projeto Nova Cartografia Social da Amazônia tem como objetivo dar ensejo à auto-cartografia dos povos e comunidades tradicionais na Amazônia.</p>
            <p>&copy; 2014 <a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?>                 </a>. Todos os Direitos Reservados.<br />
            Desenvolvido em <a href="http://wordpress.org">WordPress</a>.</p>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
