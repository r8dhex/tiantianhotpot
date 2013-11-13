<?php theme_include('header'); ?>

<?php 
$noimage = false;
if ( !article_custom_field('featured-image',false) ) {
  $noimage = true;
} 
?>

<section class="article">
    <?php if( $noimage == false ): // hide if no featured-image ?>

      <img src="<?php echo theme_url('/img/loading.gif'); ?>" class="loading" alt="Loading...">
      <div class="overlay"></div>
      <div class="featured-image" style="background-image: url(<?php echo article_custom_field('featured-image', ''); ?>);"></div>

    <?php endif; ?>

    <article class="wrap post">
      <header class="post-header <?= ($noimage===true)?"no-image":""; ?>">
        <hgroup>
          <?php if( category_id() != 1 ): // hide category, if uncategorized ?> 
            <p class="category"><?php echo category_title(); ?></p>
          <?php endif; ?>
          <h1><?php echo article_title(); ?></h1>
          <p class="lead"><?php echo article_description(); ?></p>
        </hgroup>
      </header>
      <?php echo article_markdown(); ?>
      <?php /*
      <div class="fb-comments" data-href="<?php echo "http://"+$_SERVER["HTTP_HOST"]+article_url(); ?>" data-numposts="8" data-width="720"></div>
      */ ?>
    </article>


<?php /*
    <p class="meta">This is my <?php echo numeral(article_id()); ?> article and is <?php echo count_words(article_html()); ?> words long. <?php echo article_custom_field('attribution'); ?></p>
    <a href="http://twitter.com/share?url=<?php echo full_url(); ?><?php echo current_url(); ?>&text=<?php echo article_title(); ?>&via=<?php echo twitter_account(); ?>" class="button">Tweet This</a>
*/ ?>

</section>

<?php theme_include('footer'); ?>
