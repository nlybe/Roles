<?php 

if (get_subtype_id('object', 'role')) {
	update_subtype('object', 'role', 'ElggRole');
} else {
	add_subtype('object', 'role', 'ElggRole');
}

elgg_register_library('roles', elgg_get_plugins_path() . 'roles/lib/roles.php');
elgg_register_library('roles_config', elgg_get_plugins_path() . 'roles/lib/config.php');

elgg_load_library('roles');
elgg_load_library('roles_config');

$roles = roles_get_all_roles();
foreach($roles as $role) {
	$role->delete();
}

roles_create_from_config();


?>