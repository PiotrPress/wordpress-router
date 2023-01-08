<?php declare( strict_types = 1 );

namespace PiotrPress\WordPress;

class Router {
    static public function rewrite( string $root, string $url ) : string {
        $path = self::getPath( $url );
        self::maybeRedirectDir( $root, $path );
        return self::fileToInclude( $root, $path );
    }

    static protected function getPath( string $url ) : string {
        return '/' . \ltrim( \parse_url( \urldecode( $url ), \PHP_URL_PATH ), '/' );
    }

    static protected function maybeRedirectDir( string $root, string $path ) : void {
        if ( \is_dir( $root . $path ) and '/' !== $path[ \strlen( $path ) - 1 ] ) {
            \header( "Location: $path/" );
            exit;
        }
    }

    static protected function fileToInclude( string $root, string $path ) : string {
        if ( \file_exists( $root . $path ) )
            if ( \pathinfo( $root . $path, \PATHINFO_EXTENSION ) === 'php' )
                return $root . $path;
            else return '';
        else return $root . '/index.php';
    }
}