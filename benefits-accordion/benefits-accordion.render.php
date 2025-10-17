<?php
if (!defined('ABSPATH')) exit;

$block_id = !empty($block['anchor']) ? esc_attr($block['anchor']) : '';
$only_one_tab = get_field('only_one_tab');
$data_tabs_value = ($only_one_tab) ? "one" : "all";

$allowed_blocks = array(
    'core/details',
    'core/heading',
    'core/paragraph',
);

$template = array(
    array(
        'core/heading',
        array(
            'textAlign' => 'center',
            'fontSize' => 'x-large',
            'level' => 2,
            'content' => 'School Membership Benefits',
        ),
    ),
    array(
        'core/paragraph',
        array(
            'align' => 'center',
            'content' => 'Over 18,000 members take advantage of these benefits each year:',
            'style' => array(
                'typography' => array(
                    'fontSize' => '23px'
                )
            )
        ),
    ),
    array(
        'core/details',
        array(
            'fontSize' => 'font-32px',
            'summary' => 'Access to Exclusive Member Resources',
        ),
        array(
            array(
                'core/columns',
                array(),
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
                        array(
                            'verticalAlignment' => 'center'
                        ),
                        array(
                            array(
                                'core/paragraph',
                                array(
                                    'content' => 'Montessori Life magazine (both print & digital versions), and access to the Montessori Life digital archives',
                                    'style' => array(
                                        'typography' => array(
                                            'fontSize' => '23px'
                                        )
                                    )
                                ),
                            ),
                        )
                    ),
                )
            ),
            array(
                'core/paragraph',
                array(
                    'content' => 'Family Connection, a monthly digital parent newsletter emailed to you for distribution to your student’s caretakers',
                    'style' => array(
                        'typography' => array(
                            'fontSize' => '23px'
                        )
                    )
                ),
            ),
        )
    ),
    array(
        'core/details',
        array(
            'fontSize' => 'font-32px',
            'summary' => 'Subscriptions',
        ),
        array(
            array(
                'core/columns',
                array(),
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
                        array(
                            'verticalAlignment' => 'center'
                        ),
                        array(
                            array(
                                'core/paragraph',
                                array(
                                    'content' => 'Montessori Life magazine (both print & digital versions), and access to the Montessori Life digital archives',
                                    'style' => array(
                                        'typography' => array(
                                            'fontSize' => '23px'
                                        )
                                    )
                                ),
                            ),
                        )
                    ),
                )
            ),
            array(
                'core/paragraph',
                array(
                    'content' => 'Family Connection, a monthly digital parent newsletter emailed to you for distribution to your student’s caretakers',
                    'style' => array(
                        'typography' => array(
                            'fontSize' => '23px'
                        )
                    )
                ),
            ),
        )
    ),
    array(
        'core/details',
        array(
            'fontSize' => 'font-32px',
            'summary' => 'Discounts & Special Offers',
        ),
        array(
            array(
                'core/columns',
                array(),
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
                        array(
                            'verticalAlignment' => 'center'
                        ),
                        array(
                            array(
                                'core/paragraph',
                                array(
                                    'content' => 'Montessori Life magazine (both print & digital versions), and access to the Montessori Life digital archives',
                                    'style' => array(
                                        'typography' => array(
                                            'fontSize' => '23px'
                                        )
                                    )
                                ),
                            ),
                        )
                    ),
                )
            ),
            array(
                'core/paragraph',
                array(
                    'content' => 'Family Connection, a monthly digital parent newsletter emailed to you for distribution to your student’s caretakers',
                    'style' => array(
                        'typography' => array(
                            'fontSize' => '23px'
                        )
                    )
                ),
            ),
        )
    ),
    array(
        'core/details',
        array(
            'fontSize' => 'font-32px',
            'summary' => 'Head of School Benefits',
        ),
        array(
            array(
                'core/columns',
                array(),
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
                        array(
                            'verticalAlignment' => 'center'
                        ),
                        array(
                            array(
                                'core/paragraph',
                                array(
                                    'content' => 'Montessori Life magazine (both print & digital versions), and access to the Montessori Life digital archives',
                                    'style' => array(
                                        'typography' => array(
                                            'fontSize' => '23px'
                                        )
                                    )
                                ),
                            ),
                        )
                    ),
                )
            ),
            array(
                'core/paragraph',
                array(
                    'content' => 'Family Connection, a monthly digital parent newsletter emailed to you for distribution to your student’s caretakers',
                    'style' => array(
                        'typography' => array(
                            'fontSize' => '23px'
                        )
                    )
                ),
            ),
        )
    ),
);
?>

<div <?php echo wp_kses_data(get_block_wrapper_attributes(array('id' => 'benefits-accordion-' . $block_id, 'class' => 'benefits-accordion', 'style' => ''))); ?>
    <?php echo (function_exists('add_lazy_load_to_attributes_string') ? add_lazy_load_to_attributes_string(basename(__FILE__)) : '');?>
>
    <div class="benefits-accordion__wrapper" data-tabs="<?php echo $data_tabs_value; ?>">
        <InnerBlocks allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_blocks)) ?>"
                     template="<?php echo esc_attr(wp_json_encode($template)) ?>"/>
    </div>
</div>
