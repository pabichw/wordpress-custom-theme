<!DOCTYPE html>
<html lang='pl'>
<head>
    <title>Gabinet Weterynarii Łódź</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <?php echo get_header()?>

    <section class="panel welcome-section">
        <div class="panel__bckg-img">
            <!-- <div class="parallax-window" data-parallax="scroll" data-image-src="/path/to/image.jpg"></div> -->
            <?php main_image()?>
            <div class="panel__darklayer"></div>
        </div>
        <main class="panel__content welcome-section__content">
            <div class="content__title" data-aos="fade-down" data-aos-duration="1000">
                <?php welcome_title(); ?>
            </div>
            <div class="separator"></div>
            <div class="content__subtitle" data-aos="fade-up" data-aos-duration="1000">
                <?php welcome_subtitle(); ?>
            </div>
            <div class="content__button-wrapper" data-aos="fade-up" data-aos-duration="1300">
                <button class="button button--primary" ahref="#kontakt">Kontakt</button>
            </div>
        </main>
    </section>
    <section id="o-nas" class="panel about-section">
        <main class="panel__content about-section__content">
            <article class="about-article">
                <div class="about-article__main" data-aos="fade-up" data-aos-duration="1200">
                    <div class="article__title">
                        <?php about_panel_title() ?>
                    </div>  
                    <div class="article__description">
                        <?php about_panel_desc() ?>
                    </div>
                </div>
                <div class="about-article__about-grid">
                    <div class="showcase-box" data-aos="fade-up" data-aos-duration="1200">
                        <?php about_grid_icon(1) ?>
                        <?php about_grid_content(1) ?>
                    </div>
                    <div class="showcase-box" data-aos="fade-up" data-aos-duration="1800">
                        <?php about_grid_icon(2) ?>
                        <?php about_grid_content(2) ?>
                    </div>
                    <div class="showcase-box" data-aos="fade-up" data-aos-duration="2200">
                        <?php about_grid_icon(3) ?>
                        <?php about_grid_content(3) ?>
                    </div>
                    <div class="showcase-box" data-aos="fade-up" data-aos-duration="2600">
                        <?php about_grid_icon(4) ?>
                        <?php about_grid_content(4) ?>
                    </div>
                </div>
            </article>
        </main>
    </section>
    <section id="o-nas-2" class="panel about-2-section">
        <main class="panel__content about-2-section__content">
            <article class="about-2-content__about-2-article" data-aos="fade-up" data-aos-duration="1200">
                <h3 class="about-2-article__about-2-title">O nas</h3>
                <div class="about-2-article__about-2-content">
                    <?php about_article() ?>
                </div>
                <div class="about-2-article__article-2-img-wrapper">
                    <?php about_article_img() ?>
                </div>
            </article>
        </main>
    </section>
    <section id="kontakt" class="panel contact-section">
        <main class="panel__content contact-section__content">
            <article class="contact-article">
                <div class="contact-article__contact-content-wrapper">
                    <div class="contact-content-wrapper__content-wrapper-chunk" data-aos="fade-right" data-aos-duration="1200">
                        <h3 class="contact-article__contact-title">
                            Kontakt
                        </h3>
                        <?php contact_info()?>
                    </div>
                    <div class="contact-content-wrapper__content-wrapper-chunk" data-aos="fade-left" data-aos-duration="1200">
                        <h3 class="contact-article__contact-title">
                            Napisz do nas
                        </h3>
                        <?php echo do_shortcode('[contact-form-7 id="58" title="Contact form 1"]') ?>
                    </div>
                </div>
            </article>
        </main>
    </section>
    <?php echo get_footer()?>
</body>
</html>
