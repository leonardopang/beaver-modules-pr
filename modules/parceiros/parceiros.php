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
          'title' => __('Parceiros', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'title_parceirost' => array(
              'type' => 'text',
              'label' => __('Title Module', 'fl-builder')
            ),
            'subtitle_parceiros' => array(
              'type' => 'text',
              'label' => __('Subtitle Module', 'fl-builder')
            ),
            'parceiros_itens' => array(
              'type' => 'form',
              'label' => __('parceiros cards', 'fl-builder'),
              'form' => 'parceiros_itens_form',
              // ID from registered form below
              'preview_text' => 'nome_parceiros',
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
  'parceiros_itens_form',
  array(
    'title' => __('Add parceiro', 'fl-builder'),
    'tabs' => array(
      'navbar' => array(
        'title' => __('parceiro Information', 'fl-builder'),
        'sections' => array(
          'section_1' => array(
            // Section
            'title' => __('parceiro', 'fl-builder'),
            // Section Title
            'fields' => array(
              // Section Fields
              'feature_parceiros' => array(
                'type' => 'photo',
                'label' => __('Logo', 'fl-builder'),
              ),
              'nome_parceiros' => array(
                'type' => 'text',
                'label' => __('Title parceiro', 'fl-builder')
              ),
              'tipo_parceiro' => array(
                'type' => 'text',
                'label' => __('Categoria', 'fl-builder')
              ),
            ),
          ),
        ),
      )
    )
  )
);