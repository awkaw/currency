<?php

return array(

	/*
	 |--------------------------------------------------------------------------
	 | Default currency
	 |--------------------------------------------------------------------------
	 */

	'default' => 'USD',

	/*
	 |--------------------------------------------------------------------------
	 | Currencies table name
	 |--------------------------------------------------------------------------
	 */

	'needed' => ['USD', 'EUR', 'GBP', 'RUB'],

	/*
	 |--------------------------------------------------------------------------
	 | API Key for OpenExchangeRates.org
	 |--------------------------------------------------------------------------
	 |
	 | Only required if you with to use the Open Exchange Rates api. You can
	 | always just use Yahoo, the current default.
	 |
	 */

	'api_key' => '',

	/*
	 |--------------------------------------------------------------------------
	 | Add a single space between value and currency symbol
	 |--------------------------------------------------------------------------
	 */

	'use_space' => false,

	/*
	 |--------------------------------------------------------------------------
	 | Currencies table name
	 |--------------------------------------------------------------------------
	 */

	'table_name' => 'currency',

);