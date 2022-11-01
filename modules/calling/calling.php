<?php

class CallingModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(array(
      'name'          => __('Calling', 'fl-builder'),
      'description'   => __('Module', 'fl-builder'),
      'category'    => __('Trustix Modules', 'fl-builder'),
      'dir'           => DP8_MODULE_DIR . 'modules/calling/',
      'url'           => DP8_MODULE_URL . 'modules/calling/',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled'       => true, // Defaults to true and can be omitted.
    ));
  }
}

FLBuilder::register_module('CallingModule', array(
  'general'   => array( // tab
    'title'   => __('Configurações gerais', 'fl-builder'),
    'sections'  => array(
      'section_1'       => array( // Section
        'title'         => __('Calling', 'fl-builder'), // Section Title
        'fields'        => array( // Section Fields
          'title_calling' => array(
            'type' => 'text',
            'label' => __('Título Banner', 'fl-builder')
          ),
          'subtitle_calling' => array(
            'type'          => 'textarea',
            'label'         => __('Sub Title Services Works', 'fl-builder'),
            'default'       => '',
            'placeholder'   => __('Placeholder Text', 'fl-builder'),
            'maxlength'       => '255',
            'rows'          => '6'
          ),
          'button_link_quote' => array(
            'type' => 'text',
            'label' => __('Link button quote', 'fl-builder')
          ),
          'button_link_drive' => array(
            'type' => 'text',
            'label' => __('Link button Drive ', 'fl-builder')
          ),
        ),
      ),
    ),
  )
));