<?php

class ContentGridModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(
      array(
        'name' => __('Conteúdo Box', 'fl-builder'),
        'description' => __('Module', 'fl-builder'),
        'category' => __('Pietra Roza Modules', 'fl-builder'),
        'dir' => DP8_MODULE_DIR . 'modules/content-grid/',
        'url' => DP8_MODULE_URL . 'modules/content-grid/',
        'editor_export' => true,
        // Defaults to true and can be omitted.
        'enabled' => true,
        // Defaults to true and can be omitted.
      )
    );
  }
}

FLBuilder::register_module(
  'ContentGridModule',
  array(
    'general' => array(
      // tab
      'title' => __('General Settings', 'fl-builder'),
      'sections' => array(
        'section_1' => array(
          // Section
          'title' => __('Content Text', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'content_text_side' => array(
              'type' => 'select',
              'label' => __('Lado Texto', 'fl-builder'),
              'default' => 'left',
              'options' => array(
                'left' => __('Esquerda', 'fl-builder'),
                'right' => __('Direita', 'fl-builder')
              ),
            ),
            'content_title' => array(
              'type' => 'text',
              'label' => __('Título', 'fl-builder')
            ),
            'content_text' => array(
              'type' => 'editor',
              'label' => __('Text', 'fl-builder'),
              'media_buttons' => true,
              'wpautop' => true
            ),
            'content_buttons' => array(
              'type' => 'form',
              'label' => __('Button', 'fl-builder'),
              'form' => 'content_buttons_form',
              // ID from registered form below
              'preview_text' => 'button_text',
              // Name of a field to use for the preview text
              'multiple' => true,
              'limit' => 2,
            ),
          ),
        ),
        'section_2' => array(
          // Section
          'title' => __('Content Slider', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'content_slider' => array(
              'type' => 'multiple-photos',
              'label' => __('Photo Slider', 'fl-builder')
            ),
          ),
        ),
      ),
    )
  )
);

FLBuilder::register_settings_form(
  'content_buttons_form',
  array(
    'title' => __('Add Button', 'fl-builder'),
    'tabs' => array(
      'navbar' => array(
        'title' => __('Button Information', 'fl-builder'),
        'sections' => array(
          'section_1' => array(
            // Section
            'title' => __('Button', 'fl-builder'),
            // Section Title
            'fields' => array(
              // Section Fields
              'button_text' => array(
                'type' => 'text',
                'label' => __('Text Button', 'fl-builder')
              ),
              'button_link' => array(
                'type' => 'text',
                'label' => __('Link Button', 'fl-builder')
              ),
            ),
          ),
        ),
      )
    )
  )
);