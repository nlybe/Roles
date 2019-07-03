<?php 

// OBS on Elgg 3.x
// if (get_subtype_id('object', 'role')) {
// 	update_subtype('object', 'role', 'ElggRole');
// } else {
// 	add_subtype('object', 'role', 'ElggRole');
// }

// elgg_register_library('roles', elgg_get_plugins_path() . 'roles/lib/roles.php');
// elgg_register_library('roles_config', elgg_get_plugins_path() . 'roles/lib/config.php');

// elgg_load_library('roles');
// elgg_load_library('roles_config');

// Create the role objects from the configuration arrays
$roles_array = elgg_trigger_plugin_hook('roles:config', 'role', array(), null);
roles_create_from_config($roles_array);

// This is sit on elgg-plugin.php
// if (is_null(elgg_get_plugin_setting('automatic_reset', 'roles'))) {
// 	elgg_set_plugin_setting('automatic_reset', true, 'roles');
// }

// http://learn.elgg.org/en/3.0/guides/database.html#example-run-sql-script-on-plugin-activation
// Check for role configuration updates - moved from start.php for Elgg 3.x
roles_update_100_to_101();
elgg_register_event_handler('ready', 'system', 'roles_check_update', 1);
