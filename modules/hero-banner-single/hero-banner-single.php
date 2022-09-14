<?php

class HeroBannerSingleModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(array(
      'name'          => __('Hero Banner Single', 'fl-builder'),
      'description'   => __('Module', 'fl-builder'),
      'category'    => __('Trustix Modules', 'fl-builder'),
      'dir'           => DP8_MODULE_DIR . 'modules/hero-banner-single/',
      'url'           => DP8_MODULE_URL . 'modules/hero-banner-single/',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled'       => true, // Defaults to true and can be omitted.
    ));
  }
}

FLBuilder::register_module('HeroBannerSingleModule', array(
  'general'   => array( // tab
    'title'   => __('Configurações gerais', 'fl-builder'),
    'sections'  => array(
      'section_1'       => array( // Section
        'title'         => __('Hero Banner With Form', 'fl-builder'), // Section Title
        'fields'        => array( // Section Fields
          'title_hero_banner' => array(
            'type' => 'text',
            'label' => __('Título Banner', 'fl-builder')
          ),
          'subtitle_hero_banner' => array(
            'type' => 'text',
            'label' => __('Sub Título Banner', 'fl-builder')
          ),
        ),
      ),
    ),
  )
));