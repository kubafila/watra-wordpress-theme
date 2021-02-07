<!DOCTYPE html>
<html lang="pl-PL"
	  
	  <?php 
	  
	  if(is_front_page() ) {
		   $backgroundImagePath = get_theme_mod('watra_background_settings');
  
  

  $style = "background-image:url('". $backgroundImagePath ."')";

  
  echo ' style="'.$style.'"';
		  
		  echo " class='html-front-page'";
		  
	  }
	  ?>
	   
	  
	  >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  wp_head();
  ?>
</head>
<body 
<?php if(is_front_page() ) {

	echo 'class="front-page"';
  }?>
 >

<section class="hamburger__section"><?php echo get_bloginfo('name')?></section>

<button class="hamburger <?php if(is_front_page()){echo 'hamburger--front-page ';} ?>">
    <span class="hamburger__box">
      <span class="hamburger__inner"></span>
    </span>
  </button>

<nav

<?php 
  // $backgroundNavImagePath = get_theme_mod('watra_nav_background_settings');
  // $style__backgroundImage = "background-image:url('". $backgroundNavImagePath ."');";
  $style__color = "color:" . get_theme_mod('watra_colors_setting') . ";";
 
  
  if( is_front_page()){
    
     echo 'class="nav--front_page" ';
  }

  // $style = $style__backgroundImage . " " . $style__color;
  $style =  $style__color;

  echo ' ';
  echo 'style="'.$style.'"';
  ?>
>


  <?php 
    if(function_exists('the_custom_logo')){
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    }

  ?>
  <a href="<?php echo home_url(); ?>" 
  class="nav__image" 
  style='background-image:url("<?php echo $image[0]; ?>")'>
  </a>

  <?php
    wp_nav_menu(
      array(
        'menu' =>'primaray',
        'container' =>'',
        'theme_location' =>'primary',
        'items_wrap' =>'<ul id="" class="nav__list">%3$s</ul>'
      )
    );
  ?>
	
  </nav>
  <main <?php if(is_front_page() ) {
  echo 'class="main--front-page"';
  }?>
 >
  <?php if(!is_front_page() ) {
		echo '<h1>';
	echo the_title();
	echo '</h1>';
}

	  ?>
