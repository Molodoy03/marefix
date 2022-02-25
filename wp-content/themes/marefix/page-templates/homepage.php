<?php
/* Template name: Homepage */
echo get_header(); ?>

<?php
$products_subtitle = get_field('products_subtitle');
$products_title = get_field('products_title');
$products_description = get_field('products_description');

if (have_rows('products_list') || !empty($products_title) || !empty($products_description)) { ?>
    <section id="product" class="products">
        <div class="products__wrapper container">
            <?php if (!empty($products_subtitle)) { ?>
                <p class="anchor-text green-underline anchor-dark"><?php echo $products_subtitle; ?></p>
            <?php }

            if (!empty($products_title)) {
                ?>
                <h1><?php echo $products_title; ?></h1>
            <?php }

            if (!empty($products_description)) { ?>
                <p class="products__info">
                    <?php echo $products_description; ?>
                </p>
            <?php }

            $i = 1;
            if (have_rows('products_list')) { ?>
                <ul class="products__list">
                    <?php while (have_rows('products_list')) {
                        the_row();
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $link = get_sub_field('link'); ?>

                        <li>
                            <p class="products__list-title"><span
                                        class="color-neon">0<?php echo $i; ?></span> <?php echo $title; ?></p>

                            <?php if (!empty($description)) { ?>
                                <p class="products__list-info">
                                    <?php echo $description; ?>
                                </p>
                            <?php }

                            if (!empty($link)) { ?>
                                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"
                                   class="products__link"><?php echo $link['title']; ?></a>
                            <?php } ?>
                        </li>
                        <?php $i++;
                    } ?>
                </ul>
            <?php } ?>
        </div>
        <form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>"
              class="products__search d-none d-sm-none d-md-none d-lg-block">
            <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="w-100"
                   placeholder="<?php pll_e('Buscar'); ?>">
            <button type="submit" class="search-button position-absolute">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M17.0753 14.835C20.0763 10.5974 19.0726 4.72945 14.835 1.72919C10.5973 -1.27107 4.72945 -0.268117 1.72919 3.97025C-1.27107 8.2079 -0.268117 14.0751 3.97025 17.0753C6.99488 19.2167 10.9938 19.3816 14.184 17.4976L21.1158 24.3878C21.8643 25.1757 23.1096 25.2072 23.8974 24.4588C24.6853 23.7111 24.7169 22.4658 23.9691 21.6779C23.9455 21.6528 23.9225 21.6299 23.8974 21.6062L17.0753 14.835ZM9.39653 15.4774C6.04785 15.4781 3.33291 12.7653 3.33076 9.4166C3.33005 6.06792 6.04283 3.35299 9.39223 3.35156C12.7366 3.35012 15.4501 6.0586 15.4566 9.40298C15.4623 12.7524 12.7509 15.4716 9.40083 15.4774C9.39939 15.4774 9.39868 15.4774 9.39653 15.4774Z"
                            fill="#575756"/>
                </svg>
            </button>
        </form>
    </section>
<?php }

$about_us_subtitle = get_field('about_us_subtitle');
$about_us_title = get_field('about_us_title');
$about_us_content = get_field('about_us_content');

if (!empty($about_us_title) || !empty($about_us_content)) { ?>
    <section id="us" class="us bg-green">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="us__wrapper">
                        <?php if (!empty($about_us_subtitle)) { ?>
                            <p class="anchor-text white-underline anchor-light"><?php echo $about_us_subtitle; ?></p>
                        <?php }

                        if (!empty($about_us_title)) { ?>
                            <h2 class="color-neon"><?php echo $about_us_title; ?></h2>
                        <?php }

                        if (!empty($about_us_content)) { ?>
                            <p class="us__info text-white">
                                <?php echo $about_us_content; ?>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }

$company_commitment_title = get_field('company_commitment_title');
$company_commitment_content = get_field('company_commitment_content');

if (!empty($company_commitment_title) || !empty($company_commitment_content)) { ?>
    <section class="commitment text-white">
        <div class="container">
            <?php if (!empty($company_commitment_title)) { ?>
                <h2><?php echo $company_commitment_title; ?></h2>
            <?php }

            if (!empty($company_commitment_content)) { ?>
                <p class="commitment-text">
                    <?php echo $company_commitment_content; ?>
                </p>
            <?php } ?>
        </div>
    </section>
<?php } ?>

<?php
$services_subtitle = get_field('services_subtitle');
$services_title = get_field('services_title');

if (have_rows('services_list') || !empty($services_title)) { ?>
    <section id="services" class="services bg-gray">
        <div class="container">
            <?php if (!empty($services_subtitle)) { ?>
                <p class="anchor-text green-underline anchor-light"><?php echo $services_subtitle; ?></p>
            <?php }

            if (!empty($services_title)) { ?>
                <h2 class="text-white"><?php echo $services_title; ?></h2>
            <?php }

            if (have_rows('services_list')) { ?>
                <div class="services__card services__card-big">
                    <?php while (have_rows('services_list')) {
                        the_row();

                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $content = get_sub_field('content'); ?>

                        <div class="services__card-wrapper">
                            <?php if (!empty($icon)) { ?>
                                <div>
                                    <div class="bg-green">
                                        <?php echo $icon; ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="bg-gray-light d-flex">
                                <h3>
                                    <?php echo $title; ?>
                                </h3>
                            </div>
                            <?php if (!empty($content)) { ?>
                                <div class="bg-gray-light d-flex">
                                    <p class="m-auto">
                                        <?php echo $content; ?>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php }

$advantages_subtitle = get_field('advantages_subtitle');
$advantages_title = get_field('advantages_title');

if (have_rows('advantages_list') || !empty($advantages_title)) { ?>
    <section id="advantages" class="advantages bg-green">
        <div class="container">
            <?php if (!empty($advantages_subtitle)) { ?>
                <p class="anchor-text white-underline anchor-light"><?php echo $advantages_subtitle; ?></p>
            <?php }

            if (!empty($advantages_title)) { ?>
                <h2 class="text-white"><?php echo $advantages_title; ?></h2>
            <?php } ?>
        </div>

        <?php if (have_rows('advantages_list')) { ?>
            <div class="advantages__wrapper">
                <?php while (have_rows('advantages_list')) {
                    the_row();
                    $title = get_sub_field('title');
                    $info = get_sub_field('info');
                    $image = get_sub_field('image'); ?>

                    <div class="advantages__slide">
                        <?php if (!empty($image)) {
                            echo wp_get_attachment_image($image, 'full');
                        } ?>

                        <div class="advantages__slide-text">
                            <p class="advantages__slide-title"><?php echo $title; ?></p>
                            <?php if (!empty($info)) { ?>
                                <p class="advantages__slide-info">
                                    <?php echo $info; ?>
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </section>
<?php }

get_template_part('template-parts/subscribe');
get_template_part('template-parts/preference');

echo get_footer(); ?>
