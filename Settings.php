<?php
namespace Dfe\BackendLoginAutocomplete;
/** @method static Settings s() */
class Settings extends \Df\Core\Settings {
	/** @return bool */
	public function enable() {return $this->b('autocomplete');}

	/**
	 * @override
	 * @used-by \Df\Core\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'df_backend/login/';}
}