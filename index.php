<?php

/**
 * Costum Gutenberg blocks
 */

function costum_gutenberg_blocks() 
{
  add_theme_support(
    'editor-color-palette',
    array(
      /* 
      configurations for your gutenberg editor

      array(
        'name' => 'White',
        'slug' => 'white',
        'color' => '#ffffff'
      ),
      array(
        'name' => 'Black',
        'slug' => 'black',
        'color' => '#000000'
      )
      */
    )
  );
}

add_action( 'init', 'costum_gutenberg_blocks' );

/**
 * Gutenberg block Registration
 * You can replicate this piece of code for more blocks.
 */
function gutenberg_block_register() 
{
  wp_register_script( 
    'carousel-block-js', 
    get_template_directory_uri() . '/gutenberg-blocks/build/index.js',  // path to your block javascript
    array( 'wp-blocks' ) 
  );

  register_block_type( 
    'toolkit/carousel', 
    array(
      'editor_script' => 'carousel-block-js',
    )
  );
}
add_action( 'init', 'gutenberg_block_register' );