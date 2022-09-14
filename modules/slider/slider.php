<?php

class SliderModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(array(
      'name'          => __('Slider', 'fl-builder'),
      'description'   => __('Module', 'fl-builder'),
      'category'    => __('Trustix Modules', 'fl-builder'),
      'dir'           => DP8_MODULE_DIR . 'modules/slider/',
      'url'           => DP8_MODULE_URL . 'modules/slider/',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled'       => true, // Defaults to true and can be omitted.
    ));
  }
}

FLBuilder::register_module('SliderModule', array(
  'general'   => array( // tab
    'title'   => __('Configurações gerais', 'fl-builder'),
    'sections'  => array(
      'section_1'       => array( // Section
        'title'         => __('Slider', 'fl-builder'), // Section Title
        'fields'        => array( // Section Fields
          'slider_itens' => array(
            'type'          => 'multiple-photos',
            'label'         => __('Photo Slider', 'fl-builder')
          ),
        ),
      ),
    ),
  )
));