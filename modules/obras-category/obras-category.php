<?php

class ObrasCategoryModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(
      array(
        'name' => __('Obras Category', 'fl-builder'),
        'description' => __('Module', 'fl-builder'),
        'category' => __('Pietra Roza Modules', 'fl-builder'),
        'dir' => DP8_MODULE_DIR . 'modules/obras-category/',
        'url' => DP8_MODULE_URL . 'modules/obras-category/',
        'editor_export' => true,
        // Defaults to true and can be omitted.
        'enabled' => true,
        // Defaults to true and can be omitted.
      )
    );
  }
}

FLBuilder::register_module(
  'ObrasCategoryModule',
  array(
    'general' => array(
      // tab
      'title' => __('General Settings', 'fl-builder'),
      'sections' => array(
        'section_1' => array(
          // Section
          'title' => __('Obras', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'title_obras_galery' => array(
              'type' => 'text',
              'label' => __('Title Module', 'fl-builder')
            ),
            'subtitle_obras_galery' => array(
              'type' => 'text',
              'label' => __('Subtitle Module', 'fl-builder')
            ),
            'button_title_obras_galery' => array(
              'type' => 'text',
              'label' => __('Text Button', 'fl-builder')
            ),
            'button_link_obras_galery' => array(
              'type' => 'text',
              'label' => __('Link Button', 'fl-builder')
            ),
            'obras_galery_itens' => array(
              'type' => 'form',
              'label' => __('Produtos cards', 'fl-builder'),
              'form' => 'obras_galery_itens_form',
              // ID from registered form below
              'preview_text' => 'nome_obras_galery',
              // Name of a field to use for the preview text
              'multiple' => true,
            ),
          ),
        ),
      ),
    )
  )
);

FLBuilder::register_settings_form(
  'obras_galery_itens_form',
  array(
    'title' => __('Add Obras', 'fl-builder'),
    'tabs' => array(
      'navbar' => array(
        'title' => __('Obras Information', 'fl-builder'),
        'sections' => array(
          'section_1' => array(
            // Section
            'title' => __('Obras', 'fl-builder'),
            // Section Title
            'fields' => array(
              // Section Fields
              'feature_obras_galery' => array(
                'type' => 'photo',
                'label' => __('Background Card', 'fl-builder'),
              ),
              'nome_obras_galery' => array(
                'type' => 'text',
                'label' => __('Title obra', 'fl-builder')
              ),
              'link_card_obras_galery' => array(
                'type' => 'text',
                'label' => __('Link Obra', 'fl-builder')
              ),
            ),
          ),
        ),
      )
    )
  )
);