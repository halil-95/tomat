<?php 

$text = get_sub_field('text');
if ($text) : ?>
    <div class="animations">
        <div class="animations__block">
            <wc-marquee >
            <?= $text;?>
            </wc-marquee>
        </div>
    </div>
<?php endif; ?>


