<?php
/* Personalizado Principal */
$wp_customize->add_section('theme_header', array(
    'title' => 'Ajustes',
    'description' => '',
    'priority' => 1
));
/* Imagen de perfil */
$wp_customize->add_setting('foto_perfil', array(
    'default' => 'https://fans4.net/wp-content/uploads/2021/02/avatar1.jpg'
));
  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'foto_perfil', array(
    'label' => __('Foto de perfil:'),
    'section' => 'theme_header',
    'settings' => 'foto_perfil'
) ));

/* Imagen de perfil */
$wp_customize->add_setting('foto_portada', array(
    'default' => ''
));
  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'foto_portada', array(
    'label' => __('Foto de Portada:'),
    'section' => 'theme_header',
    'settings' => 'foto_portada'
) ));

// Costos
$wp_customize->add_setting('costo1', array(
    'default' =>  ''
    ));
$wp_customize->add_control('costo1', array(
    'label' => __('Costo 1 mes'),
    'section' => 'theme_header',
    'settings' => 'costo1'
  ));

  $wp_customize->add_setting('costo6', array(
      'default' =>  ''
      ));
  $wp_customize->add_control('costo6', array(
      'label' => __('Costo 6 meses'),
      'section' => 'theme_header',
      'settings' => 'costo6'
    ));

    $wp_customize->add_setting('costo12', array(
        'default' =>  ''
        ));
    $wp_customize->add_control('costo12', array(
        'label' => __('Costo 12 mesese'),
        'section' => 'theme_header',
        'settings' => 'costo12'
      ));


// Boton 1
      $wp_customize->add_setting('boton_uno', array(
              'default'    =>  '',
              'transport'  =>  'postMessage'
          ));
      $wp_customize->add_control(
          'boton_uno',
          array(
              'section'   => 'theme_header',
              'label'     => 'Boton plan 1',
              'type'      => 'textarea'
          )
  );
  $wp_customize->add_setting('boton_seis', array(
          'default'    =>  '',
          'transport'  =>  'postMessage'
      ));
  $wp_customize->add_control(
      'boton_seis',
      array(
          'section'   => 'theme_header',
          'label'     => 'Boton plan 3',
          'type'      => 'textarea'
      )
);
$wp_customize->add_setting('boton_doce', array(
        'default'    =>  '',
        'transport'  =>  'postMessage'
    ));
$wp_customize->add_control(
    'boton_doce',
    array(
        'section'   => 'theme_header',
        'label'     => 'Boton plan 3',
        'type'      => 'textarea'
    )
);

$wp_customize->add_setting('formulario_membresias', array(
        'default'    =>  '',
        'transport'  =>  'postMessage'
    ));
$wp_customize->add_control(
    'formulario_membresias',
    array(
        'section'   => 'theme_header',
        'label'     => 'Formulario membresias',
        'type'      => 'textarea'
    )
);


?>
