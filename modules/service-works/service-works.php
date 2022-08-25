<?php

class ServiceWorksModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(array(
      'name'          => __('Service Works', 'fl-builder'),
      'description'   => __('Module', 'fl-builder'),
      'category'    => __('Trustix Modules', 'fl-builder'),
      'dir'           => DP8_MODULE_DIR . 'modules/service-works/',
      'url'           => DP8_MODULE_URL . 'modules/service-works/',
      'editor_export' => true, // Defaults to true and can be omitted.
      'enabled'       => true, // Defaults to true and can be omitted.
    ));
  }
}

FLBuilder::register_module('ServiceWorksModule', array(
  'general'   => array( // tab
    'title'   => __('Configurações gerais', 'fl-builder'),
    'sections'  => array(
      'section_1'       => array( // Section
        'title'         => __('Header Service Works', 'fl-builder'), // Section Title
        'fields'        => array( // Section Fields
          'title_service_works' => array(
            'type' => 'text',
            'label' => __('Título Banner', 'fl-builder')
          ),
          'subtitle_service_works' => array(
            'type'          => 'textarea',
            'label'         => __('Sub Title Services Works', 'fl-builder'),
            'default'       => '',
            'placeholder'   => __('Placeholder Text', 'fl-builder'),
            'maxlength'       => '255',
            'rows'          => '6'
          ),
        ),
      ),
      'section_2'       => array( // Section
        'title'         => __('Cards Service Workds', 'fl-builder'), // Section Title
        'fields'        => array( // Section Fields
          'service_works_itens' => array(
            'type'          => 'form',
            'label'         => __('Services', 'fl-builder'),
            'form'          => 'service_works_itens_form', // ID from registered form below
            'preview_text'  => 'service_title', // Name of a field to use for the preview text
            'multiple'      => true,
          ),
        ),
      ),
    ),
  )
));

FLBuilder::register_settings_form('service_works_itens_form', array(
  'title' => __('Add Service', 'fl-builder'),
  'tabs'  => array(
    'navbar'      => array(
      'title'         => __('Service Information', 'fl-builder'),
      'sections'      => array(
        'section_1'       => array( // Section
          'title'         => __('Service', 'fl-builder'), // Section Title
          'fields'        => array( // Section Fields
            'service_thumbnail' => array(
              'type' => 'photo',
              'label' => __('Thumbnail Banner', 'fl-builder'),
            ),
            'service_title' => array(
              'type' => 'text',
              'label' => __('Title Feature', 'fl-builder')
            ),
            'service_description' => array(
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