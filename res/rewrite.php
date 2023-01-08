<?php declare( strict_types = 1 );

require_once dirname( __DIR__ ) . '/src/Router.php';

if ( $rewrite = PiotrPress\WordPress\Router::rewrite(
    $_SERVER[ 'DOCUMENT_ROOT' ],
    $_SERVER[ 'REQUEST_URI' ] ) ) {
    chdir( dirname( $rewrite ) );
    require_once $rewrite;
} else return false;