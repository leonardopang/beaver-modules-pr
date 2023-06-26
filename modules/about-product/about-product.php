<?php

class AboutProductModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(
      array(
        'name' => __('About Product', 'fl-builder'),
        'description' => __('Module', 'fl-builder'),
        'category' => __('Pietra Roza Modules', 'fl-builder'),
        'dir' => DP8_MODULE_DIR . 'modules/about-product/',
        'url' => DP8_MODULE_URL . 'modules/about-product/',
        'editor_export' => true,
        // Defaults to true and can be omitted.
        'enabled' => true,
        // Defaults to true and can be omitted.
      )
    );
  }
}

FLBuilder::register_module(
  'AboutProductModule',
  array(
    'general' => array(
      // tab
      'title' => __('General Settings', 'fl-builder'),
      'sections' => array(
        'section_1' => array(
          // Section
          'title' => __('About', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'title_about_product' => array(
              'type' => 'text',
              'label' => __('Title Module', 'fl-builder')
            ),
            'text_about_product' => array(
              'type' => 'editor',
              'label' => __('Text About', 'fl-builder'),
              'media_buttons' => true,
              'wpautop' => true
            ),
            'button_title_about_product' => array(
              'type' => 'text',
              'label' => __('Text Button', 'fl-builder')
            ),
            'button_link_about_product' => array(
              'type' => 'text',
              'label' => __('Link Button', 'fl-builder')
            ),
            'slider_itens_about_product' => array(
              'type' => 'multiple-photos',
              'label' => __('Photo Slider', 'fl-builder')
            ),
          ),
        ),
      ),
    )
  )
);