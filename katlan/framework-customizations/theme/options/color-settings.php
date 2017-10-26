<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'color' => array(
		'title'   => __( 'Colors', 'katlan'),
		'type'    => 'tab',
		'options' => array(
			'lsi_header_colors_text'                      => array(
				'label' => __( 'Header Style', 'katlan'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the header as You want.', 'katlan'),
				'html'  => '',
			),
			'lsi_header_background_color' => array(
				'label' => __('Header Background Color', 'katlan'),
				'type' => 'rgba-color-picker',
				'value' => '#1f1a17',
				'desc' => __('Pick a color for header background.', 'katlan'),
			),
			'lsi_footer_colors_text'                      => array(
				'label' => __( 'Footer Style', 'katlan'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the footer as You want.', 'katlan'),
				'html'  => '',
			),
			'lsi_fw_background_color' => array(
				'label' => __('Footer Widgets Background Color', 'katlan'),
				'type' => 'rgba-color-picker',
				'value' => '#dcdcdc',
				'desc' => __('Pick a color for the background.', 'katlan'),
			),
			'lsi_fwil_bc' => array(
				'label' => __('Footer Layer Color', 'katlan'),
				'type' => 'rgba-color-picker',
				'value' => 'rgba(255,255,255,0)',
				'desc' => __('Pick a color for the background.', 'katlan'),
			),
			'lsi_bf_bg' => array(
				'label' => __('Bottom Footer Background Color', 'katlan'),
				'type' => 'rgba-color-picker',
				'value' => '#1f1a17',
				'desc' => __('Pick a color for bottom footer background.',
					'katlan'),
			),
		),
	),
);

