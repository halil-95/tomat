<?php
  // Переменные
  $title = $args['data']['title'];
  $class = $args['class'];
  $styles_array = $args['data']['style'];
  $styles_map = array_map(function ($term) {
    return $term->name;
  }, $styles_array);
  $styles = implode(' ', $styles_map);
?>

<?php
  $templatePart = 'templates/flex/';
  switch ($class) {
    case 'flex_text_image':
      $class = 'text_image';
      $templatePart .= 'text_image';
      break;
    default:
      $class = 'deafult';
  }
?>

<section class="section<?php echo $styles ? ' ' . $styles : ''; ?>">
  <div class="container">
    <?php echo $title ? '<h2 class="section__title">' . $title . '</h2>' : ''; ?>
    <?php print_r($class);?>
    <?php get_template_part("templates/flex/hero-page"); ?>
  </div>
</section>