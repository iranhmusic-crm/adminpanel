<?php

return [
	'bootstrap' => [
		'aaa',
		'mha',
	],
	'modules' => [
		'aaa' => [
			'class' => \shopack\aaa\frontend\adminpanel\Module::class,
		],
		'mha' => [
			'class' => \iranhmusic\shopack\mha\frontend\adminpanel\Module::class,
		],
	],
];
