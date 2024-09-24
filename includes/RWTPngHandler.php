<?php
namespace RWT\Extension\WebPThumb;

use PNGHandler;

class RWTPngHandler extends PNGHandler {
	 /**
         * Render files as WEBP
         *
         * @param string $ext
         * @param string $mime
         * @param array|null $params
         * @return array
         */
        public function getThumbType( $ext, $mime, $params = null ) {
                return [ 'webp', 'image/webp' ];
        }
}

?>
