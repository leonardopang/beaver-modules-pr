<?php

class ParceirosModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(
      array(
        'name' => __('Parceiros', 'fl-builder'),
        'description' => __('Module', 'fl-builder'),
        'category' => __('Pietra Roza Modules', 'fl-builder'),
        'dir' => DP8_MODULE_DIR . 'modules/parceiros/',
        'url' => DP8_MODULE_URL . 'modules/parceiros/',
        'editor_export' => true,
        // Defaults to true and can be omitted.
        'enabled' => true,
        // Defaults to true and can be omitted.
      )
    );
  }
}

FLBuilder::register_module(
  'ParceirosModule',
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
            'title_about' => array(
              'type' => 'text',
              'label' => __('Title Module', 'fl-builder')
            ),
            'image_about' => array(
              'type' => 'photo',
              'label' => __('Image About', 'fl-builder'),
            ),
            'text_about' => array(
              'type' => 'editor',
              'label' => __('Text About', 'fl-builder'),
              'media_buttons' => true,
              'wpautop' => true
            ),
            'button_link_about' => array(
              'type' => 'text',
              'label' => __('Link Button', 'fl-builder')
            ),
          ),
        ),
      ),
    )
  )
);