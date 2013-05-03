<?php

$plugin = array(
    'title' => t('Profile Stub'),
    'description' => t('Profile Stub'),
    'render pane' => 'ascend_panels_profile_stub_style_render_pane'
);


function theme_ascend_panels_profile_stub_style_render_pane($vars) {
    $img = $vars['content']->content['field_profile_photo']['#items'][0];
    //echo '<pre>'; print_r($vars);
    $imgattr = array(
        'path' => variable_get('file_' . file_default_scheme() . '_path', conf_path() . '/files') .'/'. $img['filename'], 
        'alt' => $img['alt'],
        'title' => $img['title'],
        'attributes' => array(
            'class' => array(
                'profile-stub-photo'
             )
        )
    );
    
    $css = isset($vars['content']->css_class)
         ? $vars['content']->css_class
         : '';
    
    $out = '<div class="profile-stub '.$css.'">';
    $out .= '<a href="'. drupal_lookup_path('alias', $vars['content']->title_link) .'">';
    $out .= theme_image($imgattr);
    $out .= '</a>';
    $out .= '<p class="profile-stub-name">'. $vars['content']->title . '</p>';
    
    $out .= '</div>';

  return $out;
}