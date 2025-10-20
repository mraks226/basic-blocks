<?php
if (!defined('ABSPATH')) exit;

$block_id = !empty($block['anchor']) ? esc_attr($block['anchor']) : '';

$block_attributes = [
  'id' => $block_id,
  'class' => 'ggggg-block',
];
?>

<div <?php echo wp_kses_data(get_block_wrapper_attributes($block_attributes)); ?>>

</div>