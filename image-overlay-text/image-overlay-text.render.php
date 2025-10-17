<?php
if (!defined('ABSPATH')) exit;

$block_id = !empty($block['anchor']) ? esc_attr($block['anchor']) : '';
$position = get_field('position');

$allowed_blocks = array(
    'core/columns',
    'core/heading',
    'core/list',
    'core/paragraph',
);

$template = array(
    array(
        'core/columns',
        array(
            'style' => array(
                'color' => array(
                    'background' => '#efefef'
                )
            )
        ),
        array(
            array(
                'core/column',
                array(),
                array(
                    array(
                        'core/image',
                        array(
                            'url' => esc_url(get_stylesheet_directory_uri() . '/assets/images/fpo.png'),
                            'className' => 'featured-content-with-images__image'
                        ),
                    ),
                )
            ),
            array(
                'core/column',
                array(),
                array(
                    array(
                        'core/heading',
                        array(
                            'level' => 2,
                            'content' => 'Your Dollar Supports',
                        ),
                    ),
                    array(
                        'core/list',
                        array(),
                        array(
                            array(
                                'core/list-item',
                                array(
                                    'content' => 'Lorem ipsum dolor sit amet',
                                ),
                            ),
                            array(
                                'core/list-item',
                                array(
                                    'content' => 'Consectetur adipiscing elit.',
                                ),
                            ),
                            array(
                                'core/list-item',
                                array(
                                    'content' => 'Duis vulputate quis purus eget dignissim',
                                ),
                            ),
                            array(
                                'core/list-item',
                                array(
                                    'content' => 'Lorem ipsum dolor sit amet',
                                ),
                            ),
                            array(
                                'core/list-item',
                                array(
                                    'content' => 'Duis vulputate quis purus eget dignissim',
                                ),
                            ),
                            array(
                                'core/list-item',
                                array(
                                    'content' => 'Consectetur adipiscing elit.',
                                ),
                            ),
                            array(
                                'core/list-item',
                                array(
                                    'content' => 'Lorem ipsum dolor sit amet',
                                ),
                            ),
                            array(
                                'core/list-item',
                                array(
                                    'content' => 'Duis vulputate quis purus eget dignissim',
                                ),
                            )
                        ),
                    ),
                )
            ),
        )
    ),
);
?>

<div <?php
echo wp_kses_data(
    get_block_wrapper_attributes(
        array_merge(
                array(
                'id' => 'image-overlay-text-' . $block_id, // Allow for id to pass-through
                'class' => 'image-overlay-text',
                'style' => '',
                ),
                (function_exists('add_lazy_load_to_get_block_wrapper_attributes') ? add_lazy_load_to_get_block_wrapper_attributes(basename(__FILE__)) : array())
            )
    )
);
?>>
    <div class="image-overlay-text__wrapper<?php if ($position): echo ' reverse'; endif; ?>">
        <InnerBlocks allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_blocks)) ?>"
                     template="<?php echo esc_attr(wp_json_encode($template)) ?>"/>
    </div>
</div>
