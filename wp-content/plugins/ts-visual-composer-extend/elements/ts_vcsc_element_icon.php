<?php
	global $VISUAL_COMPOSER_EXTENSIONS;
	
	$VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                      	=> __( "TS Icon Fonts", "ts_visual_composer_extend" ),
		"base"                      	=> "TS-VCSC-Font-Icons",
		"icon" 	                    	=> "ts-composer-element-icon-icon-font",
		"class"                     	=> "",
		"category"                  	=> __("VC Extensions", "ts_visual_composer_extend"),
		"description" 		    		=> __("Place a font (vector) icon or image", "ts_visual_composer_extend"),
		"js_view"     					=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorLivePreview == "true" ? "TS_VCSC_IconFontViewCustom" : ""),
		"admin_enqueue_js"				=> "",
		"admin_enqueue_css"				=> "",
		"params"                    	=> array(
			// Main Icon Settings
			array(
				"type"              	=> "seperator",
				"param_name"        	=> "seperator_1",
				"seperator"				=> "Icon / Image Selection Settings",
			),
			array(
				"type"					=> "switch_button",
				"heading"           	=> __( "Use Normal Image", "ts_visual_composer_extend" ),
				"param_name"        	=> "icon_replace",
				"value"             	=> "false",
				"description"       	=> __( "Switch the toggle to either use an icon or a normal image.", "ts_visual_composer_extend" )
			),
			array(
				'type' 					=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorType,
				'heading' 				=> __( 'Select Icon', 'ts_visual_composer_extend' ),
				'param_name' 			=> 'icon',
				'value'					=> '',
				'source'				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorValue,
				'settings' 				=> array(
					'emptyIcon' 				=> false,
					'type' 						=> 'extensions',
					'iconsPerPage' 				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorPager,
					'source' 					=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorSource,
				),
				"admin_label"       	=> true,
				"description"       	=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorVisualSelector == "true" ? __( "Select the icon you want to display.", "ts_visual_composer_extend" ) : $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorString),
				"dependency"        	=> array( 'element' => "icon_replace", 'value' => 'false' )
			),				
			array(
				"type"              	=> "attach_image",
				"heading"           	=> __( "Select Image", "ts_visual_composer_extend" ),
				"param_name"        	=> "icon_image",
				"value"             	=> "",
				"admin_label"       	=> true,
				"description"       	=> __( "Image must have equal dimensions for scaling purposes (i.e. 100x100).", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "icon_replace", 'value' => 'true' )
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Icon / Image Size", "ts_visual_composer_extend" ),
				"param_name"        	=> "icon_size_slide",
				"value"             	=> "30",
				"min"               	=> "16",
				"max"               	=> "512",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"description"       	=> __( "Select the icon / image size", "ts_visual_composer_extend" ),
				"dependency"        	=> ""
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Icon Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "icon_color",
				"value"             	=> "#cccccc",
				"description"       	=> __( "Define the color of the icon.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "icon_replace", 'value' => 'false' )
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Icon / Image Background Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "icon_background",
				"value"             	=> "",
				"description"       	=> __( "Define the background color for the icon / transparent image.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Icon / Image Align", "ts_visual_composer_extend" ),
				"param_name"        	=> "icon_align",
				"width"             	=> 150,
				"value"             	=> array(
					__( "No Align", "ts_visual_composer_extend" )                      => "none",
					__( "Float Left", "ts_visual_composer_extend" )                    => "left",
					__( "Float Right", "ts_visual_composer_extend" )                   => "right",
					__( "Center", "ts_visual_composer_extend" )                        => "center",
				),
				"description"       	=> __( "Select how to position the icon in the column.", "ts_visual_composer_extend" )
			),
			// Icon Border Settings
			array(
				"type"              	=> "seperator",
				"param_name"        	=> "seperator_2",
				"seperator"				=> "Icon / Image Border Settings",
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Icon / Image Border Type", "ts_visual_composer_extend" ),
				"param_name"        	=> "icon_frame_type",
				"width"             	=> 300,
				"value"             	=> array(
					__( "None", "ts_visual_composer_extend" )                          => "",
					__( "Solid Border", "ts_visual_composer_extend" )                  => "solid",
					__( "Dotted Border", "ts_visual_composer_extend" )                 => "dotted",
					__( "Dashed Border", "ts_visual_composer_extend" )                 => "dashed",
					__( "Double Border", "ts_visual_composer_extend" )                 => "double",
					__( "Grouve Border", "ts_visual_composer_extend" )                 => "groove",
					__( "Ridge Border", "ts_visual_composer_extend" )                  => "ridge",
					__( "Inset Border", "ts_visual_composer_extend" )                  => "inset",
					__( "Outset Border", "ts_visual_composer_extend" )                 => "outset",
				),
				"description"       	=> __( "Select the type of border around the icon / image.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Icon / Image Border Thickness", "ts_visual_composer_extend" ),
				"param_name"        	=> "icon_frame_thick",
				"value"             	=> "1",
				"min"               	=> "1",
				"max"               	=> "10",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"description"       	=> __( "Define the thickness of the icon / image border.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "icon_frame_type", 'value' => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Border_Type_Values ),
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Icon / Image Border Radius", "ts_visual_composer_extend" ),
				"param_name"        	=> "icon_frame_radius",
				"value"             	=> array(
					__( "None", "ts_visual_composer_extend" )                          => "",
					__( "Small Radius", "ts_visual_composer_extend" )                  => "ts-radius-small",
					__( "Medium Radius", "ts_visual_composer_extend" )                 => "ts-radius-medium",
					__( "Large Radius", "ts_visual_composer_extend" )                  => "ts-radius-large",
					__( "Full Circle", "ts_visual_composer_extend" )                   => "ts-radius-full"
				),
				"description"       	=> __( "Define the radius of the icon / image border.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "icon_frame_type", 'value' => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Border_Type_Values ),
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Icon / Image Frame Border Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "icon_frame_color",
				"value"             	=> "#000000",
				"description"       	=> __( "Define the color of the icon / image border.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "icon_frame_type", 'value' => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Border_Type_Values ),
			),
			array(
				"type"					=> "switch_button",
				"heading"           	=> __( "Apply Padding to Icon / Image", "ts_visual_composer_extend" ),
				"param_name"        	=> "padding",
				"value"             	=> "false",
				"description"       	=> __( "Switch the toggle if you want to apply a padding to the icon / image.", "ts_visual_composer_extend" )
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Icon / Image Padding", "ts_visual_composer_extend" ),
				"param_name"        	=> "icon_padding",
				"value"             	=> "0",
				"min"               	=> "0",
				"max"               	=> "50",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"description"       	=> __( "If image instead of icon, increase the image size by padding value.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "padding", 'value' => 'true' )
			),
			// Icon Link Settings
			array(
				"type"              	=> "seperator",
				"param_name"        	=> "seperator_3",
				"seperator"				=> "Icon Link Settings",
				"group"					=> "Link Settings"
			),
			array(
				"type"					=> "switch_button",
				"heading"				=> __( 'Use for Page Navigation', "ts_visual_composer_extend" ),
				"param_name"			=> "scroll_navigate",
				"value"					=> "false",
				"admin_label"			=> true,
				"description"			=> __( "Switch the toggle if you want to use this button to navigate to another section on the same page.", "ts_visual_composer_extend" ),
				"group"					=> "Link Settings"
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Link", "ts_visual_composer_extend" ),
				"param_name"        	=> "link",
				"value"             	=> "",
				"description"       	=> __( "Enter the link to the page or file here (starting with http://).", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => 'scroll_navigate', 'value' => "false" ),
				"group"					=> "Link Settings"
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Link Target", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_target",
				"value"             	=> array(
					__( "Same Window", "ts_visual_composer_extend" )                    => "_parent",
					__( "New Window", "ts_visual_composer_extend" )                     => "_blank"
				),
				"description"       	=> __( "Select how the link should be opened.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "link", 'not_empty' => true ),
				"group"					=> "Link Settings"
			),			
			array(
				"type"                  => "textfield",
				"heading"               => __( "Page Scroll Target", "ts_visual_composer_extend" ),
				"param_name"            => "scroll_target",
				"value"                 => "",
				"description"           => __( "Enter the unique ID for the page section you want to scroll to.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "scroll_navigate", 'value' => 'true' ),
				"group"					=> "Link Settings"
			),
			array(
				"type" 					=> "devicetype_selectors",
				"heading"           	=> __( "Device Type Scroll Offset", "ts_visual_composer_extend" ),
				"param_name"        	=> "scroll_offset",
				"unit"  				=> "px",
				"collapsed"				=> "true",
				"devices" 				=> array(
					"Desktop"           		=> array("default" => 0, "min" => 0, "max" => 250, "step" => 1),
					"Tablet"            		=> array("default" => 0, "min" => 0, "max" => 250, "step" => 1),
					"Mobile"            		=> array("default" => 0, "min" => 0, "max" => 250, "step" => 1),
				),
				"value"					=> "desktop:0px;tablet:0px;mobile:0px",
				"description"			=> __( "Define an additional scroll offset to account for menu bars and other top fixed elements.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "scroll_navigate", 'value' => 'true' ),
				"group"					=> "Link Settings"
			),
			array(
				"type"					=> "nouislider",
				"heading"				=> __( "Page Scroll Speed", "ts_visual_composer_extend" ),
				"param_name"			=> "scroll_speed",
				"value"					=> "2000",
				"min"					=> "500",
				"max"					=> "10000",
				"step"					=> "100",
				"unit"					=> 'ms',
				"description"			=> __( "Define the speed that should be used to scroll to the section.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "scroll_navigate", 'value' => 'true' ),
				"group"					=> "Link Settings"
			),							
			array(
				"type"                 	=> "dropdown",
				"heading"               => __( "Page Scroll Easing", "ts_visual_composer_extend" ),
				"param_name"            => "scroll_effect",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"width"                 => 150,
				"value" 				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_CSS_Easings_Array,
				"description"           => __( "Select the easing animation that should be applied to the page scroll.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "scroll_navigate", 'value' => 'true' ),
				"group"					=> "Link Settings"
			),
			array(
				"type"                  => "switch_button",
				"heading"			    => __( 'Add Target as Hashtag', "ts_visual_composer_extend" ),
				"param_name"		    => "scroll_hashtag",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"value"                 => "false",
				"description"		    => __( "Switch the toggle if you want to add the scroll target to the browser URL via hashtag.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "scroll_navigate", 'value' => 'true' ),
				"group"					=> "Link Settings"
			),			
			// Icon Tooltip
			array(
				"type"					=> "seperator",
				"param_name"			=> "seperator_4",
				"seperator"				=> "Icon Tooltip",	
				"group"					=> "Tooltip Settings"
			),
			array(
				"type"					=> "switch_button",
				"heading"				=> __( "Use Advanced Tooltip", "ts_visual_composer_extend" ),
				"param_name"			=> "tooltip_css",
				"value"					=> "false",
				"description"       	=> __( "Switch the toggle if you want to apply am advanced tooltip to the image.", "ts_visual_composer_extend" ),				
				"group"					=> "Tooltip Settings"
			),
			array(
				"type"					=> "textarea",
				"class"					=> "",
				"heading"				=> __( "Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"			=> "tooltip_content",
				"value"					=> "",
				"description"			=> __( "Enter the tooltip content here (do NOT use quotation marks or HTML).", "ts_visual_composer_extend" ),				
				"group"					=> "Tooltip Settings"
			),
			array(
				"type"					=> "dropdown",
				"class"					=> "",
				"heading"				=> __( "Tooltip Position", "ts_visual_composer_extend" ),
				"param_name"			=> "tooltip_position",
				"value"					=> array(
					__( "Top", "ts_visual_composer_extend" )                            => "ts-simptip-position-top",
					__( "Bottom", "ts_visual_composer_extend" )                         => "ts-simptip-position-bottom",
				),
				"description"			=> __( "Select the tooltip position in relation to the image.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "tooltip_css", 'value' => 'true' ),				
				"group"					=> "Tooltip Settings"
			),
			array(
				"type"					=> "dropdown",
				"class"					=> "",
				"heading"				=> __( "Tooltip Style", "ts_visual_composer_extend" ),
				"param_name"			=> "tooltip_style",
				"value"             	=> array(
					__( "Black", "ts_visual_composer_extend" )                          => "",
					__( "Gray", "ts_visual_composer_extend" )                           => "ts-simptip-style-gray",
					__( "Green", "ts_visual_composer_extend" )                          => "ts-simptip-style-green",
					__( "Blue", "ts_visual_composer_extend" )                           => "ts-simptip-style-blue",
					__( "Red", "ts_visual_composer_extend" )                            => "ts-simptip-style-red",
					__( "Orange", "ts_visual_composer_extend" )                         => "ts-simptip-style-orange",
					__( "Yellow", "ts_visual_composer_extend" )                         => "ts-simptip-style-yellow",
					__( "Purple", "ts_visual_composer_extend" )                         => "ts-simptip-style-purple",
					__( "Pink", "ts_visual_composer_extend" )                           => "ts-simptip-style-pink",
					__( "White", "ts_visual_composer_extend" )                          => "ts-simptip-style-white"
				),
				"description"			=> __( "Select the tooltip style.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "tooltip_css", 'value' => 'true' ),				
				"group"					=> "Tooltip Settings"
			),
			array(
				"type"				    => "dropdown",
				"class"				    => "",
				"heading"			    => __( "Tooltip Animation", "ts_visual_composer_extend" ),
				"param_name"		    => "tooltip_animation",
				"value"                 => array(
					__("Swing", "ts_visual_composer_extend")                    => "swing",
					__("Fall", "ts_visual_composer_extend")                 	=> "fall",
					__("Grow", "ts_visual_composer_extend")                 	=> "grow",
					__("Slide", "ts_visual_composer_extend")                 	=> "slide",
					__("Fade", "ts_visual_composer_extend")                 	=> "fade",
				),
				"description"		    => __( "Select how the tooltip entry and exit should be animated once triggered.", "ts_visual_composer_extend" ),
				"group"					=> "Tooltip Settings",
				"dependency"            => array( 'element' => "tooltip_css", 'value' => 'true' ),
			),
			array(
				"type"					=> "nouislider",
				"heading"				=> __( "Tooltip X-Offset", "ts_visual_composer_extend" ),
				"param_name"			=> "tooltipster_offsetx",
				"value"					=> "0",
				"min"					=> "-100",
				"max"					=> "100",
				"step"					=> "1",
				"unit"					=> 'px',
				"description"			=> __( "Define an optional X-Offset for the tooltip position.", "ts_visual_composer_extend" ),
				"dependency"    		=> array( "element" => "tooltip_css", "value" => "true" ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"					=> "nouislider",
				"heading"				=> __( "Tooltip Y-Offset", "ts_visual_composer_extend" ),
				"param_name"			=> "tooltipster_offsety",
				"value"					=> "0",
				"min"					=> "-100",
				"max"					=> "100",
				"step"					=> "1",
				"unit"					=> 'px',
				"description"			=> __( "Define an optional Y-Offset for the tooltip position.", "ts_visual_composer_extend" ),
				"dependency"    		=> array( "element" => "tooltip_css", "value" => "true" ),
				"group" 				=> "Tooltip Settings",
			),
			// Animation Settings
			array(
				"type"              	=> "seperator",
				"param_name"        	=> "seperator_5",
				"seperator"				=> "Animation Settings",
				"group" 				=> "Animation Settings",
			),
			array(
				"type"					=> "css3animations",
				"class"					=> "",
				"heading"				=> __("Icon / Image Active Animation", "ts_visual_composer_extend"),
				"param_name"			=> "animation_active",
				"standard"				=> "false",
				"prefix"				=> "ts-infinite-css-",
				"connector"				=> "css3animations_active",
				"noneselect"			=> "true",
				"default"				=> "",
				"value"					=> "",
				"admin_label"			=> false,
				"description"			=> __("Select the active animation for the icon / image.", "ts_visual_composer_extend"),
				"group" 				=> "Animation Settings",
			),
			array(
				"type"					=> "hidden_input",
				"heading"				=> __( "Icon / Image Active Animation", "ts_visual_composer_extend" ),
				"param_name"			=> "css3animations_active",
				"value"					=> "",
				"admin_label"			=> true,
				"description"			=> "",
				"group" 				=> "Animation Settings",
			),
			array(
				"type"					=> "css3animations",
				"class"					=> "",
				"heading"				=> __("Icon / Image Hover Animation", "ts_visual_composer_extend"),
				"param_name"			=> "animation_icon",
				"standard"				=> "false",
				"prefix"				=> "ts-hover-css-",
				"connector"				=> "css3animations_in",
				"noneselect"			=> "true",
				"default"				=> "",
				"value"					=> "",
				"admin_label"			=> false,
				"description"			=> __("Select the hover animation for the icon / image.", "ts_visual_composer_extend"),
				"group" 				=> "Animation Settings",
			),
			array(
				"type"					=> "hidden_input",
				"heading"				=> __( "Icon / Image Hover Animation", "ts_visual_composer_extend" ),
				"param_name"			=> "css3animations_in",
				"value"					=> "",
				"admin_label"			=> true,
				"description"			=> "",
				"group" 				=> "Animation Settings",
			),		
			array(
				"type"					=> "css3animations",
				"class"					=> "",
				"heading"				=> __("Icon / Image Viewport Animation", "ts_visual_composer_extend"),
				"param_name"			=> "animation_view",
				"standard"				=> "false",
				"prefix"				=> "ts-viewport-css-",
				"connector"				=> "css3animations_view",
				"noneselect"			=> "true",
				"default"				=> "",
				"value"					=> "",
				"admin_label"			=> false,
				"description"			=> __("Select the viewport animation for the icon / image.", "ts_visual_composer_extend"),
				"group" 				=> "Animation Settings",
			),
			array(
				"type"					=> "hidden_input",
				"heading"				=> __( "Icon / Image Viewport Animation", "ts_visual_composer_extend" ),
				"param_name"			=> "css3animations_view",
				"value"					=> "",
				"admin_label"			=> true,
				"description"			=> "",
				"group" 				=> "Animation Settings",
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Animation Delay", "ts_visual_composer_extend" ),
				"param_name"        	=> "animation_delay",
				"value"             	=> "0",
				"min"               	=> "0",
				"max"               	=> "10000",
				"step"              	=> "100",
				"unit"              	=> 'ms',
				"description"       	=> __( "Define an optional delay for the viewport animation.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "animation_view", 'not_empty' => true ),
				"group" 				=> "Animation Settings",
			),
			// Other Icon Settings
			array(
				"type"              	=> "seperator",
				"param_name"        	=> "seperator_6",
				"seperator"				=> "Other Icon Settings",
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Margin: Top", "ts_visual_composer_extend" ),
				"param_name"            => "margin_top",
				"value"                 => "0",
				"min"                   => "0",
				"max"                   => "200",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Select the top margin for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Margin: Bottom", "ts_visual_composer_extend" ),
				"param_name"            => "margin_bottom",
				"value"                 => "0",
				"min"                   => "0",
				"max"                   => "200",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Select the bottom margin for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Define ID Name", "ts_visual_composer_extend" ),
				"param_name"        	=> "el_id",
				"value"             	=> "",
				"description"       	=> __( "Enter an unique ID for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Extra Class Name", "ts_visual_composer_extend" ),
				"param_name"        	=> "el_class",
				"value"             	=> "",
				"description"       	=> __( "Enter a class name for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			// Load Custom CSS/JS File
			array(
				"type"					=> "load_file",
				"heading"				=> "",
				"value"					=> "",
				"param_name"			=> "el_file1",
				"file_type"				=> "js",
				"file_path"				=> "js/ts-visual-composer-extend-element.min.js",
				"description"			=> ""
			),
		)
	);

	if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_LeanMap == "true") {
		return $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element;
	} else {			
		vc_map($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element);
	}
?>