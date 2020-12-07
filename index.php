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
    <section class="panel offer-section">
        <main class="panel__content offer-section__content">
            <article class="offer-article">
                <div class="offer-article__main">
                    <div class="article__title">
                        <?php offer_panel_title() ?>
                    </div>  
                    <div class="article__description">
                        <?php offer_panel_desc() ?>
                    </div>
                </div>
                <div class="offer-article__offer-grid">
                    <div class="offer-grid__box">1</div>
                    <div class="offer-grid__box">2</div>
                    <div class="offer-grid__box">3</div>
                    <div class="offer-grid__box">4</div>
                </div>
            </article>
        </main>
    </section>
    <?php echo get_footer()?>
</body>
</html>
