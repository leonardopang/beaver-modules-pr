<?php

class FeedbacksModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(array(
      'name'          => __('Feedback', 'fl-builder'),
      'description'   => __('Module', 'fl-builder'),
      'category'    => __('Trustix Modules', 'fl-builder'),
      'dir'           => DP8_MODULE_DIR . 'modules/feedback/',
      'url'           => DP8_MODULE_URL . 'modules/feedback/',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled'       => true, // Defaults to true and can be omitted.
    ));
  }
}

FLBuilder::register_module('FeedbacksModule', array(
  'general'   => array( // tab
    'title'   => __('Configurações gerais', 'fl-builder'),
    'sections'  => array(
      'section_1'       => array( // Section
        'title'         => __('Calling', 'fl-builder'), // Section Title
        'fields'        => array( // Section Fields
          'title_feedback' => array(
            'type' => 'text',
            'label' => __('Title Module', 'fl-builder')
          ),
        ),
      ),
    ),
  )
));