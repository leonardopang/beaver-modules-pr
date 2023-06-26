<?php

class AboutCompanyModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(
      array(
        'name' => __('About Company', 'fl-builder'),
        'description' => __('Module', 'fl-builder'),
        'category' => __('Pietra Roza Modules', 'fl-builder'),
        'dir' => DP8_MODULE_DIR . 'modules/about-company/',
        'url' => DP8_MODULE_URL . 'modules/about-company/',
        'editor_export' => true,
        // Defaults to true and can be omitted.
        'enabled' => true,
        // Defaults to true and can be omitted.
      )
    );
  }
}

FLBuilder::register_module(
  'AboutCompanyModule',
  array(
    'general' => array(
      // tab
      'title' => __('General Settings', 'fl-builder'),
      'sections' => array(
        'section_1' => array(
          // Section
          'title' => __('Sobre', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'title_about_company' => array(
              'type' => 'text',
              'label' => __('Title Module', 'fl-builder')
            ),
            'button_title_about_company' => array(
              'type' => 'text',
              'label' => __('Text Button', 'fl-builder')
            ),
            'button_link_about_company' => array(
              'type' => 'text',
              'label' => __('Link Button', 'fl-builder')
            ),
            'about_company_itens' => array(
              'type' => 'form',
              'label' => __('Cards', 'fl-builder'),
              'form' => 'about_company_itens_form',
              // ID from registered form below
              'preview_text' => 'nome_about_company',
              // Name of a field to use for the preview text
              'multiple' => true,
              'limit' => 3,
            ),
          ),
        ),
      ),
    )
  )
);

FLBuilder::register_settings_form(
  'about_company_itens_form',
  array(
    'title' => __('Add card', 'fl-builder'),
    'tabs' => array(
      'navbar' => array(
        'title' => __('Card Information', 'fl-builder'),
        'sections' => array(
          'section_1' => array(
            // Section
            'title' => __('Card', 'fl-builder'),
            // Section Title
            'fields' => array(
              // Section Fields
              'feature_about_company' => array(
                'type' => 'photo',
                'label' => __('Background Card', 'fl-builder'),
              ),
              'nome_about_company' => array(
                'type' => 'text',
                'label' => __('Title obra', 'fl-builder')
              ),
              'text_about_company' => array(
                'type' => 'editor',
                'label' => __('Text About', 'fl-builder'),
                'media_buttons' => true,
                'wpautop' => true
              ),
            ),
          ),
        ),
      )
    )
  )
);