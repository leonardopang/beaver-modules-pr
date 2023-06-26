<?php

class ObrasModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(
      array(
        'name' => __('Obras', 'fl-builder'),
        'description' => __('Module', 'fl-builder'),
        'category' => __('Pietra Roza Modules', 'fl-builder'),
        'dir' => DP8_MODULE_DIR . 'modules/obras/',
        'url' => DP8_MODULE_URL . 'modules/obras/',
        'editor_export' => true,
        // Defaults to true and can be omitted.
        'enabled' => true,
        // Defaults to true and can be omitted.
      )
    );
  }
}

FLBuilder::register_module(
  'ObrasModule',
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
            'title_obras' => array(
              'type' => 'text',
              'label' => __('Title Module', 'fl-builder')
            ),
            'subtitle_obras' => array(
              'type' => 'text',
              'label' => __('Subtitle Module', 'fl-builder')
            ),
            'button_title_obras' => array(
              'type' => 'text',
              'label' => __('Text Button', 'fl-builder')
            ),
            'button_link_obras' => array(
              'type' => 'text',
              'label' => __('Link Button', 'fl-builder')
            ),
            'obras_itens' => array(
              'type' => 'form',
              'label' => __('Obras cards', 'fl-builder'),
              'form' => 'obras_itens_form',
              // ID from registered form below
              'preview_text' => 'nome_feature',
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
  'obras_itens_form',
  array(
    'title' => __('Add Obra', 'fl-builder'),
    'tabs' => array(
      'navbar' => array(
        'title' => __('Obra Information', 'fl-builder'),
        'sections' => array(
          'section_1' => array(
            // Section
            'title' => __('Obra', 'fl-builder'),
            // Section Title
            'fields' => array(
              // Section Fields
              'feature_obras' => array(
                'type' => 'photo',
                'label' => __('Background Card', 'fl-builder'),
              ),
              'nome_obras' => array(
                'type' => 'text',
                'label' => __('Title obra', 'fl-builder')
              ),
              'link_card_obras' => array(
                'type' => 'text',
                'label' => __('Link Obra', 'fl-builder')
              ),
              'tamanho_card' => array(
                'type' => 'select',
                'label' => __('Tamanho Card', 'fl-builder'),
                'default' => 'option-1',
                'options' => array(
                  'option-1' => __('Pequeno', 'fl-builder'),
                  'option-2' => __('Grande', 'fl-builder')
                ),
              ),
            ),
          ),
        ),
      )
    )
  )
);