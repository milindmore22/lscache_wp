<?php
/**
 * The Third Party integration with AMP plugin.
 *
 * @since		2.9.8.6
 * @package		LiteSpeed_Cache
 * @subpackage	LiteSpeed_Cache/thirdparty
 * @author		LiteSpeed Technologies <info@litespeedtech.com>
 */
namespace LiteSpeed\Thirdparty ;

defined( 'WPINC' ) || exit ;

use \LiteSpeed\API ;

class AMP
{
	/**
	 * CSS async will affect AMP result and
	 * Lazyload will inject JS library which AMP not allowed
	 * need to force set false before load
	 *
	 * @since 2.9.8.6
	 * @access public
	 */
	public static function preload()
	{
		if ( ( function_exists( 'amp_is_request' ) && amp_is_request() ) || is_admin() || ( function_exists( 'ampforwp_is_amp_endpoint' ) && ampforwp_is_amp_endpoint() ) ) return;
		! defined( 'LITESPEED_NO_PAGEOPTM' ) && define( 'LITESPEED_NO_PAGEOPTM', true );
		! defined( 'LITESPEED_NO_LAZY' ) && define( 'LITESPEED_NO_LAZY', true );
		! defined( 'LITESPEED_GUEST' ) && define( 'LITESPEED_GUEST', false );
		// add_filter( 'litespeed_can_optm', '__return_false' );
		// do_action( 'litespeed_conf_force', API::O_OPTM_CSS_ASYNC, false );
		// do_action( 'litespeed_conf_force', API::O_MEDIA_LAZY, false );
		// do_action( 'litespeed_conf_force', API::O_MEDIA_IFRAME_LAZY, false );
	}
}
