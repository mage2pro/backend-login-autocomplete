<?php
namespace Dfe\BackendLoginAutocomplete;
use Magento\Framework\App\ScopeInterface as S;
/** @method static Settings s() */
final class Settings extends \Df\Config\Settings {
	/**
	 * @override
	 * @see \Df\Config\Settings::enable()
	 * @param null|string|int|S $s [optional]
	 * @return bool
	 */
	public function enable($s = null) {return $this->b('autocomplete', $s);}

	/**
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'df_backend/login';}
}