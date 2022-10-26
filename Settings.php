<?php
namespace Dfe\BackendLoginAutocomplete;
use Magento\Framework\App\ScopeInterface as S;
/** @method static Settings s() */
final class Settings extends \Df\Config\Settings {
	/**
	 * @override
	 * @see \Df\Config\Settings::enable()
	 * @param null|string|int|S $s [optional]
	 */
	function enable($s = null):bool {return $this->b('autocomplete', $s);}

	/**
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 */
	protected function prefix():string {return 'df_backend/login';}
}