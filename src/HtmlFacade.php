<?php namespace marius321967\Html;

use Illuminate\Support\Facades\Facade;

/**
 * @see \marius321967\Html\HtmlBuilder
 */
class HtmlFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'html'; }

}