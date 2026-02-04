<?php

/**
 * The single post template.
 * Muestra el contenido completo de una entrada y sus comentarios.
 *
 * @package bootstrap-basic4
 */

get_header(); ?>


<style type="text/css">
    /* Tipografía personalizada */
    .f-informal {
        font-family: 'Poppins', sans-serif;
        letter-spacing: 0.5px;
    }

    .f-serius {
        font-family: 'Roboto', serif;
    }

    /* Colores de marca */
    .color-primary {
        color: #007bff;
        /* Azul Bootstrap */
    }

    /* Card hover */
    .card:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
    }

    /* Botón */
    .btn-outline-primary {
        border-width: 2px;
        font-weight: 600;
    }
</style>

<div class="container my-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- Card del producto -->
                    <div class="card mb-4 border-0 shadow-lg rounded">

                        <?php if (get_field('imagen_producto')): ?>
                            <img src="<?php the_field('imagen_producto'); ?>"
                                class="card-img-top img-fluid rounded-top"
                                alt="<?php the_field('titulo_producto'); ?>">
                        <?php elseif (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('large', array('class' => 'card-img-top img-fluid rounded-top')); ?>
                        <?php endif; ?>

                        <div class="card-body p-4">
                            <!-- Título -->
                            <h2 class="card-title display-6 fw-bold mb-3 f-informal color-primary">
                                <?php the_field('titulo_producto'); ?>
                            </h2>

                            <!-- Descripción corta -->
                            <?php if (get_field('descripcion_corta')): ?>
                                <p class="card-text text-muted lead f-serius">
                                    <?php the_field('descripcion_corta'); ?>
                                </p>
                            <?php endif; ?>

                            <!-- Precio -->
                            <p class="h4 text-success fw-bold mb-3">
                                💲 <?php the_field('precio_producto'); ?>
                            </p>

                            <!-- Descripción larga -->
                            <?php if (get_field('descripcion_larga')): ?>
                                <div class="mt-3 text-secondary f-serius">
                                    <?php the_field('descripcion_larga'); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Stock -->
                            <?php if (get_field('stock_producto')): ?>
                                <p class="mt-3">
                                    <span class="badge bg-info text-dark">
                                        Stock disponible: <?php the_field('stock_producto'); ?> unidades
                                    </span>
                                </p>
                            <?php endif; ?>

                            <!-- Botón de pedido -->
                            <?php
                            $link = get_field('link_ref_producto');
                            if ($link):
                                $link_url    = isset($link['url']) ? esc_url($link['url']) : '';
                                $link_title  = isset($link['title']) ? esc_html($link['title']) : 'Enlace';
                                $link_target = isset($link['target']) ? esc_attr($link['target']) : '_self';
                                $rel_attr    = ($link_target === '_blank') ? 'rel="noopener"' : '';
                            ?>
                                <a href="<?php echo $link_url; ?>"
                                    class="btn btn-lg btn-outline-primary mt-4 px-5"
                                    target="<?php echo $link_target; ?>"
                                    <?php echo $rel_attr; ?>>
                                    <?php echo $link_title; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Contenido del post -->
                    <div class="mt-5">
                        <div class="p-4 bg-light rounded shadow-sm">
                            <?php the_content(); ?>
                        </div>
                    </div>

                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_footer(); ?>