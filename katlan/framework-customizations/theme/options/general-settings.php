<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title' => __('General', 'katlan'),
		'type' => 'tab',
		'options' => array(
			'lsi_theme_layout' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'value' => array(
					'type' => 'fullwidth', ),
				'picker' => array(
					'type' => array(
						'label' => __('Theme Layout', 'katlan'),
						'type' => 'radio',
						'choices' => array(
							'fullwidth' => __('Fullwidth', 'katlan'),
							'boxed' => __('Boxed', 'katlan'),
							'sidepadding' => __('Side Padding', 'katlan')
						),
					)
				),
				'choices' => array(
					'boxed' => array(
						'lsi_boxed_width'     => array(
							'label'      => __( 'Box Width', 'katlan'),
							'type'       => 'slider',
							'value'      => 1200,
							'properties' => array(
								'min' => 1200,
								'max' => 1920,
								'sep' => 1,
							),
							'desc'       => __( 'The width of the box.', 'katlan'),
						),
						'lsi_boxed_margin_top' => array(
							'label' => __('Margin Top', 'katlan'),
							'type' => 'slider',
							'value' => 0,
							'desc' => __('Margin at the top of the box. (px)', 'katlan'),
						),
						'lsi_boxed_margin_bottom' => array(
							'label' => __('Margin Bottom', 'katlan'),
							'type' => 'slider',
							'value' => 0,
							'desc' => __('Margin at the bottom of the box. (px)', 'katlan'),
						),
						'lsi_boxed_background_color' => array(
							'label' => __('Body Background Color', 'katlan'),
							'type' => 'rgba-color-picker',
							'value' => '#000000',
							'desc' => __('Pick a color for the background.', 'katlan'),
						),
						'lsi_boxed_background_image' => array(
							'label' => __('Body Background Image', 'katlan'),
							'desc' => __('Upload an image for the background.', 'katlan'),
							'type' => 'upload',
						),
						'lsi_boxed_image_size' => array(
							'label' => __('Body Background Image Size', 'katlan'),
							'type' => 'short-select',
							'value' => 'inherit',
							'choices' => array(
								'inherit' => __( 'inherit', 'katlan'),
								'initial' => __( 'initial', 'katlan'),
								'cover' => __( 'cover', 'katlan'),
								'contain' => __( 'contain', 'katlan'),
							),
						),
						'lsi_boxed_image_repeat' => array(
							'label' => __('Body Background Image Repeat', 'katlan'),
							'type' => 'short-select',
							'value' => 'no-repeat',
							'choices' => array(
								'no-repeat' => __( 'no-repeat', 'katlan'),
								'repeat' => __( 'repeat', 'katlan'),
								'repeat-x' => __( 'repeat-x', 'katlan'),
								'repeat-y' => __( 'repeat-y', 'katlan'),
							),
						),
						'lsi_boxed_image_fixed' => array(
							'label'        => __( 'Fixed Body Background Image', 'katlan'),
							'type'         => 'switch',
							'right-choice' => array(
								'value' => 'yes',
								'label' => __( 'Yes', 'katlan')
							),
							'left-choice'  => array(
								'value' => 'no',
								'label' => __( 'No', 'katlan')
							),
							'value'        => 'no',
						),
					),
					'sidepadding' => array(
						'lsi_sidepadding'     => array(
							'label'      => __( 'Padding Size', 'katlan' ),
							'type'       => 'slider',
							'value'      => 10,
							'properties' => array(
								'min' => 0,
								'max' => 150,
								'sep' => 1,
							),
							'desc'       => __( 'Padding in px.', 'katlan' ),
						),
						'lsi_sidepadding_background_color' => array(
							'label' => __('Body Background Color', 'katlan'),
							'type' => 'rgba-color-picker',
							'value' => '#000000',
							'desc' => __('Pick a color for the background.', 'katlan'),
						),
						'lsi_sidepadding_background_image' => array(
							'label' => __('Body Background Image', 'katlan'),
							'desc' => __('Upload an image for the background.', 'katlan'),
							'type' => 'upload',
						),
						'lsi_sidepadding_image_size' => array(
							'label' => __('Body Background Image Size', 'katlan'),
							'type' => 'short-select',
							'value' => 'inherit',
							'choices' => array(
								'inherit' => __( 'inherit', 'katlan'),
								'initial' => __( 'initial', 'katlan'),
								'cover' => __( 'cover', 'katlan'),
								'contain' => __( 'contain', 'katlan'),
							),
						),
						'lsi_sidepadding_image_repeat' => array(
							'label' => __('Body Background Image Repeat', 'katlan'),
							'type' => 'short-select',
							'value' => 'no-repeat',
							'choices' => array(
								'no-repeat' => __( 'no-repeat', 'katlan'),
								'repeat' => __( 'repeat', 'katlan'),
								'repeat-x' => __( 'repeat-x', 'katlan'),
								'repeat-y' => __( 'repeat-y', 'katlan'),
							),
						),
						'lsi_sidepadding_image_fixed' => array(
							'label'        => __( 'Fixed Body Background Image', 'katlan' ),
							'type'         => 'switch',
							'right-choice' => array(
								'value' => 'yes',
								'label' => __( 'Yes', 'katlan' )
							),
							'left-choice'  => array(
								'value' => 'no',
								'label' => __( 'No', 'katlan' )
							),
							'value'        => 'no',
						),
					),
				),
				'show_borders' => false,
			),
			'lsi_page_background_color' => array(
				'label' => __('Page Background Color', 'katlan'),
				'type' => 'rgba-color-picker',
				'value' => '#ffffff',
				'desc' => __('Pick a color for page background',
					'katlan'),
			),
			'lsi_page_background_image' => array(
				'label' => __('Page Background Image', 'katlan'),
				'desc' => __('Upload an image for page background.', 'katlan'),
				'type' => 'upload',
			),
			'lsi_page_image_size' => array(
				'label' => __('Page Background Image Size', 'katlan'),
				'type' => 'short-select',
				'value' => 'inherit',
				'choices' => array(
					'inherit' => __( 'inherit', 'katlan'),
					'initial' => __( 'initial', 'katlan'),
					'cover'   => __( 'cover', 'katlan'),
					'contain' => __( 'contain', 'katlan'),
				),
			),
			'lsi_page_image_repeat' => array(
				'label' => __('Page Background Image Repeat', 'katlan'),
				'type' => 'short-select',
				'value' => 'no-repeat',
				'choices' => array(
					'no-repeat'=> __( 'no-repeat', 'katlan'),
					'repeat'   => __( 'repeat', 'katlan'),
					'repeat-x' => __( 'repeat-x', 'katlan'),
					'repeat-y' => __( 'repeat-y', 'katlan'),
				),
			),
			'lsi_enable_responsive'                    => array(
				'label'        => __( 'Enable Responsive', 'katlan'),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => __( 'Yes', 'katlan')
				),
				'left-choice'  => array(
					'value' => 'no',
					'label' => __( 'No', 'katlan')
				),
				'value'        => 'yes',
				'desc'         => __( 'Enable the responsive behaviour of the theme.', 'katlan'),
			),
			'lsi_read_more_text' => array(
				'label' => __('Read More', 'katlan'),
				'desc' => __('Default "Read more" text on buttons.', 'katlan'),
				'type' => 'text',
				'value' => 'Read more'
			),
			'lsi_404_page'          => array(
				'label'   => __( 'Unique 404 Page', 'katlan'),
				'desc'    => __( 'If You need unique design, select the 404 error page', 'katlan'),
				'value'   => '',
				'type'    => 'select',
				'choices' => lakshmi_lite_all_pages(),
			),
			'lsi_gmap_key' => array(
				'label' => __( 'Google Maps', 'katlan' ),
				'type'  => 'text',
				'desc' => sprintf( __( 'Create an account in %1$sGoogle Console%2$s and add the API Key.', 'katlan' ), '<a target="_blank" href="https://console.developers.google.com/flows/enableapi?apiid=places_backend,maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true">', '</a>' )
			),
			'lsi_custom_css'          => array(
				'label'   => __( 'Custom CSS', 'katlan' ),
				'desc'    => __( 'Add Your custom CSS here', 'katlan' ),
				'value'   => '',
				'type'    => 'textarea',
			),
		)
	)
);