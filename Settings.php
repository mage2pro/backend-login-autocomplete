<?php
namespace Dfe\BackendLoginAutocomplete;
class Settings extends \Df\Core\Settings {
	/** @return string */
	public function enable() {return $this->v('autocomplete');}

	/**
	 * @override
	 * @used-by \Df\Core\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'dfe_backend/login/';}

	/** @return \Dfe\BackendLoginAutocomplete\Settings */
	public static function s() {static $r; return $r ? $r : $r = df_o(__CLASS__);}
}