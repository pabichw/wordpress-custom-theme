<?php 
    
    /*
    Template Name: Cennik
    */
            
?>
<!DOCTYPE html>
<html lang='pl'>
<head>
    <title>Gabinet Weterynarii Łódź</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <?php echo get_header()?>
    <section id="cennik" class="panel price-list-section">
        <main class="panel__content price-list-section__content">
            <article class="price-list-article" data-aos="fade-right" data-aos-duration="1200">
                <h2>Cennik usług</h2>
                <?php pricelist_info() ?>
            </article>
        </main>
    </section>
    <?php echo get_footer()?>
</body>
</html>