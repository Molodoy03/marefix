<?php
$subscribe_title = get_field('subscribe_title', 'option');
$subscribe_year = get_field('subscribe_year', 'option');
$subscribe_form = get_field('subscribe_form', 'option');

if (!empty($subscribe_form)) { ?>
    <div class="subscribe bg-gray">
        <?php if (!empty($subscribe_title) || !empty($subscribe_year)) { ?>
            <div class="subscribe__block d-block d-sm-block d-md-block d-lg-none">
                <div class="container">
                    <?php if (!empty($subscribe_title)) { ?>
                        <p class="subscribe__title color-neon"><?php echo $subscribe_title; ?></p>
                    <?php }

                    if (!empty($subscribe_year)) { ?>
                        <p class="subscribe__year"><?php echo $subscribe_year; ?></p>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <div class="container subscribe__wrapper">
            <?php if (!empty($subscribe_title) || !empty($subscribe_year)) { ?>
                <div class="subscribe__block d-none d-sm-none d-md-none d-lg-block">
                    <?php if (!empty($subscribe_title)) { ?>
                        <p class="subscribe__title color-neon"><?php echo $subscribe_title; ?></p>
                    <?php }

                    if (!empty($subscribe_year)) { ?>
                        <p class="subscribe__year"><?php echo $subscribe_year; ?></p>
                    <?php } ?>
                </div>
            <?php }
            echo do_shortcode($subscribe_form); ?>
        </div>
    </div>
<?php } ?>