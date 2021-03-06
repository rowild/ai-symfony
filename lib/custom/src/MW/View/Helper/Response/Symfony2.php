<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2014-2020
 * @package MW
 * @subpackage View
 */


namespace Aimeos\MW\View\Helper\Response;


/**
 * View helper class for retrieving data from Symfony2 responses.
 *
 * @package MW
 * @subpackage View
 */
class Symfony2
	extends \Aimeos\MW\View\Helper\Response\Standard
	implements \Aimeos\MW\View\Helper\Response\Iface
{
	/**
	 * Initializes the URL view helper.
	 *
	 * @param \Aimeos\MW\View\Iface $view View instance with registered view helpers
	 */
	public function __construct( \Aimeos\MW\View\Iface $view )
	{
		$psr17Factory = new \Nyholm\Psr7\Factory\Psr17Factory();
		parent::__construct( $view, $psr17Factory->createResponse() );
	}
}
