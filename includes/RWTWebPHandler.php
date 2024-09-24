<?php
namespace RWT\Extension\WebPThumb;

use WebPHandler;

class RWTWebPHandler extends WebPHandler {
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

	/**
	 * @param File $file
	 * @return bool False, assume all browsers support WebP
	 */
	public function mustRender( $file ) {
		return false;
	}

}

?>
