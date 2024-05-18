<?php 
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_654811dac9c99',
	'title' => 'Blocks',
	'fields' => array(
		array(
			'key' => 'field_654818726dcdd',
			'label' => 'Blocks',
			'name' => 'blocks',
			'aria-label' => '',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'layout_654818787c3a8' => array(
					'key' => 'layout_654818787c3a8',
					'name' => 'page_banner',
					'label' => 'page Banner',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_65483bc9e252e',
							'label' => 'page_banner',
							'name' => 'page_banner',
							'aria-label' => '',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'layout' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_654813f841d75',
									'label' => 'image',
									'name' => 'image',
									'aria-label' => '',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'preview_size' => 'medium',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
								),
								array(
									'key' => 'field_654813a941d73',
									'label' => 'content',
									'name' => 'content',
									'aria-label' => '',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'default_value' => '',
									'delay' => 0,
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_654818f62a507' => array(
					'key' => 'layout_654818f62a507',
					'name' => 'two_cards',
					'label' => 'Two Cards',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_654814d741d7e',
							'label' => 'Two Cards',
							'name' => 'two_cards',
							'aria-label' => '',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'layout' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_654934cf1bd4b',
									'label' => 'image',
									'name' => 'image',
									'aria-label' => '',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'preview_size' => 'medium',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
								),
								array(
									'key' => 'field_654814e841d7f',
									'label' => 'title card 1',
									'name' => 'title_card_1',
									'aria-label' => '',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_654814f241d80',
									'label' => 'content card 1',
									'name' => 'content_card_1',
									'aria-label' => '',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
								),
								array(
									'key' => 'field_6548153f41d81',
									'label' => 'button',
									'name' => 'button',
									'aria-label' => '',
									'type' => 'link',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
								),
								array(
									'key' => 'field_6548154841d82',
									'label' => 'title card 2',
									'name' => 'title_card_2',
									'aria-label' => '',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_6548154d41d83',
									'label' => 'content card 2',
									'name' => 'content_card_2',
									'aria-label' => '',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_6548155441d84',
									'label' => 'button 2',
									'name' => 'button_2',
									'aria-label' => '',
									'type' => 'link',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_654819102a509' => array(
					'key' => 'layout_654819102a509',
					'name' => 'repeater_zigzag',
					'label' => 'Repeater ZigZag',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6548156141d85',
							'label' => 'Repeater ZigZag',
							'name' => 'repeater_zigzag',
							'aria-label' => '',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 0,
							'max' => 0,
							'layout' => 'table',
							'button_label' => 'Add Row',
							'rows_per_page' => 20,
							'sub_fields' => array(
								array(
									'key' => 'field_6548156e41d86',
									'label' => 'image',
									'name' => 'image',
									'aria-label' => '',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'preview_size' => 'medium',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
									'parent_repeater' => 'field_6548156141d85',
								),
								array(
									'key' => 'field_6548158e41d88',
									'label' => 'content',
									'name' => 'content',
									'aria-label' => '',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
									'parent_repeater' => 'field_6548156141d85',
								),
								array(
									'key' => 'field_6548159d41d8a',
									'label' => 'order',
									'name' => 'order',
									'aria-label' => '',
									'type' => 'radio',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'choices' => array(
										'order-right' => 'order-right',
										'order-left' => 'order-left',
										'order-center' => 'order-center',
									),
									'allow_null' => 0,
									'other_choice' => 0,
									'default_value' => '',
									'layout' => 'vertical',
									'return_format' => 'value',
									'save_other_choice' => 0,
									'parent_repeater' => 'field_6548156141d85',
								),
								array(
									'key' => 'field_6556a87593187',
									'label' => 'background colour',
									'name' => 'bg_colour',
									'aria-label' => '',
									'type' => 'color_picker',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'enable_opacity' => false,
									'return_format' => 'string',
									'parent_repeater' => 'field_6548156141d85',
								),
								array(
									'key' => 'field_6607306d97502',
									'label' => 'video',
									'name' => 'video',
									'aria-label' => '',
									'type' => 'file',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'library' => 'all',
									'min_size' => '',
									'max_size' => '',
									'mime_types' => '',
									'parent_repeater' => 'field_6548156141d85',
								),
								array(
									'key' => 'field_66073656f332c',
									'label' => 'link',
									'name' => 'link',
									'aria-label' => '',
									'type' => 'link',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'parent_repeater' => 'field_6548156141d85',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_654819232a50b' => array(
					'key' => 'layout_654819232a50b',
					'name' => 'grid_images',
					'label' => 'Grid images',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6609c16963b50',
							'label' => 'grid_images_title',
							'name' => 'grid_images_title',
							'aria-label' => '',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
						array(
							'key' => 'field_66098fa75783b',
							'label' => 'Grid Column Number',
							'name' => 'grid_column_number',
							'aria-label' => '',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								1 => '1',
								2 => '2',
								3 => '3',
								4 => '4',
								5 => '5',
								6 => '6',
							),
							'default_value' => false,
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'return_format' => 'value',
							'placeholder' => '',
						),
						array(
							'key' => 'field_6608cce56d0cd',
							'label' => 'grid_text',
							'name' => 'grid_text',
							'aria-label' => '',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
						array(
							'key' => 'field_6548147f41d7a',
							'label' => 'Grid Images',
							'name' => 'grid_images',
							'aria-label' => '',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 0,
							'max' => 0,
							'layout' => 'table',
							'button_label' => 'Add Row',
							'rows_per_page' => 20,
							'sub_fields' => array(
								array(
									'key' => 'field_6548149a41d7b',
									'label' => 'link',
									'name' => 'link',
									'aria-label' => '',
									'type' => 'link',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'parent_repeater' => 'field_6548147f41d7a',
								),
								array(
									'key' => 'field_654814b041d7c',
									'label' => 'image',
									'name' => 'image',
									'aria-label' => '',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'preview_size' => 'medium',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
									'parent_repeater' => 'field_6548147f41d7a',
								),
								array(
									'key' => 'field_66075cadeaa08',
									'label' => 'content',
									'name' => 'content',
									'aria-label' => '',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
									'parent_repeater' => 'field_6548147f41d7a',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_6609abc607179' => array(
					'key' => 'layout_6609abc607179',
					'name' => 'grid_cards',
					'label' => 'Grid Cards',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6609abc60717a',
							'label' => 'Grid Column Number',
							'name' => 'grid_column_number',
							'aria-label' => '',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								1 => '1',
								2 => '2',
								3 => '3',
								4 => '4',
								5 => '5',
								6 => '6',
							),
							'default_value' => false,
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'return_format' => 'value',
							'placeholder' => '',
						),
						array(
							'key' => 'field_6609abc60717b',
							'label' => 'grid_text',
							'name' => 'grid_text',
							'aria-label' => '',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
						array(
							'key' => 'field_6609abc60717c',
							'label' => 'Grid Images',
							'name' => 'grid_images',
							'aria-label' => '',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 0,
							'max' => 0,
							'layout' => 'table',
							'button_label' => 'Add Row',
							'rows_per_page' => 20,
							'sub_fields' => array(
								array(
									'key' => 'field_660ae55c3e5dd',
									'label' => 'title',
									'name' => 'title',
									'aria-label' => '',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
									'parent_repeater' => 'field_6609abc60717c',
								),
								array(
									'key' => 'field_6609abc60717f',
									'label' => 'content',
									'name' => 'content',
									'aria-label' => '',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
									'parent_repeater' => 'field_6609abc60717c',
								),
								array(
									'key' => 'field_6609abc60717d',
									'label' => 'link',
									'name' => 'link',
									'aria-label' => '',
									'type' => 'link',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'parent_repeater' => 'field_6609abc60717c',
								),
								array(
									'key' => 'field_6609abc60717e',
									'label' => 'image',
									'name' => 'image',
									'aria-label' => '',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'preview_size' => 'medium',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
									'parent_repeater' => 'field_6609abc60717c',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_6549abd607129' => array(
					'key' => 'layout_6549abd607129',
					'name' => 'grid_icon_cards',
					'label' => 'Grid Icon Cards',
					'sub_fields' => array(
						array(
							'key' => 'field_6609abd60717a',
							'label' => 'Grid Column Number',
							'name' => 'grid_column_number',
							'aria-label' => '',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								1 => '1',
								2 => '2',
								3 => '3',
								4 => '4',
								5 => '5',
								6 => '6',
							),
							'default_value' => false,
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'return_format' => 'value',
							'placeholder' => '',
						),
						array(
							'key' => 'field_6609abd60717b',
							'label' => 'grid_text',
							'name' => 'grid_text',
							'aria-label' => '',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
						array(
							'key' => 'field_6609abd60717c',
							'label' => 'Grid Images',
							'name' => 'grid_images',
							'aria-label' => '',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 0,
							'max' => 0,
							'layout' => 'table',
							'button_label' => 'Add Row',
							'rows_per_page' => 20,
							'sub_fields' => array(
								array(
									'key' => 'field_660ae55c3e5dd',
									'label' => 'title',
									'name' => 'title',
									'aria-label' => '',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
									'parent_repeater' => 'field_6609abc60717c',
								),
								array(
									'key' => 'field_6609abc60717f',
									'label' => 'content',
									'name' => 'content',
									'aria-label' => '',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
									'parent_repeater' => 'field_6609abc60717c',
								),
								array(
									'key' => 'field_6609abc60717d',
									'label' => 'link',
									'name' => 'link',
									'aria-label' => '',
									'type' => 'link',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'parent_repeater' => 'field_6609abc60717c',
								),
								array(
									'key' => 'field_6609abc60717e',
									'label' => 'image',
									'name' => 'image',
									'aria-label' => '',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'preview_size' => 'medium',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
									'parent_repeater' => 'field_6609abc60717c',
								),
							),
						),
						array(
							'key' => 'field_6609cc7f4aecd',
							'label' => 'bg colour',
							'name' => 'bg_colour',
							'aria-label' => '',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'enable_opacity' => false,
							'return_format' => 'string',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_654819302a50d' => array(
					'key' => 'layout_654819302a50d',
					'name' => 'separated_zigzag',
					'label' => 'Separated ZigZag',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6548142a41d76',
							'label' => 'Separated ZigZag',
							'name' => 'separated_zigzag',
							'aria-label' => '',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'layout' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_65493a41c2ce9',
									'label' => 'image',
									'name' => 'image',
									'aria-label' => '',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'preview_size' => 'medium',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
								),
								array(
									'key' => 'field_6548145741d78',
									'label' => 'Content',
									'name' => 'content',
									'aria-label' => '',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
								),
								array(
									'key' => 'field_6548147141d79',
									'label' => 'button',
									'name' => 'button',
									'aria-label' => '',
									'type' => 'link',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
								),
								array(
									'key' => 'field_6609cc7f4aec0',
									'label' => 'bg colour',
									'name' => 'bg_colour',
									'aria-label' => '',
									'type' => 'color_picker',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'enable_opacity' => false,
									'return_format' => 'string',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_654819302a50b' => array(
					'key' => 'layout_654819302a50b',
					'name' => 'stylized_zigzag',
					'label' => 'Stylized ZigZag',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6548142a41d7b',
							'label' => 'Stylized ZigZag',
							'name' => 'stylized_zigzag',
							'aria-label' => '',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'layout' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_65493a41c2ceb',
									'label' => 'image',
									'name' => 'image',
									'aria-label' => '',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'preview_size' => 'medium',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
								),
								array(
									'key' => 'field_6548145741d7b',
									'label' => 'Content',
									'name' => 'content',
									'aria-label' => '',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
								),
								array(
									'key' => 'field_6548147141d7b',
									'label' => 'button',
									'name' => 'button',
									'aria-label' => '',
									'type' => 'link',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
								),
								array(
									'key' => 'field_6609cc7f4aecb',
									'label' => 'bg colour',
									'name' => 'bg_colour',
									'aria-label' => '',
									'type' => 'color_picker',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'enable_opacity' => false,
									'return_format' => 'string',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_655694003a8fb' => array(
					'key' => 'layout_655694003a8fb',
					'name' => 'text_centered',
					'label' => 'Text Centered',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6556940f3a8fc',
							'label' => 'text centered',
							'name' => 'text_centered',
							'aria-label' => '',
							'type' => 'group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'layout' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_65569472fdf19',
									'label' => 'image',
									'name' => 'image',
									'aria-label' => '',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'preview_size' => 'medium',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
								),
								array(
									'key' => 'field_65569490fdf1a',
									'label' => 'content_card',
									'name' => 'content_card',
									'aria-label' => '',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
								),
								array(
									'key' => 'field_65569495fdf1b',
									'label' => 'button',
									'name' => 'button',
									'aria-label' => '',
									'type' => 'link',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
								),
								array(
									'key' => 'field_6556994f60e94',
									'label' => 'Background Color',
									'name' => 'background_color',
									'aria-label' => '',
									'type' => 'color_picker',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'enable_opacity' => false,
									'return_format' => 'string',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_6608c38baf940' => array(
					'key' => 'layout_6608c38baf940',
					'name' => 'faq_blocks',
					'label' => 'faq_blocks',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6608c3beaf943',
							'label' => 'faq_text',
							'name' => 'faq_text',
							'aria-label' => '',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
						array(
							'key' => 'field_6608c3d1af944',
							'label' => 'repeater_faq',
							'name' => 'repeater_faq',
							'aria-label' => '',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 0,
							'max' => 0,
							'layout' => 'table',
							'button_label' => 'Add Row',
							'rows_per_page' => 20,
							'sub_fields' => array(
								array(
									'key' => 'field_6608c393af941',
									'label' => 'question',
									'name' => 'question',
									'aria-label' => '',
									'type' => 'textarea',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'maxlength' => '',
									'rows' => '',
									'new_lines' => '',
									'parent_repeater' => 'field_6608c3d1af944',
								),
								array(
									'key' => 'field_6608c39caf942',
									'label' => 'answer',
									'name' => 'answer',
									'aria-label' => '',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
									'parent_repeater' => 'field_6608c3d1af944',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_6609d90484037' => array(
					'key' => 'layout_6609d90484037',
					'name' => 'testimonial_slider',
					'label' => 'testimonial slider',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6609d92f8403c',
							'label' => 'repeater testimonial',
							'name' => 'repeater_testimonial',
							'aria-label' => '',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 0,
							'max' => 0,
							'layout' => 'table',
							'button_label' => 'Add Row',
							'rows_per_page' => 20,
							'sub_fields' => array(
								array(
									'key' => 'field_6609d962c1003',
									'label' => 'quote',
									'name' => 'quote',
									'aria-label' => '',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
									'parent_repeater' => 'field_6609d92f8403c',
								),
								array(
									'key' => 'field_6609d956c1002',
									'label' => 'name',
									'name' => 'name',
									'aria-label' => '',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
									'parent_repeater' => 'field_6609d92f8403c',
								),
							),
						),
						array(
							'key' => 'field_6609d983c1004',
							'label' => 'video',
							'name' => 'video',
							'aria-label' => '',
							'type' => 'file',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'library' => 'all',
							'min_size' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_660af71c36e95' => array(
					'key' => 'layout_660af71c36e95',
					'name' => 'content_sidebar',
					'label' => 'content_sidebar',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_660af73336e9a',
							'label' => 'content',
							'name' => 'content',
							'aria-label' => '',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Add Row',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'blocks.php',
			),
		),
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'homepage-2024.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => false,
) );
} );