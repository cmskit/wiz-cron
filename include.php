// load Stylesheet IE/other
if (document.createStyleSheet)
{
	document.createStyleSheet('wizards/cron/styles.php?project='+window.projectName);
}
else
{
	$("head").append( $("<link rel='stylesheet' href='wizards/cron/styles.php?project="+window.projectName+"' type='text/css' media='screen' />"));
}

(function( $ )
{
	$.fn.cron = function(){ this.jqCron() };
})( jQuery );

<?php

$LL = array();
@include 'locales/'.$_GET['lang'].'.php';
function L($s)
{
	global $LL;
	return (isset($LL[$s]) ?: str_replace('_',' ',$s));
}

echo "

var jqCronDefaultSettings = {
	texts: {
		en : {
			empty: '".L('all')."',
			name_minute: '".L('minute')."',
			name_hour: '".L('hour')."',
			name_day: '".L('day')."',
			name_week: '".L('week')."',
			name_month: '".L('month')."',
			name_year: '".L('year')."',
			text_period: '".L('every')." <b />',
			text_mins: '".L('at')." <b /> ".L('minutes_past_the_hour')."',
			text_time: '".L('at')."<b />:<b />',
			text_dow: '".L('on')." <b />',
			text_month: '".L('of')." <b />',
			text_dom: '".L('on_the')." <b />',
			error1: '".L('the_tag_%s_is_not_supported')."',
			error2: '".L('bad_number_of_elements')."',
			error3: 'The jQuery-element should be set into jqCron settings',
			error4: '".L('Unrecognized_Expression')."',
			weekdays: ['".L('monday')."', '".L('tuesday')."', '".L('wednesday')."', '".L('thursday')."', '".L('friday')."', '".L('saturday')."', '".L('sunday')."'],
			months: ['".L('january')."', '".L('february')."', '".L('march')."', '".L('april')."', '".L('may')."', '".L('june')."', '".L('july')."', '".L('august')."', '".L('september')."', '".L('october')."', '".L('november')."', '".L('december')."']
		
		}
	},
	monthdays: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31],
	hours: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23],
	minutes: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59],
	
	lang: 'en', // we use 'en' for all Languages and change language via PHP
	enabled_minute: false,
	enabled_hour: true,
	enabled_day: true,
	enabled_week: true,
	enabled_month: true,
	enabled_year: true,
	multiple_dom: true,
	multiple_month: true,
	multiple_mins: true,
	multiple_dow: true,
	multiple_time_hours: true,
	multiple_time_minutes: true,
	numeric_zero_pad: false,
	default_period: 'day',
	default_value: '',
	no_reset_button: false,
	disabled: false,
	bind_to: null,
	default_value: '* * * * *',
	bind_method: {
		set: function(\$element, value) {
			\$element.is(':input') ? \$element.val(value) : \$element.data('jqCronValue', value);
		},
		get: function(\$element) {
			return \$element.is(':input') ? \$element.val() : \$element.data('jqCronValue');
		}
	}
};

";

// load the rest from the JS
echo file_get_contents(__DIR__ . '/jqCron.js');

?>
