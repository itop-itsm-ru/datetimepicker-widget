<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'datetimepicker-widget/',
	array(
		// Identification
		//
		'label' => 'DateTimePicker Widget',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(

		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'main.datetimepicker-widget.php'
		),
		'webservice' => array(

		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),

		// Documentation
		//
		'doc.manual_setup' => 'https://github.com/vbkunin/datetimepicker-widget-for-itop', // hyperlink to manual setup documentation, if any
		'doc.more_information' => 'https://github.com/vbkunin/datetimepicker-widget-for-itop', // hyperlink to more information, if any

		// Default settings
		//
		'settings' => array(
			'default' => array(
				'lang' => 'ru',
				'dayOfWeekStart' => 1,
				'step' => 30
				)
		),
	)
);


?>
