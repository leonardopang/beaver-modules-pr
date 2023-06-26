<?php

class AboutModule extends FLBuilderModule
{
  public function __construct()
  {
    parent::__construct(
      array(
        'name' => __('About', 'fl-builder'),
        'description' => __('Module', 'fl-builder'),
        'category' => __('Pietra Roza Modules', 'fl-builder'),
        'dir' => DP8_MODULE_DIR . 'modules/about/',
        'url' => DP8_MODULE_URL . 'modules/about/',
        'editor_export' => true,
        // Defaults to true and can be omitted.
        'enabled' => true,
        // Defaults to true and can be omitted.
      )
    );
  }
}

FLBuilder::register_module(
  'AboutModule',
  array(
    'general' => array(
      // tab
      'title' => __('General Settings', 'fl-builder'),
      'sections' => array(
        'section_1' => array(
          // Section
          'title' => __('About', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'favicon_about' => array(
              'type' => 'photo',
              'label' => __('Image About', 'fl-builder'),
            ),
            'title_about' => array(
              'type' => 'text',
              'label' => __('Title Module', 'fl-builder')
            ),
            'subtitle_about' => array(
              'type' => 'text',
              'label' => __('Sub title Module', 'fl-builder')
            ),
            'text_about' => array(
              'type' => 'editor',
              'label' => __('Text About', 'fl-builder'),
              'media_buttons' => true,
              'wpautop' => true
            ),
            'button_title_about' => array(
              'type' => 'text',
              'label' => __('Title Button', 'fl-builder')
            ),
            'button_link_about' => array(
              'type' => 'text',
              'label' => __('Link Button', 'fl-builder')
            ),
          ),
        ),
        'section_2' => array(
          // Section
          'title' => __('Card Services 1', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'image_about_service' => array(
              'type' => 'photo',
              'label' => __('Background Card', 'fl-builder'),
            ),
            'title_about_service' => array(
              'type' => 'text',
              'label' => __('Title Module', 'fl-builder')
            ),
            'button_title_about_service' => array(
              'type' => 'text',
              'label' => __('Title Button', 'fl-builder')
            ),
            'button_link_about_service' => array(
              'type' => 'text',
              'label' => __('Link Button', 'fl-builder')
            ),
          ),
        ),
        'section_3' => array(
          // Section
          'title' => __('Card Services 2', 'fl-builder'),
          // Section Title
          'fields' => array(
            // Section Fields
            'image_about_service_2' => array(
              'type' => 'photo',
              'label' => __('Background Card', 'fl-builder'),
            ),
            'title_about_service_2' => array(
              'type' => 'text',
              'label' => __('Title Module', 'fl-builder')
            ),
            'button_title_about_service_2' => array(
              'type' => 'text',
              'label' => __('Title Button', 'fl-builder')
            ),
            'button_link_about_service_2' => array(
              'type' => 'text',
              'label' => __('Link Button', 'fl-builder')
            ),
          ),
        ),
      ),
    )
  )
);