<?php

class ContentGridModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(
      array(
        'name' => __('Conteúdo Box', 'fl-builder'),
        'description' => __('Module', 'fl-builder'),
        'category' => __('Pietra Roza Modules', 'fl-builder'),
        'dir' => DP8_MODULE_DIR . 'modules/content-grid/',
        'url' => DP8_MODULE_URL . 'modules/content-grid/',
        'editor_export' => true,
        // Defaults to true and can be omitted.
        'enabled' => true,
        // Defaults to true and can be omitted.
      )
    );
  }
}

FLBuilder::register_module(
  'ContentGridModule',
  array(
    'general' => array(
      // tab
      'title' => __('General Settings', 'fl-builder'),
      'sections' => array(
        'section_1' => array(
          // Section
          'title' => __('Content Text', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'content_title' => array(
              'type' => 'text',
              'label' => __('Título', 'fl-builder')
            ),
            'content_text' => array(
              'type' => 'editor',
              'label' => __('Text', 'fl-builder'),
              'media_buttons' => true,
              'wpautop' => true
            ),
            'content_slider' => array(
              'type' => 'multiple-photos',
              'label' => __('Photo Slider', 'fl-builder')
            ),
          ),
        ),
      ),
    )
  )
);