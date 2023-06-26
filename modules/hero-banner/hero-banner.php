<?php

class HeroBannerModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(
      array(
        'name' => __('Hero Banner', 'fl-builder'),
        'description' => __('Module', 'fl-builder'),
        'category' => __('Pietra Roza Modules', 'fl-builder'),
        'dir' => DP8_MODULE_DIR . 'modules/hero-banner/',
        'url' => DP8_MODULE_URL . 'modules/hero-banner/',
        'editor_export' => true,
        // Defaults to true and can be omitted.
        'enabled' => true,
        // Defaults to true and can be omitted.
      )
    );
  }
}

FLBuilder::register_module(
  'HeroBannerModule',
  array(
    'general' => array(
      // tab
      'title' => __('Configurações gerais', 'fl-builder'),
      'sections' => array(
        'section_1' => array(
          // Section
          'title' => __('Hero Banner With Form', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'image_hero_header' => array(
              'type' => 'photo',
              'label' => __('Background Desktop', 'fl-builder'),
            ),
            'image_mobile_hero_header' => array(
              'type' => 'photo',
              'label' => __('Background Mobile', 'fl-builder'),
            ),
            'title_hero_banner' => array(
              'type' => 'text',
              'label' => __('Título Banner', 'fl-builder')
            ),
            'button_title_hero_header' => array(
              'type' => 'text',
              'label' => __('Text Button', 'fl-builder')
            ),
            'button_link_hero_header' => array(
              'type' => 'text',
              'label' => __('Link Button', 'fl-builder')
            ),
          ),
        ),
      ),
    )
  )
);