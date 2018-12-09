<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'A-Master Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'darlenetawiah@hotmail.com',
		'to' => 'darlenetawiah@hotmail.com'
	),
	'fields' => array(
		'custom_U4819' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Name\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U4827' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U4832' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Company',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Company\' is required.'
			)
		),
		'custom_U4841' => array(
			'order' => 5,
			'type' => 'checkbox',
			'label' => 'Group early bird registration (5 per table) - $4,475.00 (plus application tax)',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Group early bird registration (5 per table) - $4,475.00 (plus application tax)\' is required.'
			)
		),
		'custom_U4814' => array(
			'order' => 6,
			'type' => 'checkbox',
			'label' => 'Group registration (5 per table ) - $4,975.00  (plus applicable tax)',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Group registration (5 per table ) - $4,975.00  (plus applicable tax)\' is required.'
			)
		),
		'custom_U4823' => array(
			'order' => 7,
			'type' => 'checkbox',
			'label' => 'Group evening networking mixer (no charge)',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Group evening networking mixer (no charge)\' is required.'
			)
		)
	)
);

process_form($form);
?>
