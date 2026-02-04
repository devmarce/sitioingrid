<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if( function_exists('acf_add_local_field_group') ):

// Novedades Instagram
if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group(array(
        'key' => 'group_feed_instagram',
        'title' => 'Novedades Instagram 📸',
        'fields' => array(
            array(
                'key' => 'field_titulo',
                'label' => 'Título del componente',
                'name' => 'title_feed_instagram',
                'type' => 'text',
                'instructions' => 'Título para este componeten (opcional)',
                'required' => 0,
            ),
            array(
                'key' => 'field_feed_instagram',
                'label' => 'Shortcode (Smash Balloon Social Photo Feed shortcode)',
                'name' => 'shortcode_feed_instagram',
                'type' => 'text',
                'instructions' => 'Shortcode del plugin: Smash Balloon Social Photo Feed',
                'required' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-configuracion',
                ),
            ),
        ),
        'menu_order' => 2,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'active' => 1,
        'description' => 'Campos para cargar shortcode del feed Instagram',
    ));

endif;

acf_add_local_field_group(array(
    'key' => 'group_og_image',
    'title' => 'Configuración OG',
    'fields' => array(
        array(
            'key' => 'field_og_image',
            'label' => 'Imagen OG',
            'name' => 'og_image',
            'type' => 'image',
            'instructions' => 'Selecciona la imagen que se usará en las etiquetas Open Graph (og:image).',
            'required' => 0,
            'return_format' => 'array', // devuelve array con url, id, etc.
            'preview_size' => 'medium',
            'library' => 'all',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-configuracion',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
));

endif;

if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group(array(
        'key' => 'group_redes_sociales',
        'title' => '🌐 Redes Sociales',
        'fields' => array(
            // Instagram
            array(
                'key' => 'field_instagram_link',
                'label' => 'Instagram Link',
                'name' => 'instagram_link',
                'type' => 'link',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_instagram_text',
                'label' => 'Instagram Texto',
                'name' => 'instagram_text',
                'type' => 'text',
                'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_instagram_icon',
                'label' => 'Instagram Ícono',
                'name' => 'instagram_icon',
                'type' => 'image',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
            ),
            array(
                'key' => 'field_instagram_checkbox',
                'label' => 'Instagram Checkbox',
                'name' => 'instagram_checkbox',
                'type' => 'checkbox',
                'choices' => array(
                    'mostrar' => 'Mostrar',
                ),
                'wrapper' => array('width' => '25'),
            ),

            // Facebook
            array(
                'key' => 'field_facebook_link',
                'label' => 'Facebook Link',
                'name' => 'facebook_link',
                'type' => 'link',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_facebook_text',
                'label' => 'Facebook Texto',
                'name' => 'facebook_text',
                'type' => 'text',
                'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_facebook_icon',
                'label' => 'Facebook Ícono',
                'name' => 'facebook_icon',
                'type' => 'image',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
            ),
            array(
                'key' => 'field_facebook_checkbox',
                'label' => 'Facebook Checkbox',
                'name' => 'facebook_checkbox',
                'type' => 'checkbox',
                'choices' => array(
                    'mostrar' => 'Mostrar',
                ),
                'wrapper' => array('width' => '25'),
            ),

            // WhatsApp
            array(
                'key' => 'field_whatsapp_link',
                'label' => 'WhatsApp Link',
                'name' => 'whatsapp_link',
                'type' => 'link',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_whatsapp_text',
                'label' => 'WhatsApp Texto',
                'name' => 'whatsapp_text',
                'type' => 'text',
                'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_whatsapp_icon',
                'label' => 'WhatsApp Ícono',
                'name' => 'whatsapp_icon',
                'type' => 'image',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
            ),
            array(
                'key' => 'field_whatsapp_checkbox',
                'label' => 'WhatsApp Checkbox',
                'name' => 'whatsapp_checkbox',
                'type' => 'checkbox',
                'choices' => array(
                    'mostrar' => 'Mostrar',
                ),
                'wrapper' => array('width' => '25'),
            ),

            // Email
            array(
                'key' => 'field_email_link',
                'label' => 'Email Link',
                'name' => 'email_link',
                'type' => 'link',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_email_text',
                'label' => 'Email Texto',
                'name' => 'email_text',
                'type' => 'text',
                'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_email_icon',
                'label' => 'Email Ícono',
                'name' => 'email_icon',
                'type' => 'image',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
            ),
            array(
                'key' => 'field_email_checkbox',
                'label' => 'Email Checkbox',
                'name' => 'email_checkbox',
                'type' => 'checkbox',
                'choices' => array(
                    'mostrar' => 'Mostrar',
                ),
                'wrapper' => array('width' => '25'),
            ),

            // YouTube
            array(
                'key' => 'field_youtube_link',
                'label' => 'YouTube Link',
                'name' => 'youtube_link',
                'type' => 'link',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_youtube_text',
                'label' => 'YouTube Texto',
                'name' => 'youtube_text',
                'type' => 'text',
                'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_youtube_icon',
                'label' => 'YouTube Ícono',
                'name' => 'youtube_icon',
                'type' => 'image',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
            ),
            array(
                'key' => 'field_youtube_checkbox',
                'label' => 'YouTube Checkbox',
                'name' => 'youtube_checkbox',
                'type' => 'checkbox',
                'choices' => array(
                    'mostrar' => 'Mostrar',
                ),
                'wrapper' => array('width' => '25'),
            ),

            // Especial
            array(
                'key' => 'field_especial_link',
                'label' => 'Especial Link',
                'name' => 'especial_link',
                'type' => 'link',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_especial_text',
                'label' => 'Especial Texto',
                'name' => 'especial_text',
                'type' => 'text',
                'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_especial_icon',
                'label' => 'Especial Ícono',
                'name' => 'especial_icon',
                'type' => 'image',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
            ),
            array(
                'key' => 'field_especial_checkbox',
                'label' => 'Especial Checkbox',
                'name' => 'especial_checkbox',
                'type' => 'checkbox',
                'choices' => array(
                    'mostrar' => 'Mostrar',
                ),
                'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_especial2_link',
                'label' => 'Especial 2 Link',
                'name' => 'especial2_link',
                'type' => 'link',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_especial2_text',
                'label' => 'Especial Texto',
                'name' => 'especial2_text',
                'type' => 'text',
                'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_especial2_icon',
                'label' => 'Especial 2 Ícono',
                'name' => 'especial2_icon',
                'type' => 'image',
                'wrapper' => array('width' => '25'),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
            ),
            array(
                'key' => 'field_especial2_checkbox',
                'label' => 'Especial 2 Checkbox',
                'name' => 'especial2_checkbox',
                'type' => 'checkbox',
                'choices' => array(
                    'mostrar' => 'Mostrar',
                ),
                'wrapper' => array('width' => '25'),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-configuracion',
                ),
            ),
        ),
    ));
endif;

if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group(array(
        'key' => 'group_5e3c09gfgfyh9f99c9c4',
        'title' => '📍Enlaces especiales del Header',
        'fields' => array(
            array(
                'key' => 'field_whatsapp_number',
                'label' => 'Número de WhatsApp',
                'name' => 'whatsapp_number_header',
                'type' => 'text',
                'instructions' => 'Ingresar el número en formato. Ej: 541122000025',
                'required' => 1,
                'wrapper' => array(
                    'width' => '25',
                ),
            ),
            array(
                'key' => 'field_whatsapp_message',
                'label' => 'Mensaje',
                'name' => 'whatsapp_message_header',
                'type' => 'textarea',
                'instructions' => 'Texto se puede armar en <a href="https://crear.wa.link/" target="_blank">Aquí 👈</a>',
                'required' => 0,
                'wrapper' => array(
                    'width' => '25',
                ),
                'rows' => 3, // altura inicial del textarea
            ),
            array(
                'key' => 'field_linkespecial',
                'label' => 'Link Especial 🔥',
                'name' => 'link_especial',
                'type' => 'link',
                'instructions' => 'Seleccione o ingrese el link Especial',
                'required' => 0,
                'wrapper' => array(
                    'width' => '25',
                ),
                'return_format' => 'array',
            ),
            array(
                'key' => 'field_iconespecial',
                'label' => 'Icono Especial 🖼️',
                'name' => 'icono_especial',
                'type' => 'image',
                'instructions' => 'Seleccione o suba la imagen para el icono del link (32 por 32 píxeles)',
                'required' => 0,
                'wrapper' => array(
                    'width' => '25',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-configuracion',
                ),
            ),
        ),
    ));
endif;


if (function_exists('acf_add_local_field_group')):
    // Campos ACF de Sucursales y WhatsApp del header
    acf_add_local_field_group(array(
        'key' => 'group_5e3c09gfgfyh9f99c9ew',
        'title' => '📍Número de WhatsApp para la consulta de los productos',
        'fields' => array(
            array(
                'key' => 'field_whatsapp_delicias',
                'label' => 'Número de WhatsApp',
                'name' => 'whatsapp_delicias',
                'type' => 'text',
                'instructions' => 'Ingresar el número en formato. Ej: 541122000025',
                'required' => 1,
                'wrapper' => array(
                    'width' => '100',
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-configuracion',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));
endif;


if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group(array(
        'key' => 'group_5e3c09gfgfyh9f99c9c5',
        'title' => '📍Enlaces del Footer',
        'fields' => array(
            array(
                'key' => 'field_footer_links_repeater',
                'label' => 'Enlaces para agergar en el Footer',
                'name' => 'footer_links',
                'type' => 'repeater',
                'instructions' => 'Agrega hasta 6 enlaces legales para el footer',
                'required' => 0,
                'collapsed' => 'field_footer_link',
                'min' => 0,
                'max' => 6, // límite de filas
                'layout' => 'row',
                'button_label' => '➕ Agregar enlace',
                'sub_fields' => array(
                    array(
                        'key' => 'field_footer_link',
                        'label' => '↗ Link Footer',
                        'name' => 'link',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 1,
                        'return_format' => 'array',
                        'wrapper' => array(
                            'width' => '100',
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-configuracion',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));
endif;


// ============================
// 📑 Formulario de Cotización
// ============================
if (function_exists('acf_add_local_field_group')):

    // Obtenemos todos los formularios de Contact Form 7
    $cf7_forms = array();
    if (class_exists('WPCF7_ContactForm')) {
        $forms = WPCF7_ContactForm::find(array(
            'orderby' => 'title',
            'order'   => 'ASC',
        ));
        if ($forms) {
            foreach ($forms as $form) {
                $cf7_forms[$form->id()] = $form->title();
            }
        }
    }

    acf_add_local_field_group(array(
        'key' => 'group_formularios',
        'title' => '📍 Asignación de Formularios',
        'fields' => array(
            array(
                'key' => 'field_formulario_cotizacion',
                'label' => '▤ Formulario de Cotización',
                'name' => 'formulario_cotizacion',
                'type' => 'select',
                'instructions' => 'Selecciona el formulario de Contact Form 7 que se usará para la cotización',
                'required' => 0,
                'choices' => $cf7_forms,
                'ui' => 1,
                'ajax' => 0,
                'return_format' => 'value', // devuelve el ID del formulario
                'wrapper' => array(
                    'width' => '100',
                ),
            ),
            array(
                'key' => 'field_formulario_financiacion',
                'label' => '▤ Formulario de Financiación',
                'name' => 'formulario_financiacion',
                'type' => 'select',
                'instructions' => 'Selecciona el formulario de Contact Form 7 que se usará para la finaciación',
                'required' => 0,
                'choices' => $cf7_forms,
                'ui' => 1,
                'ajax' => 0,
                'return_format' => 'value', // devuelve el ID del formulario
                'wrapper' => array(
                    'width' => '100',
                ),
            ),
            array(
                'key' => 'field_formulario_contacto',
                'label' => '▤ Formulario de Contacto',
                'name' => 'formulario_contacto',
                'type' => 'select',
                'instructions' => 'Selecciona el formulario de Contact Form 7 que se usará en la sección Contacto',
                'required' => 0,
                'choices' => $cf7_forms,
                'ui' => 1,
                'ajax' => 0,
                'return_format' => 'value', // devuelve el ID del formulario
                'wrapper' => array(
                    'width' => '100',
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-configuracion',
                ),
            ),
        ),
        'menu_order' => 2,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'active' => 1,
        'description' => '',
    ));

endif;

// =========================
// Render en frontend
// =========================
// Ejemplo de uso en tu template:
// $form_id = get_field('formulario_cotizacion', 'option');
// if ($form_id) {
//     echo do_shortcode('[contact-form-7 id="' . esc_attr($form_id) . '"]');
// } else {
//     echo '<p>No se ha seleccionado ningún formulario de cotización.</p>';
// }