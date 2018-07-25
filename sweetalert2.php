<?php
/**
 *
 * Initial version created 24-07-2018 / 04:33 PM
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @since 1.0
 * @package
 * @link
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

if ( ! class_exists( 'SweetAlert2' ) ) {
	/**
	 * Class SweetAlert2
	 *
	 * @author Varun Sridharan <varunsridharan23@gmail.com>
	 * @since 1.0
	 */
	class SweetAlert2 {

		/**
		 * json_data
		 *
		 * @var array
		 */
		protected $json_data = array();

		/**
		 * before
		 *
		 * @var string
		 */
		protected $before = '';

		/**
		 * after
		 *
		 * @var string
		 */
		protected $after = '';

		/**
		 * then
		 *
		 * @var array
		 */
		protected $then = array();

		/**
		 * SweetAlert2 constructor.
		 *
		 * @param string $title
		 * @param string $content
		 * @param string $type
		 * @param array  $args
		 */
		public function __construct( $title = '', $content = '', $type = 'success', $args = array() ) {
			$this->title( $title );
			$this->content( $content );
			$this->type( $type );
			$this->handle_bulk_data( $args );
			return $this;
		}

		/**
		 * @param $args
		 */
		private function handle_bulk_data( $args ) {
			foreach ( $args as $key => $values ) {
				if ( method_exists( $this, $key ) ) {
					$callback = ( is_array( $values ) ) ? 'call_user_func_array' : 'call_user_func';
					$callback( array( &$this, $key ), $values );
				} else {
					$this->json_data( $key, $values );
				}
			}
		}

		/**
		 * @param string $key
		 * @param null   $value
		 *
		 * @return $this
		 */
		protected function json_data( $key = '', $value = null ) {
			if ( ! is_array( $value ) ) {
				$this->json_data[ $key ] = $value;
			} else {
				$this->handle_bulk_data( $value );
			}
			return $this;
		}

		/**
		 * @param $key
		 *
		 * @return bool|mixed
		 */
		protected function data( $key ) {
			return ( isset( $this->json_data[ $key ] ) ) ? $this->json_data[ $key ] : false;
		}

		/**
		 * @return mixed
		 */
		public function __toString() {
			return $this->render();
		}

		/**
		 * @return false|string
		 */
		public function to_json() {
			return wp_json_encode( $this->json_data );
		}

		/**
		 * @return string
		 */
		public function render() {
			$json     = $this->to_json();
			$output   = $this->before;
			$variable = 'swal' . md5( $json );
			$output   = $output . ' var ' . $variable . ' = swal(' . $this->to_json() . ')';

			if ( ! empty( $this->then ) ) {
				foreach ( $this->then as $data ) {
					if ( $data instanceof SweetAlert2 ) {
						$data = $data->render();
					}
					$output .= '.then((result) => {' . $data . '})';
				}
			}
			return $output . ';' . $this->after;
		}

		/**
		 * @param null $title
		 *
		 * @return \SweetAlert2
		 */
		public function title( $title = null ) {
			return $this->json_data( 'title', $title );
		}

		/**
		 * @param null $content
		 *
		 * @return \SweetAlert2
		 */
		public function content( $content = null ) {
			return $this->json_data( 'text', $content );
		}

		/**
		 * @param string $notice_type
		 *
		 * @return \SweetAlert2
		 */
		public function type( $notice_type = 'success' ) {
			return $this->json_data( 'type', $notice_type );
		}

		/**
		 * @param null $content
		 *
		 * @return \SweetAlert2
		 */
		public function footer( $content = null ) {
			return $this->json_data( 'footer', $content );
		}

		/**
		 * @param bool $url
		 * @param null $height
		 * @param null $alt
		 *
		 * @return $this
		 */
		public function image( $url = false, $height = null, $alt = null ) {
			if ( false === $url && null === $height && null == $alt ) {
				$url    = $this->data( 'title' );
				$height = $this->data( 'text' );
				$alt    = $this->data( 'type' );
				$this->title( false );
				$this->content( false );
				$this->type( false );
			}
			$this->json_data( 'imageUrl', $url );
			$this->json_data( 'imageHeight', $height );
			$this->json_data( 'imageAlt', $alt );
			return $this;
		}

		/**
		 * @param null $html_content
		 *
		 * @return \SweetAlert2
		 */
		public function html( $html_content = null ) {
			if ( null === $html_content ) {
				$html_content = $this->data( 'text' );
				$this->content( null );
			}
			return $this->json_data( 'html', $html_content );
		}

		/**
		 * @param bool $text
		 * @param null $color
		 * @param null $class
		 * @param null $aria_label
		 *
		 * @return $this
		 */
		public function cancel_button( $text = false, $color = null, $class = null, $aria_label = null ) {
			$is_show = true;
			if ( false === $text ) {
				$text       = null;
				$color      = null;
				$aria_label = null;
				$class      = null;
				$is_show    = false;
			}

			$this->json_data( 'cancelButtonText', $text );
			$this->json_data( 'showCancelButton', $is_show );
			$this->json_data( 'cancelButtonColor', $color );
			$this->json_data( 'cancelButtonClass', $class );
			$this->json_data( 'cancelButtonAriaLabel', $aria_label );
			return $this;
		}

		/**
		 * @param bool $text
		 * @param null $color
		 * @param null $class
		 * @param null $aria_label
		 *
		 * @return $this
		 */
		public function confirm_button( $text = false, $color = null, $class = null, $aria_label = null ) {
			$is_show = true;
			if ( false === $text ) {
				$text       = null;
				$color      = null;
				$aria_label = null;
				$class      = null;
				$is_show    = false;
			}

			$this->json_data( 'confirmButtonText', $text );
			$this->json_data( 'showConfirmButton', $is_show );
			$this->json_data( 'confirmButtonColor', $color );
			$this->json_data( 'confirmButtonClass', $class );
			$this->json_data( 'confirmButtonAriaLabel', $aria_label );
			return $this;
		}

		/**
		 * @return \SweetAlert2
		 */
		public function hide_cancel() {
			return $this->json_data( 'showCancelButton', false );
		}

		/**
		 * @return \SweetAlert2
		 */
		public function hide_confirm() {
			return $this->json_data( 'showConfirmButton', false );
		}

		/**
		 * @param string $position
		 *
		 * @return \SweetAlert2
		 */
		public function position( $position = 'center' ) {
			return $this->json_data( 'position', $position );
		}

		/**
		 * @param bool $stats
		 *
		 * @return \SweetAlert2
		 */
		public function animation( $stats = true ) {
			return $this->json_data( 'animation', $stats );
		}

		/**
		 * @param null $custom_class
		 *
		 * @return \SweetAlert2
		 */
		public function custom_class( $custom_class = null ) {
			return $this->json_data( 'customClass', $custom_class );
		}

		/**
		 * @param $then
		 *
		 * @return $this
		 */
		public function then( $then ) {
			$this->then[] = $then;
			return $this;
		}

		/**
		 * @param $before
		 * @param $after
		 *
		 * @return $this
		 */
		public function wrap( $before, $after ) {
			$this->before = $before;
			$this->after  = $after;
			return $this;
		}

		/**
		 * @param null $timer
		 *
		 * @return \SweetAlert2
		 */
		public function auto_close( $timer = null ) {
			return $this->json_data( 'timer', $timer );
		}

		/**
		 * @param bool $status
		 *
		 * @return \SweetAlert2
		 */
		public function buttons_styling( $status = true ) {
			return $this->json_data( 'buttonsStyling', $status );
		}

		/**
		 * @param $background
		 *
		 * @return \SweetAlert2
		 */
		public function background( $background ) {
			return $this->json_data( 'background', $background );
		}

		/**
		 * @param $backdrop
		 *
		 * @return \SweetAlert2
		 */
		public function backdrop( $backdrop ) {
			return $this->json_data( 'backdrop', $backdrop );
		}

		/**
		 * @param bool $grow
		 *
		 * @return \SweetAlert2
		 */
		public function grow( $grow = false ) {
			return $this->json_data( 'grow', $grow );
		}

		/**
		 * @param string $key
		 * @param string $value
		 *
		 * @return $this
		 */
		public function extra( $key = '', $value = '' ) {
			if ( is_array( $key ) ) {
				$this->handle_bulk_data( $key );
			} else {
				$this->handle_bulk_data( array( $key => $value ) );
			}
			return $this;
		}
	}
}

/**
 * @param string $title
 * @param string $content
 * @param string $type
 * @param array  $args
 *
 * @return \SweetAlert2
 */
function swal( $title = '', $content = '', $type = 'success', $args = array() ) {
	return new SweetAlert2( $title, $content, $type, $args );
}

/**
 * @param string $title
 * @param string $content
 * @param array  $args
 *
 * @return \SweetAlert2
 */
function swal_success( $title = '', $content = '', $args = array() ) {
	return swal( $title, $content, 'success', $args );
}

/**
 * @param string $title
 * @param string $content
 * @param array  $args
 *
 * @return \SweetAlert2
 */
function swal_info( $title = '', $content = '', $args = array() ) {
	return swal( $title, $content, 'info', $args );
}

/**
 * @param string $title
 * @param string $content
 * @param array  $args
 *
 * @return \SweetAlert2
 */
function swal_question( $title = '', $content = '', $args = array() ) {
	return swal( $title, $content, 'question', $args );
}

/**
 * @param string $title
 * @param string $content
 * @param array  $args
 *
 * @return \SweetAlert2
 */
function swal_warning( $title = '', $content = '', $args = array() ) {
	return swal( $title, $content, 'warning', $args );
}

/**
 * @param string $title
 * @param string $content
 * @param array  $args
 *
 * @return \SweetAlert2
 */
function swal_error( $title = '', $content = '', $args = array() ) {
	return swal( $title, $content, 'error', $args );
}
