<?php
function ncnmemberarea_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  	'render element' => 'form',
  	'path' => drupal_get_path('theme', 'ncnmemberarea') . '/templates',
  	'template' => 'user-login',
  	'preprocess functions' => array(
  	'ncnmemberarea_preprocess_user_login'
  	),
	);

	// create custom user-profile-edit.tpl.php
	$items['user_profile_form'] = array(
			'arguments' => array('form' => NULL),
			'render element' => 'form',
			'template' => 'templates/user-profile-edit',
		);

	return $items;
}

function ncnmemberarea_preprocess_page(&$variables) {
  // This disables message-printing on ALL page displays
	if($variables['is_front'] == 1)	
		$variables['show_messages'] = FALSE;
}

function ncnmemberarea_preprocess_user_login(&$variables) {
	$variables['messages'] = theme('status_messages');
}

function ncnmemberarea_textfield(&$variables) {
	$element = $variables['element'];
  $element['#attributes']['type'] = 'text';
  element_set_attributes($element, array(
    'id',
    'name',
    'value',
    'maxlength',
  ));
  _form_set_class($element, array(
    'form-text tw-w-full tw-p-1  tw-border-transparent tw-rounded tw-bg-gray-200 hover:tw-bg-white hover:tw-border-solid hover:tw-border-gray-500 tw-outline-none focus:tw-bg-white focus:tw-shadow-outline',
  ));
  $extra = '';
  if ($element['#autocomplete_path'] && !empty($element['#autocomplete_input'])) {
    drupal_add_library('system', 'drupal.autocomplete');
    $element['#attributes']['class'][] = 'form-autocomplete';
    $attributes = array();
    $attributes['type'] = 'hidden';
    $attributes['id'] = $element['#autocomplete_input']['#id'];
    $attributes['value'] = $element['#autocomplete_input']['#url_value'];
    $attributes['disabled'] = 'disabled';
    $attributes['class'][] = 'autocomplete';
    $extra = '<input' . drupal_attributes($attributes) . ' />';
  }

  $output = '<input' . drupal_attributes($element['#attributes']) . ' />';
	return $output . $extra;
}

function ncnmemberarea_password($variables) {
  $element = $variables['element'];
  $element['#attributes']['type'] = 'password';
  element_set_attributes($element, array(
    'id',
    'name',
    'size',
    'maxlength',
  ));
  _form_set_class($element, array(
    'form-text tw-w-full tw-p-1  tw-border-transparent tw-rounded tw-bg-gray-200 hover:tw-bg-white hover:tw-border-solid hover:tw-border-gray-500 tw-outline-none focus:tw-bg-white focus:tw-shadow-outline',
  ));
  return '<input' . drupal_attributes($element['#attributes']) . ' />';
}

function ncnmemberarea_select($variables) {
  $element = $variables['element'];
  element_set_attributes($element, array(
    'id',
    'name',
    'size',
  ));
  _form_set_class($element, array(
    'form-select tw-w-full tw-h-8 tw-bg-gray-200 tw-mb-1',
  ));
  return '<select' . drupal_attributes($element['#attributes']) . '>' . form_select_options($element) . '</select>';
}

function ncnmemberarea_textarea($variables) {
  $element = $variables['element'];
  element_set_attributes($element, array(
    'id',
    'name',
    'cols',
    'rows',
  ));
  _form_set_class($element, array(
    'form-textarea',
		'tw-w-full tw-p-1  tw-border-transparent tw-rounded tw-bg-gray-200 hover:tw-bg-white hover:tw-border-solid hover:tw-border-gray-500 tw-outline-none focus:tw-bg-white focus:tw-shadow-outline'
  ));
  $wrapper_attributes = array(
    'class' => array(
			'form-textarea-wrapper',
    ),
  );

  // Add resizable behavior.
  if (!empty($element['#resizable'])) {
    drupal_add_library('system', 'drupal.textarea');
    $wrapper_attributes['class'][] = 'resizable';
  }
  $output = '<div' . drupal_attributes($wrapper_attributes) . '>';
  $output .= '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
  $output .= '</div>';
  return $output;
}
