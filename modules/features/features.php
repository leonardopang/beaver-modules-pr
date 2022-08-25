<?php

class FeaturesModules extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(array(
      'name'          => __('Feature', 'fl-builder'),
      'description'   => __('Module', 'fl-builder'),
      'category'    => __('Trustix Modules', 'fl-builder'),
      'dir'           => DP8_MODULE_DIR . 'modules/features/',
      'url'           => DP8_MODULE_URL . 'modules/features/',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled'       => true, // Defaults to true and can be omitted.
    ));
  }
}

FLBuilder::register_module('FeaturesModules', array(
  'general'   => array( // tab
    'title'   => __('Configurações gerais', 'fl-builder'),
    'sections'  => array(
      'section_1'       => array( // Section
        'title'         => __('Features', 'fl-builder'), // Section Title
        'fields'        => array( // Section Fields
          'features_itens' => array(
            'type'          => 'form',
            'label'         => __('Feature', 'fl-builder'),
            'form'          => 'features_itens_form', // ID from registered form below
            'preview_text'  => 'nome_feature', // Name of a field to use for the preview text
            'multiple'      => true,
          ),
        ),
      ),
    ),
  )
));

FLBuilder::register_settings_form('features_itens_form', array(
  'title' => __('Add Feature', 'fl-builder'),
  'tabs'  => array(
    'navbar'      => array(
      'title'         => __('Feature Information', 'fl-builder'),
      'sections'      => array(
        'section_1'       => array( // Section
          'title'         => __('Feature', 'fl-builder'), // Section Title
          'fields'        => array( // Section Fields
            'feature_thumbnail' => array(
              'type' => 'photo',
              'label' => __('Thumbnail Banner', 'fl-builder'),
            ),
            'nome_feature' => array(
              'type' => 'text',
              'label' => __('Title Feature', 'fl-builder')
            ),
            'description_feature' => array(
              'type'          => 'textarea',
              'label'         => __('Description Feature', 'fl-builder'),
              'default'       => '',
              'placeholder'   => __('Placeholder Text', 'fl-builder'),
              'maxlength'       => '255',
              'rows'          => '6'
            ),
          ),
        ),
      ),
    ),
  )
));