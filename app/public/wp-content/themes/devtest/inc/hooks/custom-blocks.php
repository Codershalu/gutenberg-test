<?php
// Custom ACF Blocks
add_action("acf/init", function () {
  if (function_exists("acf_register_block_type")):

    acf_register_block_type([
      "name" => "galleryBlock",
      "title" => __("Gallery Block"),
      "description" => __("Displays gallery grid section"),
      "render_template" => "./page-templates/blocks/galleryBlock.php",
      "category" => "custom-blocks",
      "icon" => "yes-alt",
      "keywords" => ["galleryBlock", "dropdown"],
      'mode' => 'preview',
    ]);

  endif;
});