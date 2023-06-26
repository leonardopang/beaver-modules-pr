<?php

class FeedbacksModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(
      array(
        'name' => __('Feedback', 'fl-builder'),
        'description' => __('Module', 'fl-builder'),
        'category' => __('Pietra Roza Modules', 'fl-builder'),
        'dir' => DP8_MODULE_DIR . 'modules/feedback/',
        'url' => DP8_MODULE_URL . 'modules/feedback/',
        'editor_export' => true,
        // Defaults to true and can be omitted.
        'enabled' => true,
        // Defaults to true and can be omitted.
      )
    );
  }
}

FLBuilder::register_module(
  'FeedbacksModule',
  array(
    'general' => array(
      // tab
      'title' => __('Configurações gerais', 'fl-builder'),
      'sections' => array(
        'section_1' => array(
          // Section
          'title' => __('FeedBack', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'title_feedback' => array(
              'type' => 'text',
              'label' => __('Title Module', 'fl-builder')
            ),
            'subtitle_feedback' => array(
              'type' => 'text',
              'label' => __('Subtitle Module', 'fl-builder')
            ),
            'feedback_itens' => array(
              'type' => 'form',
              'label' => __('feedback cards', 'fl-builder'),
              'form' => 'feedback_itens_form',
              // ID from registered form below
              'preview_text' => 'nome_pessoa',
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
  'feedback_itens_form',
  array(
    'title' => __('Add FeedBack', 'fl-builder'),
    'tabs' => array(
      'navbar' => array(
        'title' => __('FeedBack Information', 'fl-builder'),
        'sections' => array(
          'section_1' => array(
            // Section
            'title' => __('FeedBack', 'fl-builder'),
            // Section Title
            'fields' => array(
              // Section Fields
              'nome_pessoa' => array(
                'type' => 'text',
                'label' => __('Nome', 'fl-builder')
              ),
              'profissao_pessoa' => array(
                'type' => 'text',
                'label' => __('Profissão', 'fl-builder')
              ),
              'feedback_text' => array(
                'type' => 'editor',
                'label' => __('Texto', 'fl-builder'),
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