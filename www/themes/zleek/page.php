<?php theme_include('header'); ?>

<!-- If page is set to home, show latest post -->
<?php if(is_homepage()): ?>

  <section class="article">
    <img src="<?php echo theme_url('/img/loading.gif'); ?>" class="loading" alt="Loading...">
    <div class="overlay"></div>
    <div class="featured-image" style="background-image: url(<?php echo page_custom_field('featured-image', ''); ?>);"></div>
    <article class="wrap post">
      <header class="post-header">
        <hgroup>
          <h1 ><?php echo page_title(); ?></h1>
          <!--<p class="lead"><?php echo article_description(); ?></p> -->
        </hgroup>
      </header>
      <?php echo page_content(); ?>
    </article>
  </section>

<?php else: ?>

  <section class="article archive">
    <article class="wrap post">
      <h1><?php echo page_title(); ?></h1>
      <?php echo page_content(); ?>

    </article>
  </section>

<?php endif; ?>

<?php theme_include('footer'); ?>
