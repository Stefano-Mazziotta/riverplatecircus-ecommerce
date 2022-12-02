<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package riverplatecircus-theme
 */

get_header();
?>


<div class="faq-hero">
    <div class="container">
        <h1>Preguntas frecuentes</h1>
        <div class="line"></div>
    </div>
</div>

<section class="faq-section">
    <div class="section__container">
        
        <div class="expand-wrap">
            <div class="question-wrap">
                <h4 class="status-expand">+</h4>
                <h4 class="expand__question">¿Para qué edad es la entrada infantil?</h4>
            </div>  
            <div class="expand__answer">
                <p>La entrada infantil es de 1 a 10 años.</p>
            </div>
        </div>

        <div class="expand-wrap">
            <div class="question-wrap">
                <h4 class="status-expand">+</h4>
                <h4 class="expand__question">¿Cuanto dura la función?</h4>
            </div>  
            <div class="expand__answer">
                <p>La función dura aproximadamente 1 hora y 15 minutos.</p>
            </div>
        </div>

        <div class="expand-wrap">
            <div class="question-wrap">
                <h4 class="status-expand">+</h4>
                <h4 class="expand__question">¿Se pueden entrar los cochecitos de bebés?</h4>
            </div>  
            <div class="expand__answer">
                <p>Los Cochecitos se deberán dejar a la entrada de la carpa donde quedarán protegidos hasta recuperarlos a la salida.</p>
            </div>
        </div>

        <div class="expand-wrap">
            <div class="question-wrap">
                <h4 class="status-expand">+</h4>
                <h4 class="expand__question">¿Las entradas son enumeradas?</h4>
            </div>  
            <div class="expand__answer">
                <p>Únicamente las entradas adquiridas para el palco son numeradas, por el contrario las entradas generales son por orden de llegada.</p>
            </div>
        </div>

        <div class="expand-wrap">
            <div class="question-wrap">
                <h4 class="status-expand">+</h4>
                <h4 class="expand__question">¿El espectáculo se suspende por lluvia?</h4>
            </div>  
            <div class="expand__answer">
                <p>Depende del nivel de gravedad de la tormenta. Generalmente la función no se suspende por lluvia.</p>
            </div>
        </div>
        
        <div class="expand-wrap">
            <div class="question-wrap">
                <h4 class="status-expand">+</h4>
                <h4 class="expand__question">¿Hay descuento para familias numerosas?</h4>
            </div>  
            <div class="expand__answer">
                <p>No, no hay descuentos para familias numerosas.</p>
            </div>
        </div>

        
    </div>
</section><!-- #main -->

<?php

get_footer();