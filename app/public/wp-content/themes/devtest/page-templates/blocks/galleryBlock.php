<?php
 /**
 * Block Name: Gallery Block
 * Displays gallery grid section
 */

 ?> 

 <div class="france-gallery-sec">
  <div class="container">
    <div class="france-gallery-title-box">
      <h2 class="france-gallery-title"> <?php echo get_field("block_title"); ?> </h2>
    </div>
    <div class="france-gallery-main-grid"> <?php
    
    while (have_rows("list")):
      the_row();

      $image = get_sub_field("image");
      $title = get_sub_field("title");
      $text = get_sub_field("text");
      $button_title = get_sub_field("button_title");
      $button_link = get_sub_field("button_link");
      ?> 
      <div class="france-gallery-grid-item">
        <div class="france-grid-content-box">
          <div class="france-grid-img-box">
            <div class="france-grid-content-img">
              <img src="<?php echo $image; ?>">
            </div>
          </div>
          <div class="france-grid-title-box">
            <h2 class="france-grid-main-title"> <?php echo $title; ?> </h2>
          </div>
          <div class="france-grid-desc-box">
            <p> <?php echo $text; ?> </p>
          </div>
          <div class="france-grid-desc-btn">
              <a href="<?php echo $button_link; ?>" class="france-grid-btn"><?php echo $button_title; ?></a>
          </div>
        </div>
      </div> 
      <?php endwhile; ?> 
    </div>
  </div>
</div>