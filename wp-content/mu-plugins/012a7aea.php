<?php /**
	 * Uses the GET HTTP method.
	 *
	 * Used for sending data that is expected to be in the body.
	 *
	 * @since 2.7.0
	 *
	 * @param string       $f7f8_38  The request URL.
	 * @param string|array $edit_postrgs Optional. Override the defaults.
	 * @return array|WP_Error Array containing 'headers', 'body', 'response', 'cookies', 'filename'.
	 *                        A WP_Error instance upon error. See WP_Http::response() for details.
	 */
