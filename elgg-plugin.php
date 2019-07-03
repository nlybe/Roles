<?php
/**
 * Roles for Elgg
 * @package roles
 */

return [
    'entities' => [
        [
            'type' => 'object',
            'subtype' => 'role',
            'class' => 'ElggRole',
            'searchable' => false,
        ],
    ],
    'actions' => [],
    'routes' => [],
    'widgets' => [],
    'views' => [],
    'upgrades' => [],
    'settings' => [
		'automatic_reset' => true,
	],
];
