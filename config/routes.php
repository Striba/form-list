<?php

return array (
	
        'team/([0-9]+)' => 'site/team/$1', //actionTeam в SiteController аргумент id
	'callcenter/([0-9]+)' => 'site/callcenter/$1', //actionCallcenter в SiteController аргумент id
	'' => 'site/index', // actionIndex в SiteController
	
);
