<?php
namespace Dfe\BackendLoginAutocomplete;
class Settings extends \Df\Core\Settings {
	/** @return bool */
	public function enable() {return $this->b('autocomplete');}

	/**
	 * @override
	 * @used-by \Df\Core\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'df_backend/login/';}

	/** @return self */
	public static function s() {static $r; return $r ? $r : $r = df_o(__CLASS__);}
}