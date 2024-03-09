<?php $work_time = get_field('work_time', 'option'); ?>
<?php if ($work_time) : ?>
        <i class="icon-clock"></i><?= $work_time?></br>
<?php endif; ?>