<?php

echo elgg_view_field([
	'#type' => 'dropdown',
	'name' => 'params[automatic_reset]',
	'value' => $vars['entity']->automatic_reset,
	'options_values' => array(
		0 => elgg_echo('option:no'),
		1 => elgg_echo('option:yes')
	),
	'#label' => elgg_echo('roles:settings:automatic_reset'),
	'#help' => elgg_echo('roles:settings:automatic_reset:help'),
]);

