<?php

class ContentTextModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(array(
      'name'          => __('Content Text', 'fl-builder'),
      'description'   => __('Module', 'fl-builder'),
      'category'    => __('Trustix Modules', 'fl-builder'),
      'dir'           => DP8_MODULE_DIR . 'modules/content-text/',
      'url'           => DP8_MODULE_URL . 'modules/content-text/',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled'       => true, // Defaults to true and can be omitted.
    ));
  }
}

FLBuilder::register_module('ContentTextModule', array(
  'general'   => array( // tab
    'title'   => __('General Settings', 'fl-builder'),
    'sections'  => array(
      'section_1'       => array( // Section
        'title'         => __('Content Text', 'fl-builder'), // Section Title
        'fields'        => array( // Section Fields
          'content_text' => array(
            'type'          => 'editor',
            'label'         => __('Text', 'fl-builder'),
            'media_buttons' => true,
            'wpautop'       => true
          ),
        ),
      ),
    ),
  )
));