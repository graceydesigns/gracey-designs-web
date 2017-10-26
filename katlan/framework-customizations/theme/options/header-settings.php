<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header' => array(
		'title' => __('Header', 'katlan'),
		'type' => 'tab',
		'options' => array(
			'lsi_header_layout'	=> array(
				'label'   => __( 'Header Layout', 'katlan'),
				'type'    => 'radio',
				'value'   => 'logo-rightmenu-buttons',
				'desc'    => __( 'Choose one of the header layouts.', 'katlan'),
				'choices' => array(
					'logo-menu-buttons' => __( 'Logo - Menu - Buttons', 'katlan'),
					'logo-rightmenu-buttons' => __( 'Logo - Right Menu - Buttons', 'katlan'),
					'toplogo-centermenu-centerbuttons' => __( 'Top Logo - Center Menu - Buttons', 'katlan' ),
					'toplogowa-menu-buttons' => __( 'Top Logo With Ad - Menu - Buttons', 'katlan'),
				),
			),
			'lsi_header_style_text'                      => array(
				'label' => __( 'Header Style', 'katlan'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the header as You want.', 'katlan'),
				'html'  => '',
			),
			'lsi_header_background_image' => array(
				'label' => __('Header Background Image', 'katlan'),
				'desc' => __('Upload an image for header background.', 'katlan'),
				'type' => 'upload',
			),
			'lsi_header_image_size' => array(
				'label' => __('Header Background Image Size', 'katlan'),
				'type' => 'short-select',
				'value' => 'inherit',
				'choices' => array(
					'inherit' => __( 'inherit', 'katlan'),
					'initial' => __( 'initial', 'katlan'),
					'cover'   => __( 'cover', 'katlan'),
					'contain' => __( 'contain', 'katlan'),
				),
			),
			'lsi_header_image_repeat' => array(
				'label' => __('Header Background Image Repeat', 'katlan'),
				'type' => 'short-select',
				'value' => 'no-repeat',
				'choices' => array(
					'no-repeat'=> __( 'no-repeat', 'katlan'),
					'repeat'   => __( 'repeat', 'katlan'),
					'repeat-x' => __( 'repeat-x', 'katlan'),
					'repeat-y' => __( 'repeat-y', 'katlan'),
				),
			),
			'lsi_logo_style_text'                      => array(
				'label' => __( 'Logo Style', 'katlan'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the logo area as You want.', 'katlan'),
				'html'  => '',
			),
			'lsi_logo_type' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'value' => array(
					'logo' => 'text', ),
				'picker' => array(
					'logo' => array(
						'label' => __('Logo Type', 'katlan'),
						'type' => 'radio',
						'choices' => array(
							'text' => __('Text-based Logo', 'katlan'),
							'image' => __('Image Logo', 'katlan')
						),
						'desc' => __('Select one from the logo types and add the content.',
							'katlan'),
					)
				),
				'choices' => array(
					'image' => array(
						'lsi_logo_image' => array(
							'label' => __('Logo Image', 'katlan'),
							'desc' => __('Upload the logo image.', 'katlan'),
							'type' => 'upload',
						),
					),
				),
				'show_borders' => false,
			),
			'lsi_logo_padding' => array(
				'label' => __('Logo Padding', 'katlan'),
				'desc' => __('Padding CSS value for the logo area (top, right, bottom, left).', 'katlan'),
				'type' => 'text',
				'value' => '30px 20px 30px 0'
			),
			'lsi_tagline' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'picker' => array(
					'on_off' => array(
						'label' => __('Display Tagline', 'katlan'),
						'type' => 'switch',
						'right-choice' => array(
							'value' => 'off',
							'label' => __('Off', 'katlan')
						),
						'left-choice' => array(
							'value' => 'on',
							'label' => __('On', 'katlan')
						),
						'value' => 'off',
						'desc' => __('Display tagline under the logo.', 'katlan'),
					)
				),
				'show_borders' => false,
			),
			'lsi_logo_advert' => array(
				'label' => __('Header Banner Ad (728 X 90)', 'katlan'),
				'desc' => __('Adsense, Buy Sell Ads or Custom Code, if You`ve choosen "Top Logo With Ad" style.', 'katlan'),
				'type' => 'textarea',
				'value' => ''
			),
			'lsi_menu_item_text'                      => array(
				'label' => __( 'Menu Item', 'katlan'),
				'type'  => 'html',
				'value' => '',
				'html'  => '',
			),
			'lsi_menu_item_mr' => array(
				'label' => __('Menu Item Margin Right', 'katlan'),
				'type' => 'slider',
				'value' => 5,
			),
			'lsi_menu_item_pt' => array(
				'label' => __('Menu Item Padding Top', 'katlan'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_menu_item_pr' => array(
				'label' => __('Menu Item Padding Right', 'katlan'),
				'type' => 'slider',
				'value' => 8,
			),
			'lsi_menu_item_pb' => array(
				'label' => __('Menu Item Padding Bottom', 'katlan'),
				'type' => 'slider',
				'value' => 37,
			),
			'lsi_menu_item_pl' => array(
				'label' => __('Menu Item Padding Left', 'katlan'),
				'type' => 'slider',
				'value' => 8,
			),
			'lsi_menu_item_hover_effect' => array(
				'label' => __('Menu Item Hover Effect', 'katlan'),
				'type' => 'select',
				'value' => 'none',
				'choices' => array(
					'none'       => __('none', 'katlan'),
					'line-animation' => __('line-animation', 'katlan'),
					'line-through' => __('line-through', 'katlan'),
					'overline'  => __('overline', 'katlan'),
					'underline'  => __('underline', 'katlan'),
				),
			),
			'lsi_menu_item_transition' => array(
				'type' => 'text',
				'label' => __('Item Transition Speed', 'katlan'),
				'value' => '0.2',
				'desc' => __('Add the speed of the hover effect in sec.', 'katlan'),
			),
			'lsi_submenu_item_text'                      => array(
				'label' => __( 'Submenu Item', 'katlan'),
				'type'  => 'html',
				'value' => '',
				'html'  => '',
			),
			'lsi_submenu_allow_icon'                    => array(
				'label'        => __( 'Submenu Indicator', 'katlan'),
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
				'desc'         => __( 'Allow submenu indicator icon.', 'katlan'),
			),
			'lsi_submenu_width' => array(
				'label' => __('Submenu width', 'katlan'),
				'type' => 'slider',
				'value' => 12,
				'desc' => __('Add the width of the submenu.', 'katlan'),
			),
			'lsi_submenu_item_pt' => array(
				'label' => __('Submenu Item Padding Top', 'katlan'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_submenu_item_pr' => array(
				'label' => __('Submenu Item Padding Right', 'katlan'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_submenu_item_pb' => array(
				'label' => __('Submenu Item Padding Bottom', 'katlan'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_submenu_item_pl' => array(
				'label' => __('Submenu Item Padding Left', 'katlan'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_submenu_item_hover_effect' => array(
				'label' => __('Item Hover Effect', 'katlan'),
				'type' => 'select',
				'value' => 'none',
				'choices' => array(
					'none'       => __('none', 'katlan'),
					'line-through' => __('line-through', 'katlan'),
					'overline'  => __('overline', 'katlan'),
					'underline'  => __('underline', 'katlan'),
				),
			),
			'lsi_header_buttons_text'                      => array(
				'label' => __( 'Header Buttons', 'katlan'),
				'type'  => 'html',
				'value' => '',
				'html'  => '',
			),
			'lsi_header_buttons' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'picker' => array(
					'on_off' => array(
						'label' => __('Allow Buttons', 'katlan'),
						'type' => 'switch',
						'right-choice' => array(
							'value' => 'off',
							'label' => __('Off', 'katlan')
						),
						'left-choice' => array(
							'value' => 'on',
							'label' => __('On', 'katlan')
						),
						'value' => 'on',
						'desc' => __('Turn on or off.', 'katlan'),
					)
				),
				'choices' => array(
					'on' => array(
						'lsi_hb_padding' => array(
							'label' => __('Buttons Area Padding', 'katlan'),
							'desc' => __('Buttons area padding (top, right, bottom, left).', 'katlan'),
							'type' => 'text',
							'value' => '10px 0 30px 10px'
						),
						'lsi_hb_ivp' => array(
							'label' => __('Buttons Inner Vertical Padding', 'katlan'),
							'type' => 'slider',
							'value' => 5,
						),
						'lsi_hb_ihp' => array(
							'label' => __('Buttons Inner Horizontal Padding', 'katlan'),
							'type' => 'slider',
							'value' => 10,
						),
						'lsi_hb_search'                    => array(
							'label'        => __( 'Search Button', 'katlan'),
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
							'desc'         => __( 'Allow search field on header.', 'katlan'),
						),
						'lsi_text' => array(
							'type' => 'text',
							'label' => __('Extra Button Text', 'katlan'),
							'value' => '',
							'desc' => __('Leave blank, if You don`t need extra button.', 'katlan'),
						),
						'lsi_link' => array(
							'type' => 'text',
							'label' => __('Extra Button Link', 'katlan'),
							'desc' => __('Add the link of the extra button.', 'katlan'),
						),
					),

				),
				'show_borders' => false,
			),
			'lsi_mobil_menu_text'                      => array(
				'label' => __( 'Mobil Menu', 'katlan'),
				'type'  => 'html',
				'value' => '',
				'html'  => '',
				'desc' => __('Setup the mobil menu as You want.', 'katlan'),
			),
			'lsi_mm_start' => array(
				'type'  => 'slider',
				'value' => 967,
				'properties' => array(
					'min' => 300,
					'max' => 1920,
					'step' => 1, // Set slider step. Always > 0. Could be fractional.
				),
				'label' => __('Mobil Menu Under', 'katlan'),
				'desc'  => __('Add the device width (in px) where You want to change the basic menu to mobile menu.', 'katlan'),
			),
			'lsi_mm' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'picker' => array(
					'on_off' => array(
						'label' => __('Display Mobil Menu', 'katlan'),
						'type' => 'switch',
						'right-choice' => array(
							'value' => 'off',
							'label' => __('Off', 'katlan')
						),
						'left-choice' => array(
							'value' => 'on',
							'label' => __('On', 'katlan')
						),
						'value' => 'on',
						'desc' => __('Turn on or off.', 'katlan'),
					)
				),
				'choices' => array(
					'on' => array(
						'lsi_mm_vp' => array(
							'label' => __('Mobil Menu Item Padding', 'katlan'),
							'type' => 'slider',
							'value' => 5,
							'description' => __('Vertical padding for the items in px.', 'katlan')
						),					),

				),
				'show_borders' => false,
			),
			'lsi_mm_transparent_header'                    => array(
				'label'        => __( 'Transparent Header on Mobile', 'katlan'),
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
				'desc'         => __( 'Allow transparent header on mobile', 'katlan'),
			),
			'lsi_transparent_header_text'                      => array(
				'label' => __( 'Transparent Header', 'katlan'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the transparent header as You want.', 'katlan'),
				'html'  => '',
			),
			'lsi_th_allow'                    => array(
				'label'        => __( 'Transparent Header For Pages', 'katlan'),
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
				'desc'         => __( 'Allow transparent header for all pages.', 'katlan'),
			),
		)
	)
);