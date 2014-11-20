<?php
$config = <<<EOD
{
	"info":  {
		"name": "Crontab-Editor",
		"description": {
			"en": "edit a Cron-Tab semantically",
			"de": "Cron-Tab semantisch bearbeiten"
		},
		"io":  [
			"crontab",
			"crontab"
		],
		"authors":  ["Christoph Taubmann"],
		"homepage": "http://cms-kit.org",
		"mail": "info@cms-kit.org",
		"copyright": "GPL",
		"credits":  [
			"[JQ]() MIT / GPL licenses"
		]
	},
	"system":  {
		"version": 0.8,
		"inputs":  [
			"VARCHAR"
		],
		"include":  ["wizard:cron\\nhide_input:true"],
		"translations":  [
			"en"
		]
	}
}
EOD;
?>
