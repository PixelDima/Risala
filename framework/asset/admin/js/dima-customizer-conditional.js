/**
 *
 */

jQuery(document).ready(function ($) {
	//# 1.Font ON-OFF  -----------------------------------------------------------------------------
	var $font_body_target = $('#customize-control-dima_custom_font');
	var $font_body_display = [{
		val: '1',
        target: 
            '#customize-control-dima_body_weights_list,'+            
            '#customize-control-dima_body_subsets_list,' +
            '#customize-control-dima_heading_weights_list_2,'+
            '#customize-control-dima_heading_weights_list_3,'+
            '#customize-control-dima_heading_weights_list_4,'+
            '#customize-control-dima_heading_weights_list_5,'+
            '#customize-control-dima_heading_weights_list_6,'+
			'#customize-control-dima_heading_weights_list,' +
			'#customize-control-dima_logo_weights_list'
	}];
	dima_customizer_initial_display($font_body_target.find('input:checked'), $font_body_display);
	dima_customizer_change_display($font_body_target.find('input'), $font_body_display);
	//# !1.Font ON-OFF  -----------------------------------------------------------------------------



	//# Body Background Color  -----------------------------------------------------------------------------
	var $layout_style = $('#customize-control-dima_layout_style');
	var $_layout_style = [{
		val: "cards",
		target: '#customize-control-dima_body_background_color'
	}];
	dima_customizer_initial_display($layout_style.find('input:checked'), $_layout_style);
	dima_customizer_change_display($layout_style.find('input'), $_layout_style);

	var $layout_style_clean = $('#customize-control-dima_layout_style');
	var $_layout_style_clean = [{
		val: "clean",
		target: '#customize-control-dima_body_background_color_clean'
	}];
	dima_customizer_initial_display($layout_style_clean.find('input:checked'), $_layout_style_clean);
	dima_customizer_change_display($layout_style_clean.find('input'), $_layout_style_clean);

	//# !Body Background Color  -----------------------------------------------------------------------------

	//# -----------------------Main Functions------------------------ #//
	function dima_customizer_initial_display(value, targets) {
		$.each(targets, function (index, item) {

			if (item.val.constructor === Array) {
				if (is_part_of_array(value.val(), item.val)) {
					$(item.target).show()
				} else {
					$(item.target).attr('data-hide', 'true');
				}
			} else if (item.val == value.val()) {
				$(item.target).show()
			} else {
				$(item.target).attr('data-hide', 'true');
			}
		});
	}

	function dima_customizer_change_display(elm, targets) {
		elm.change(function () {
			var $value = $(this).val();
			$.each(targets, function (index, item) {
				if (item.val.constructor === Array) {
					if (is_part_of_array($value, item.val)) {
						$(item.target).removeAttr('data-hide');
					} else {
						$(item.target).attr('data-hide', 'true');
					}
				} else if (item.val == $value) {
					$(item.target).removeAttr('data-hide');
				} else {
					$(item.target).attr('data-hide', 'true');
				}
			});
		});
	}

	function dima_input_display(value, targets) {
		$.each(targets, function (index, item) {
			if (item.val == value.val()) {
				$(item.target).parent().removeAttr('data-hide');
			} else {
				$(item.target).parent().attr('data-hide', 'true');
			}
		});
	}

	function dima_input_display_change(elm, targets) {
		elm.change(function () {
			var $value = $(this).val();
			$.each(targets, function (index, item) {
				if (item.val == $value) {
					$(item.target).parent().removeAttr('data-hide');
				} else {
					$(item.target).parent().attr('data-hide', 'true');
				}
			});
		});
	}

	function is_part_of_array(elmOnTheTable, table) {
		for (var i in table) {
			if (table[i] === elmOnTheTable) {
				return true;
			}
		}
		return false;
	}

	//# ----------------------Main Functions------------------------ #//

	function dima_customizer_initial_display(value, targets) {
		$.each(targets, function (index, item) {

			if (item.val.constructor === Array) {
				if (is_part_of_array(value.val(), item.val)) {
					$(item.target).show()
				} else {
					$(item.target).attr('data-hide', 'true');
				}
			} else if (item.val == value.val()) {
				$(item.target).show()
			} else {
				$(item.target).attr('data-hide', 'true');
			}
		});
	}

	function dima_customizer_change_display(elm, targets) {
		elm.change(function () {
			var $value = $(this).val();
			$.each(targets, function (index, item) {
				if (item.val.constructor === Array) {
					if (is_part_of_array($value, item.val)) {
						$(item.target).removeAttr('data-hide');
					} else {
						$(item.target).attr('data-hide', 'true');
					}
				} else if (item.val == $value) {
					$(item.target).removeAttr('data-hide');
				} else {
					$(item.target).attr('data-hide', 'true');
				}
			});
		});
	}

	function is_part_of_array(elmOnTheTable, table) {
		for (var i in table) {
			if (table[i] === elmOnTheTable) {
				return true;
			}
		}
		return false;
	}

	//# ----------------------- !Main Functions------------------------ #//

	//=======================================================================
	//# Font Selector
	//=======================================================================
    var $fontSelect = $('.dima-typography-select');

	$fontSelect.each(function () {
		show_font_variants($(this));
	}).change(function () {
		show_font_variants($(this));
    });
    
    //  Show Font Weights depend on the font name  //
    function show_font_variants(selected_font) {
        var $font_body_target = $('#customize-control-dima_custom_font');
        var _isCustomFontChecked = $font_body_target.find('input[value="1"]').is(':checked');
        var _id = selected_font.data('customize-setting-link').replace(/font/, 'weights');
        var _id_widget = selected_font.data('customize-setting-link').replace(/font_list/, 'weight_selected');

        
        var _font_name = $('option:selected', selected_font).val();
        var _arabic_font = ['Noto Naskh Arabic', 'Noto Kufi Arabic', 'Noto Nastaliq Urdu', 'Droid Arabic Naskh', 'Droid Arabic Kufi', 'Lateef'];

        var _font_weights_list = "";

        if (jQuery.inArray(_font_name, _arabic_font) === -1) {           
            var op_font = _wpCustomizeSettings.settings.dima_global_font_data.transport[_font_name];
            if (typeof op_font !== "undefined") {
                _font_weights_list = op_font.variants;
            }
        }

        if (_isCustomFontChecked) {
            $('#customize-control-' + _id + ' .dima-multicheck').each(function () {
                var $this = $(this);
                if (!is_part_of_array($this.val(), _font_weights_list)) {
                    $this.parent().addClass('dima-customize-disabled');
                    $this.attr("disabled", true);
                    $this.prop('checked', false);
                    $('#customize-control-' + _id_widget + ' input').each(function () {
                        var $_this = $(this);
                        if ($_this.attr("value") === $this.val()) {
                            $(this).attr("disabled", true);
                            $this.prop('checked', false);
                            $(this).parent().addClass('dima-customize-disabled');
                        }
                    });
                } else {
                    $this.parent().removeClass('dima-customize-disabled');
                    $this.removeAttr("disabled");
                    
                    $('#customize-control-' + _id_widget + ' input').each(function () {
                        var $_this = $(this);
                        if ($_this.attr("value") === $this.val()) {
                            $(this).removeAttr("disabled");
                            $(this).parent().removeClass('dima-customize-disabled');
                        }
                    });
                }
            });

        }
    }
});
