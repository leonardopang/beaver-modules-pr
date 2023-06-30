<?php

class ProdutosGridModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(
      array(
        'name' => __('Produtos Grid', 'fl-builder'),
        'description' => __('Module', 'fl-builder'),
        'category' => __('Pietra Roza Modules', 'fl-builder'),
        'dir' => DP8_MODULE_DIR . 'modules/produtos-grid/',
        'url' => DP8_MODULE_URL . 'modules/produtos-grid/',
        'editor_export' => true,
        // Defaults to true and can be omitted.
        'enabled' => true,
        // Defaults to true and can be omitted.
      )
    );
  }
}

FLBuilder::register_module(
  'ProdutosGridModule',
  array(
    'general' => array(
      // tab
      'title' => __('General Settings', 'fl-builder'),
      'sections' => array(
        'section_1' => array(
          // Section
          'title' => __('Produtos', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'title_produtos' => array(
              'type' => 'text',
              'label' => __('Title Module', 'fl-builder')
            ),
            'subtitle_produtos' => array(
              'type' => 'text',
              'label' => __('Subtitle Module', 'fl-builder')
            ),
            'button_title_produtos' => array(
              'type' => 'text',
              'label' => __('Text Button', 'fl-builder')
            ),
            'button_link_produtos' => array(
              'type' => 'text',
              'label' => __('Link Button', 'fl-builder')
            ),
            'produtos_itens' => array(
              'type' => 'form',
              'label' => __('Produtos cards', 'fl-builder'),
              'form' => 'produtos_itens_form',
              // ID from registered form below
              'preview_text' => 'nome_produto',
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
  'produtos_itens_form',
  array(
    'title' => __('Add Produto', 'fl-builder'),
    'tabs' => array(
      'navbar' => array(
        'title' => __('Produto Information', 'fl-builder'),
        'sections' => array(
          'section_1' => array(
            // Section
            'title' => __('Produto', 'fl-builder'),
            // Section Title
            'fields' => array(
              // Section Fields
              'feature_produto' => array(
                'type' => 'photo',
                'label' => __('Background Card', 'fl-builder'),
              ),
              'nome_produto' => array(
                'type' => 'text',
                'label' => __('Title obra', 'fl-builder')
              ),
              'link_card_produto' => array(
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