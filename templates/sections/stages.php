<?php
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $steps = 'step';
?>
<?php if($title or $subtitle): ?>
  <div class="section__header">
    <?php if($title):?>
      <h2 class="section__title"><?= $title; ?></h2>
    <?php endif; ?>
    <?php if($subtitle): ?>
      <div class="section__subtitle"> <?= $subtitle; ?> </div>
    <?php endif; ?>
  </div>
<?php endif; ?>
<?php if( have_rows($steps) ): ?>
  <div class="steps">
    <ul>
      <?php $i = 1; while ( have_rows($steps) ) : the_row(); ?>
        <li class="steps__item">
          <?php
            $title = get_sub_field('title');
            $text = get_sub_field('text');
          ?>
          <div class="steps__count">   <span><?= $i; ?>  </span>   </div>
          <div class="steps__content">
            <div class="steps__title"><strong><?= $title; ?></strong></div>
            <?php if($text): ?>
              <div class="steps__text page_text"><?= $text; ?></div>
            <?php endif; ?>
          </div>
        </li>
      <?php $i++; endwhile; ?>
    </ul>
  </div>
<?php endif; ?>