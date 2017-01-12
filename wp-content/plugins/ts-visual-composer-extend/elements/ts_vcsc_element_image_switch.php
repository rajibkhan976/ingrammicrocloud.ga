<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
	
    $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                          => __( "TS Image Switch", "ts_visual_composer_extend" ),
		"base"                          => "TS-VCSC-Image-Switch",
		"icon"                          => "ts-composer-element-icon-image-switch",
		"class"                         => "ts_vcsc_main_image_switch",
		"category"                      => __( "VC Extensions", "ts_visual_composer_extend" ),
		"description" 		        	=> __("Place two images with switch effect", "ts_visual_composer_extend"),
		"admin_enqueue_js"            	=> "",
		"admin_enqueue_css"           	=> "",
		"params"                        => array(
			// Image Selections
			array(
				"type"                  => "seperator",
				"heading"               => "",
				"param_name"            => "seperator_1",
				"value"					=> "",
				"seperator"				=> "Image Selections",
				"description"           => ""
			),
			array(
				"type"                  => "attach_image",
				"holder" 				=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorImagePreview == "true" ? "img" : ""),
				"heading"               => __( "Front Image", "ts_visual_composer_extend" ),
				"param_name"            => "image_start",
				"class"					=> "ts_vcsc_holder_image",
				"value"                 => "",
				"admin_label"           => ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorImagePreview == "true" ? false : true),
				"description"           => __( "Select the front image you want to use.", "ts_visual_composer_extend" )
			),
			array(
				"type"              	=> "switch_button",
				"heading"			    => __( "Add Custom ALT Attribute to Start Image", "ts_visual_composer_extend" ),
				"param_name"		    => "attribute_alt_start",
				"value"				    => "false",
				"description"		    => __( "Switch the toggle if you want add a custom ALT attribute value, otherwise file name will be set.", "ts_visual_composer_extend" )
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Enter ALT Value", "ts_visual_composer_extend" ),
				"param_name"            => "attribute_alt_value_start",
				"value"                 => "",
				"description"           => __( "Enter a custom value for the ALT attribute for the start image.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "attribute_alt_start", 'value' => 'true' )
			),
			array(
				"type"                  => "attach_image",
				"holder" 				=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorImagePreview == "true" ? "img" : ""),
				"heading"               => __( "Back Image", "ts_visual_composer_extend" ),
				"param_name"            => "image_end",
				"class"					=> "ts_vcsc_holder_image",
				"value"                 => "",
				"admin_label"           => ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorImagePreview == "true" ? false : true),
				"description"           => __( "Select the back image you want to use.", "ts_visual_composer_extend" )
			),
			array(
				"type"              	=> "switch_button",
				"heading"			    => __( "Add Custom ALT Attribute to End Image", "ts_visual_composer_extend" ),
				"param_name"		    => "attribute_alt_end",
				"value"				    => "false",
				"description"		    => __( "Switch the toggle if you want add a custom ALT attribute value, otherwise file name will be set.", "ts_visual_composer_extend" )
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Enter ALT Value", "ts_visual_composer_extend" ),
				"param_name"            => "attribute_alt_value_end",
				"value"                 => "",
				"description"           => __( "Enter a custom value for the ALT attribute for the end image.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "attribute_alt_end", 'value' => 'true' )
			),
			// Image Dimensions
			array(
				"type"                  => "seperator",
				"heading"               => "",
				"param_name"            => "seperator_2",
				"value"					=> "",
				"seperator"				=> "Image Dimensions",
				"description"           => ""
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Responsive Width", "ts_visual_composer_extend" ),
				"param_name"            => "image_responsive",
				"value"                 => "true",
				"description"           => __( "Use the toggle if you want to use images with a responsive width (in %).", "ts_visual_composer_extend" )
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Image Width", "ts_visual_composer_extend" ),
				"param_name"            => "image_width_percent",
				"value"                 => "100",
				"min"                   => "1",
				"max"                   => "100",
				"step"                  => "1",
				"unit"                  => '%',
				"description"           => __( "Define the image width in %.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "image_responsive", 'value' => 'true' )
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Image Width", "ts_visual_composer_extend" ),
				"param_name"            => "image_width",
				"value"                 => "300",
				"min"                   => "100",
				"max"                   => "1000",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Define the image width in px.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "image_responsive", 'value' => 'false' )
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Height Setting", "ts_visual_composer_extend" ),
				"param_name"            => "image_height",
				"width"                 => 150,
				"value"                 => array(
					__( '100% Height Setting', "ts_visual_composer_extend" )			=> "height: 100%;",
					__( 'Auto Height Setting', "ts_visual_composer_extend" )     		=> "height: auto;",
				),
				"description"           => __( "Select what CSS height setting should be applied to the image (change only if image height does not display correctly).", "ts_visual_composer_extend" ),
				"dependency"            => ""
			),
			/*array(
				"type"                  => "nouislider",
				"heading"               => __( "Image Height", "ts_visual_composer_extend" ),
				"param_name"            => "image_height",
				"value"                 => "200",
				"min"                   => "75",
				"max"                   => "750",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Define the image height in px.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "image_responsive", 'value' => 'false' )
			),*/
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Image Position", "ts_visual_composer_extend" ),
				"param_name"            => "image_position",
				"width"                 => 300,
				"value"                 => array(
					__( "Center", "ts_visual_composer_extend" )                         => "ts-imagefloat-center",
					__( "Float Left", "ts_visual_composer_extend" )                     => "ts-imagefloat-left",
					__( "Float Right", "ts_visual_composer_extend" )                    => "ts-imagefloat-right",
				),
				"description"           => __( "Define how to position the image.", "ts_visual_composer_extend" )
			),
			// Image Switch Style
			array(
				"type"                  => "seperator",
				"heading"               => "",
				"param_name"            => "seperator_3",
				"value"					=> "",
				"seperator"				=> "Image Switch Style",
				"description"           => "",
				"group" 				=> "Switch Settings",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Switch Effect", "ts_visual_composer_extend" ),
				"param_name"            => "switch_type",
				"width"                 => 300,
				"value"                 => array(
					__( "Flip", "ts_visual_composer_extend" )                           => "ts-imageswitch-flip",
					__( "Slide", "ts_visual_composer_extend" )                          => "ts-imageswitch-slide",
					__( "Fade", "ts_visual_composer_extend" )                           => "ts-imageswitch-fade",
					__( "None", "ts_visual_composer_extend" )                           => "ts-imageswitch-none",
				),
				"admin_label"           => true,
				"description"           => __( "Define how the two images should be switched out.", "ts_visual_composer_extend" ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Trigger Type", "ts_visual_composer_extend" ),
				"param_name"            => "switch_trigger_flip",
				"width"                 => 300,
				"value"                 => array(
					__( "Click", "ts_visual_composer_extend" )							=> "ts-trigger-click",
					__( "Hover", "ts_visual_composer_extend" )							=> "ts-trigger-hover",
				),					
				"description"           => __( "Define how to trigger the image switch.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_type", 'value' => 'ts-imageswitch-flip' ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Trigger Type", "ts_visual_composer_extend" ),
				"param_name"            => "switch_trigger_fade",
				"width"                 => 300,
				"value"                 => array(
					__( "Click", "ts_visual_composer_extend" )							=> "ts-trigger-click",
					__( "Hover", "ts_visual_composer_extend" )							=> "ts-trigger-hover",
				),
				"description"           => __( "Define how to trigger the image switch.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_type", 'value' => array('ts-imageswitch-fade', 'ts-imageswitch-none') ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Trigger Type", "ts_visual_composer_extend" ),
				"param_name"            => "switch_trigger_slide",
				"width"                 => 300,
				"value"                 => array(						
					__( "Hover & Move", "ts_visual_composer_extend" )					=> "ts-trigger-hover",
					__( "Click & Drag", "ts_visual_composer_extend" )					=> "ts-trigger-drag",
				),
				"description"           => __( "Define how to trigger the image switch.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_type", 'value' => 'ts-imageswitch-slide' ),
				"group" 				=> "Switch Settings",
			),				
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Slide Direction", "ts_visual_composer_extend" ),
				"param_name"            => "slide_direction",
				"width"                 => 300,
				"value"                 => array(						
					__( "Horizontal", "ts_visual_composer_extend" )						=> "ts-switch-direction-horizontal",
					__( "Vertical", "ts_visual_composer_extend" )						=> "ts-switch-direction-vertical",
				),
				"description"           => __( "Define which direction the slide switch effect should be applied to.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_type", 'value' => 'ts-imageswitch-slide' ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Slide Start Position", "ts_visual_composer_extend" ),
				"param_name"            => "slide_start",
				"value"                 => "50",
				"min"                   => "0",
				"max"                   => "100",
				"step"                  => "1",
				"unit"                  => '%',
				"description"           => __( "Define how much of the start image should be shown.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_type", 'value' => 'ts-imageswitch-slide' ),
				"group" 				=> "Switch Settings",
			),				
			array(
				"type"              	=> "switch_button",
				"heading"			    => __( "Return to Start at Mouse-Out", "ts_visual_composer_extend" ),
				"param_name"		    => "switch_handle_center",
				"value"				    => "true",
				"description"		    => __( "Switch the toggle if you want the slide control bar to center itself after mouse-out event.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_type", 'value' => 'ts-imageswitch-slide' ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Show Switch Handle", "ts_visual_composer_extend" ),
				"param_name"            => "switch_handle_show",
				"value"                 => "true",
				"description"           => __( "Use the toggle to show or hide a handle button below the image.", "ts_visual_composer_extend" ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Handle Color", "ts_visual_composer_extend" ),
				"param_name"            => "switch_handle_color",
				"value"                 => "#0094FF",
				"description"           => __( "Define the color for the overlay handle button.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_handle_show", 'value' => 'true' ),
				"group" 				=> "Switch Settings",
			),				
			array(
				"type"             		=> "hidden_input",
				"heading"           	=> __( "Click Event", "ts_visual_composer_extend" ),
				"param_name"        	=> "switch_click",
				"value"      			=> "true",
				"description"       	=> "",
				"group" 				=> "Switch Settings",
			),				
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Click Event", "ts_visual_composer_extend" ),
				"param_name"            => "switch_event",
				"width"                 => 300,
				"value"                 => array(
					__( "None", "ts_visual_composer_extend" )							=> "none",
					__( "Open Page", "ts_visual_composer_extend" )						=> "link",
					__( "Show Front Image in Lightbox", "ts_visual_composer_extend" )	=> "front",
					__( "Show Back Image in Lightbox", "ts_visual_composer_extend" )	=> "back",
					__( "Show Both Images in Lightbox", "ts_visual_composer_extend" )	=> "both",
					__( "Show Other Image in Lightbox", "ts_visual_composer_extend" )	=> "other",
				),
				"description"           => __( "If the switch trigger event is set to hover or drag, you can apply another click event to the element here.", "ts_visual_composer_extend" ),
				"group" 				=> "Switch Settings",
			),
			// Link Additions	
			array(
				"type" 					=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_ParameterLinkPicker['enabled'] == "false" ? "vc_link" : "advancedlinks"),
				"heading" 				=> __("Link + Title", "ts_visual_composer_extend"),
				"param_name" 			=> "switch_link",
				"description" 			=> __("Provide a link to another site/page for the element.", "ts_visual_composer_extend"),
				"dependency"            => array( 'element' => "switch_event", 'value' => 'link' ),
				"group" 				=> "Switch Settings",
			),							
			array(
				"type"					=> "switch_button",
				"heading"           	=> __( "Add Link Data", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_additions",
				"value"             	=> "false",
				"description"       	=> __( "Switch the toggle to apply custom ID, class or attributes to the link anchor itself (NOT the overall element).", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_event", 'value' => 'link' ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"              	=> "textarea_raw_html",
				"heading"           	=> __( "Link Attributes", "ts_visual_composer_extend" ),
				"param_name"        	=> "link_attributes",
				"value"             	=> base64_encode(""),
				"description"      	 	=> __( "Enter any attributes you might want to add to the link anchor; i.e. rel='' or data-title=''.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_additions", 'value' => "true" ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Link ID Name", "ts_visual_composer_extend" ),
				"param_name"            => "link_id",
				"value"                 => "",
				"description"           => __( "Enter an unique ID for the link anchor itself.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_additions", 'value' => "true" ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Link Class Name", "ts_visual_composer_extend" ),
				"param_name"            => "link_classes",
				"value"                 => "",
				"description"           => __( "Enter one ore more class name(s) for the link anchor itself.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "link_additions", 'value' => "true" ),
				"group" 				=> "Switch Settings",
			),
			// Lightbox Settings
			array(
				"type"                  => "seperator",
				"heading"               => "",
				"param_name"            => "seperator_4",
				"value"					=> "",
				"seperator"             => "Lightbox Settings",
				"description"           => "",
				"dependency"            => array( 'element' => "switch_event", 'value' => array('front', 'back', 'both', 'other') ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"                  => "attach_image",
				"heading"               => __( "Lightbox Image", "ts_visual_composer_extend" ),
				"param_name"            => "lightbox_image",
				"value"                 => "",
				"description"           => __( "Select the image you want to show in the lightbox when clicking on the element.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_event", 'value' => 'other' ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"              	=> "switch_button",
				"heading"			    => __( "Create AutoGroup", "ts_visual_composer_extend" ),
				"param_name"		    => "lightbox_group",
				"value"				    => "true",
				"description"		    => __( "Switch the toggle if you want the plugin to group this image with all other non-gallery images on the page.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_event", 'value' => array('front', 'back', 'both', 'other') ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Group Name", "ts_visual_composer_extend" ),
				"param_name"            => "lightbox_group_name",
				"value"                 => "",
				"description"           => __( "Enter a custom group name to manually build group with other non-gallery items.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "lightbox_group", 'value' => 'false' ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Transition Effect", "ts_visual_composer_extend" ),
				"param_name"            => "lightbox_effect",
				"width"                 => 150,
				"value"                 => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Lightbox_Animations,
				"default" 				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Default_Animation,
				"std" 					=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Default_Animation,
				"description"           => __( "Select the transition effect to be used for the image in the lightbox.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_event", 'value' => array('front', 'back', 'both', 'other') ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Backlight Effect", "ts_visual_composer_extend" ),
				"param_name"            => "lightbox_backlight",
				"width"                 => 150,
				"value"                 => array(
					__( 'Auto Color', "ts_visual_composer_extend" )       											=> "auto",
					__( 'Custom Color', "ts_visual_composer_extend" )     											=> "custom",
					__( 'No Backlight (Only for browsers with RGBA Support)', "ts_visual_composer_extend" )     	=> "hideit",
				),
				"description"           => __( "Select the backlight effect for the image.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_event", 'value' => array('front', 'back', 'both', 'other') ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Custom Backlight Color", "ts_visual_composer_extend" ),
				"param_name"            => "lightbox_backlight_color",
				"value"                 => "#ffffff",
				"description"           => __( "Define the backlight color for the lightbox image.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "lightbox_backlight", 'value' => 'custom' ),
				"group" 				=> "Switch Settings",
			),
			array(
				"type"              	=> "switch_button",
				"heading"			    => __( "Social Share Buttons", "ts_visual_composer_extend" ),
				"param_name"		    => "lightbox_social",
				"value"				    => "false",
				"description"		    => __( "Switch the toggle if you want show social share buttons with deeplinking for each image (if hashtag navigation enabled).", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_event", 'value' => array('front', 'back', 'both', 'other') ),
				"group" 				=> "Switch Settings",
			),
			// Overlay Settings
			array(
				"type"                  => "seperator",
				"heading"               => "",
				"param_name"            => "seperator_5",
				"value"					=> "",
				"seperator"             => "Before / After Labels",
				"description"           => "",
				"group" 				=> "Labels & Overlay",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Add Before/After Labels", "ts_visual_composer_extend" ),
				"param_name"            => "string_labels",
				"value"                 => "false",
				"description"           => __( "Use the toggle to add before/after text labels to the respective images.", "ts_visual_composer_extend" ),
				"group" 				=> "Labels & Overlay",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Before Label Text", "ts_visual_composer_extend" ),
				"param_name"            => "string_before_text",
				"value"                 => "Before",
				"description"           => __( "Enter a short text string, to be used for the before label.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "string_labels", 'value' => 'true' ),
				"group" 				=> "Labels & Overlay",
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Before Label Color", "ts_visual_composer_extend" ),
				"param_name"            => "string_before_color",
				"value"                 => "#ffffff",
				"description"           => __( "Define the font color for the before label.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "string_labels", 'value' => 'true' ),
				"group" 				=> "Labels & Overlay",
			),	
			array(
				"type"                  => "textfield",
				"heading"               => __( "After Label Text", "ts_visual_composer_extend" ),
				"param_name"            => "string_after_text",
				"value"                 => "After",
				"description"           => __( "Enter a short text string, to be used for the after label.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "string_labels", 'value' => 'true' ),
				"group" 				=> "Labels & Overlay",
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "After Label Color", "ts_visual_composer_extend" ),
				"param_name"            => "string_after_color",
				"value"                 => "#ffffff",
				"description"           => __( "Define the font color for the after label.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "string_labels", 'value' => 'true' ),
				"group" 				=> "Labels & Overlay",
			),	
			array(
				"type"                  => "seperator",
				"heading"               => "",
				"param_name"            => "seperator_5",
				"value"					=> "",
				"seperator"             => "Overlay Settings",
				"description"           => "",
				"group" 				=> "Labels & Overlay",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Overlay Content", "ts_visual_composer_extend" ),
				"param_name"            => "switch_overlay",
				"width"                 => 300,
				"value"                 => array(
					__( "None", "ts_visual_composer_extend" )                         		=> "",
					__( "Text Overlay", "ts_visual_composer_extend" )                     	=> "text",
					__( "Image Overlay", "ts_visual_composer_extend" )                    	=> "image",
				),
				"description"           => __( "Select if you want to apply a basic overlay to the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Labels & Overlay",
			),				
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Remove Overlay", "ts_visual_composer_extend" ),
				"param_name"            => "overlay_remove",
				"value"                 => "false",
				"description"           => __( "Use the toggle to remove the overlay when the switch effect is triggered.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_overlay", 'value' => array('text', 'image') ),
				"group" 				=> "Labels & Overlay",
			),				
			array(
				"type"                  => "textfield",
				"heading"               => __( "Overlay Text", "ts_visual_composer_extend" ),
				"param_name"            => "overlay_text",
				"value"                 => "",
				"description"           => __( "Enter a short text string, to be used for the overlay.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_overlay", 'value' => 'text' ),
				"group" 				=> "Labels & Overlay",
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Text Color", "ts_visual_composer_extend" ),
				"param_name"            => "soverlay_color",
				"value"                 => "#ffffff",
				"description"           => __( "Define the font color for the overlay text.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_overlay", 'value' => 'text' ),
				"group" 				=> "Labels & Overlay",
			),			
			array(
				"type"                  => "attach_image",
				"heading"               => __( "Overlay Image", "ts_visual_composer_extend" ),
				"param_name"            => "overlay_image",
				"value"                 => "",
				"description"           => __( "Select the overlay image you want to use; image will be scaled to a max. width/height of 50% of element dimensions.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "switch_overlay", 'value' => 'image' ),
				"group" 				=> "Labels & Overlay",
			),
			// Image Tooltip
			array(
				"type"                  => "seperator",
				"heading"               => "",
				"param_name"            => "seperator_6",
				"value"					=> "",
				"seperator"             => "Image Tooltip",
				"description"           => "",
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"                  => "textarea",
				"class"                 => "",
				"heading"               => __( "Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"            => "tooltip_content",
				"value"                 => "",
				"description"           => __( "Enter the tooltip content here (do NOT use quotation marks or HTML).", "ts_visual_composer_extend" ),
				"group" 				=> "Tooltip Settings",
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
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"					=> "dropdown",
				"class"					=> "",
				"heading"				=> __( "Tooltip Style", "ts_visual_composer_extend" ),
				"param_name"			=> "tooltip_style",
				"value"             	=> array(
					__( "Black", "ts_visual_composer_extend" )                          => "ts-simptip-style-black",
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
				"group" 				=> "Tooltip Settings",
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
				"group" 				=> "Tooltip Settings",
			),
			// Other Settings
			array(
				"type"                  => "seperator",
				"heading"               => "",
				"param_name"            => "seperator_7",
				"value"					=> "",
				"seperator"				=> "Other Settings",
				"description"           => "",
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
				"type"                  => "textfield",
				"heading"               => __( "Define ID Name", "ts_visual_composer_extend" ),
				"param_name"            => "el_id",
				"value"                 => "",
				"description"           => __( "Enter an unique ID for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Extra Class Name", "ts_visual_composer_extend" ),
				"param_name"            => "el_class",
				"value"                 => "",
				"description"           => __( "Enter a class name for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			// Load Custom CSS/JS File
			array(
				"type"                  => "load_file",
				"heading"               => "",
				"param_name"            => "el_file",
				"value"                 => "",
				"file_type"             => "js",
				"file_path"             => "js/ts-visual-composer-extend-element.min.js",
				"description"           => ""
			),
		)
	);
	
	if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_LeanMap == "true") {
		return $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element;
	} else {			
		vc_map($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element);
	}
?>