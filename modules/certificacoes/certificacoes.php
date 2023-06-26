<?php

class CertificacoesModules extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(
      array(
        'name' => __('Certficações', 'fl-builder'),
        'description' => __('Module', 'fl-builder'),
        'category' => __('Pietra Roza Modules', 'fl-builder'),
        'dir' => DP8_MODULE_DIR . 'modules/certificacoes/',
        'url' => DP8_MODULE_URL . 'modules/certificacoes/',
        'editor_export' => true,
        // Defaults to true and can be omitted.
        'enabled' => true,
        // Defaults to true and can be omitted.
      )
    );
  }
}

FLBuilder::register_module(
  'CertificacoesModules',
  array(
    'general' => array(
      // tab
      'title' => __('General Settings', 'fl-builder'),
      'sections' => array(
        'section_1' => array(
          // Section
          'title' => __('Certificados', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'title_certificados' => array(
              'type' => 'text',
              'label' => __('Title Module', 'fl-builder')
            ),
            'certficados_itens' => array(
              'type' => 'form',
              'label' => __('certficados cards', 'fl-builder'),
              'form' => 'certficados_itens_form',
              // ID from registered form below
              'preview_text' => 'nome_certficados',
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
  'certficados_itens_form',
  array(
    'title' => __('Add certificados', 'fl-builder'),
    'tabs' => array(
      'navbar' => array(
        'title' => __('Certificados Information', 'fl-builder'),
        'sections' => array(
          'section_1' => array(
            // Section
            'title' => __('Certificados', 'fl-builder'),
            // Section Title
            'fields' => array(
              // Section Fields
              'feature_certificados' => array(
                'type' => 'photo',
                'label' => __('Logo', 'fl-builder'),
              ),
              'nome_certificados' => array(
                'type' => 'text',
                'label' => __('Title parceiro', 'fl-builder')
              ),
            ),
          ),
        ),
      )
    )
  )
);