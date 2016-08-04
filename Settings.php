<?php
namespace Dfe\BackendLoginAutocomplete;
use Magento\Framework\App\ScopeInterface as S;
/** @method static Settings s() */
class Settings extends \Df\Core\Settings {
	/**
	 * @override
	 * @see \Df\Core\Settings::enable()
	 * @param null|string|int|S $s [optional]
	 * @return bool
	 */
	public function enable($s = null) {return $this->b('autocomplete', $s);}

	/**
	 * @override
	 * @see \Df\Core\Settings::prefix()
	 * @used-by \Df\Core\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'df_backend/login/';}
}