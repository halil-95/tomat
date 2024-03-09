<?php $social_network = get_field('social_network', 'option'); ?>
<?php if ($social_network) : ?>
  <?php foreach ($social_network as $icon) : ?>
    <i  onmouseover="changeClassSocial(this)" onmouseout="removeClassSocial(this)" class="<?= $icon['icon']; ?>"></i>
  <?php endforeach; ?>
<?php endif; ?>


