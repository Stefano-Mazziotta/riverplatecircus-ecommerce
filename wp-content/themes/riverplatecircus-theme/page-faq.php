<?php
/**
 * The template for displaying faq page.
 * @package riverplatecircus-theme
 */

get_header();
$faqItems = faq_get_items();
$lengthFaqItems = count($faqItems);
?>

<div class="faq-hero">
    <div class="container">
        <h1>Preguntas frecuentes</h1>
        <div class="line"></div>
    </div>
</div>

<section class="faq-section">
    <div class="section__container">

        <?php foreach ($faqItems as $key => $faqItem) { 
            
            $isLastItem = $lengthFaqItems - 1 == $key;
            $classLastItem = $isLastItem ? "last-item" : "";
            ?>

            <div class="expand-wrap">
                <div class="question-wrap">
                    <h4 class="status-expand">+</h4>
                    <h4 class="expand__question"> <?php echo $faqItem->question ?></h4>
                </div>  
                <div class="expand__answer <?php echo $classLastItem ?>">
                    <p><?php echo $faqItem->answer ?></p>
                </div>
            </div>

        <?php }?>  

    </div>
</section><!-- #main -->

<?php

get_footer();