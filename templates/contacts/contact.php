<?php $contact_mean = get_field('phone', 'option'); ?>
<?php if ($contact_mean) : ?>
    <?php foreach ($contact_mean as $contact) : ?>
        <span onmouseover="changeClassSocial(this)" onmouseout="removeClassSocial(this)">
            <i class="icon-call"></i>
            <a href="tel: <?= $contact["phone"] . " : " . $contact["subscribe"] ?>">+7(999)888-77-66</a></br>
        </span>
    <?php endforeach; ?>
<?php endif; ?>