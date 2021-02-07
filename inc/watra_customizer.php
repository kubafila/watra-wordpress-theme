<?php

  function watra_customizer($wp_customize){

    $wp_customize->add_panel('watra_panel', array(
      'title' => 'Wygląd strony',
      'priority'=> 1,
      'capability' => 'edit_theme_options'
    ));



    // ======================KOLORY

    $wp_customize->add_section('watra_colors_section', array(
      'title' => 'Ustawienia kolorów',
      'description'=> __('Ustawienia kolorów na stronie'),
      'panel' => 'watra_panel'
    ));


    $wp_customize->add_setting( 'watra_colors_setting', array(
      'default' => '#04bfbf',
    ));

    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'watra_colors_setting', array(
      'label' => 'Kolor czcionki w mennu',
      'section' => 'watra_colors_section',
      'settings' => 'watra_colors_setting'

    )));

    

    // ======================TŁO STRONY GŁÓWNEJ
    $wp_customize->add_section('watra_background_section', array(
      'title' => 'Ustawienia grafik w tle' ,
      'description'=> __('W tej sekcji możesz zmienić tło strony głównej i menu nawigacji'),
      'panel' => 'watra_panel'
    ));

    
      $wp_customize->add_setting( 'watra_background_settings', array(
        'default' => 'Wybierz obrazek tła storny głównej',
      ));


      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'watra_background_control', array(
      'label' => 'Tło strony głównej',
      'section' => 'watra_background_section',
      'settings' => 'watra_background_settings'
    )));
  

      // ======================TŁO NAWIGACJI
    //   $wp_customize->add_setting( 'watra_nav_background_settings', array(
    //     'default' => 'Wybierz obrazek tła menu nawigacji',
    //   ));


    //   $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'watra_nav_background_control', array(
    //   'label' => 'Tło menu nawigacji',
    //   'section' => 'watra_background_section',
    //   'settings' => 'watra_nav_background_settings'
    // )));

    //   // ======================CHECKBOX
    // $wp_customize->add_setting( 'watra_background_checkbox_setting', array(
    //   'default' => 'Na stronie głównej nawigacja jest przeźroczysta (ma tło strony)'
    // ) );

    // $wp_customize->add_control( 'watra_background_checkbox_setting', array(
    //   'type' => 'checkbox',
    //   'section' => 'watra_background_section',
    //   'settings' => 'watra_background_checkbox_setting',
    //   'label' => 'To samo tło na stronie głównej',
    //   'description' => 'Po zaznaczeniu tej opcji menu na stronie głównej stanie się przeźroczyste i przejemie tło strony'
    // ) );


  }
  
?>