<?php
/**
 * implements hook_form_alter() 
 */
function ascend_omega_form_alter(&$form, &$form_state, $form_id) {
    if($form_id === 'webform_client_form_12') {
        $form = _ascend_omega_webform_set_placeholder($form);
    }  
}

/**
 * takes a form and sets the placeholder for valid elements. set subelements
 * recursively for fieldset inputs.
 * 
 * @param type $form
 * @return type 
 */
function _ascend_omega_webform_set_placeholder($form) {
    $allowed = array('textfield', 'textarea', 'webform_email', 'fieldset');
        
    foreach($form['submitted'] as $k => $input) {
        if(in_array($input['#type'], $allowed)) {

            if($input['#type'] === 'fieldset') {
               foreach($input as $name => $subinput) {
                   if(isset($subinput['#type']) && in_array($subinput['#type'], $allowed)) {
                        $form['submitted'][$k][$name]['#attributes']['placeholder'] = t($subinput['#title']);
                    }
                } 
            } else {
                $form['submitted'][$k]['#attributes']['placeholder'] = t($input['#title']);
            }
        }
    }
    
    
    return $form;
   
}

function ascend_omega_preprocess_page(&$vars) {
    
    if($vars['node']->type === 'panel') {
        drupal_set_title('');
    }
}