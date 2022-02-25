<?php
$cta_title = get_field('cta_title', 'option');

if (!empty($cta_title) || have_rows('cta_first_block', 'option')) { ?>
    <section class="preference">
        <div class="container">
            <?php if (!empty($cta_title)) { ?>
                <h2 class="text-center"><?php echo $cta_title; ?></h2>
            <?php } ?>

            <div class="row justify-content-between preference__row">
                <?php if (have_rows('cta_first_block', 'option')) {
                    while (have_rows('cta_first_block', 'option')) {
                        the_row();
                        $cta_f_icon = get_sub_field('cta_f_icon');
                        $cta_f_title = get_sub_field('cta_f_title');
                        $cta_f_subtitle = get_sub_field('cta_f_subtitle'); ?>

                        <div class="col-md-5">
                            <div class="preference__card preference__card-1 d-flex flex-column">
                                <?php
                                if (!empty($cta_f_icon)) {
                                    echo $cta_f_icon;
                                }

                                if (!empty($cta_f_title)) { ?>
                                    <p class="preference__card-text text-center text-uppercase"><?php echo $cta_f_title; ?>
                                        <?php if (!empty($cta_f_subtitle)) { ?>
                                            <br>
                                            <span><?php echo $cta_f_subtitle; ?></span>
                                        <?php } ?>
                                    </p>
                                <?php } ?>
                            </div>
                        </div>
                    <?php }
                }

                if (have_rows('cta_second_block', 'option')) {
                    while (have_rows('cta_second_block', 'option')) {
                        the_row();
                        $cta_s_icon = get_sub_field('cta_s_icon');
                        $cta_s_title = get_sub_field('cta_s_title');
                        $cta_s_subtitle = get_sub_field('cta_s_subtitle');
                        $cta_s_bottom_text = get_sub_field('cta_s_bottom_text'); ?>

                        <div class="col-md-5">
                            <div class="preference__card preference__card-2 d-flex flex-column justify-content-between">
                                <div class="d-flex m-auto">
                                    <?php if (!empty($cta_s_icon)) {
                                        echo $cta_s_icon;
                                    } ?>
                                    <p class="preference__card-title">CLICK<span class="color-green">&</span> <br>
                                        <span class="color-gray">COLLECT</span></p>
                                </div>
                                <?php if (!empty($cta_s_title)) { ?>
                                    <p class="preference__card-text text-center text-uppercase"><?php echo $cta_s_title; ?>
                                        <?php if (!empty($cta_s_subtitle)) { ?>
                                            <br>
                                            <span><?php echo $cta_s_subtitle; ?></span>
                                        <?php } ?>
                                    </p>
                                <?php }

                                if (!empty($cta_s_bottom_text)) { ?>
                                    <p class="w-100 text-center text-uppercase bg-gray text-white">
                                        <?php echo $cta_s_bottom_text; ?>
                                    </p>
                                <?php } ?>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    </section>
<?php } ?>