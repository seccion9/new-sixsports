<?php
define( 'DISABLE_JETPACK_WAF', false );
if ( defined( 'DISABLE_JETPACK_WAF' ) && DISABLE_JETPACK_WAF ) return;
define( 'JETPACK_WAF_MODE', 'silent' );
define( 'JETPACK_WAF_SHARE_DATA', false );
define( 'JETPACK_WAF_SHARE_DEBUG_DATA', false );
define( 'JETPACK_WAF_DIR', '/homepages/26/d980748321/htdocs/sixsportweb/wp-content/jetpack-waf' );
define( 'JETPACK_WAF_WPCONFIG', '/homepages/26/d980748321/htdocs/sixsportweb/wp-content/../wp-config.php' );
require_once '/homepages/26/d980748321/htdocs/sixsportweb/wp-content/plugins/jetpack/vendor/autoload.php';
Automattic\Jetpack\Waf\Waf_Runner::initialize();
