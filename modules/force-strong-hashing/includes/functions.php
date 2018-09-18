<?php

/**
 * Check the user-supplied password against the hash from the database. Falls
 *  back to core password hashing mechanism if the password hash if of unknown
 *  format.
 *
 * @global PasswordHash $wp_hasher PHPass object used for checking the password
 *  against the $hash + $password
 * @uses PasswordHash::CheckPassword
 *
 * @param string     $password Plaintext user's password
 * @param string     $hash     Hash of the user's password to check against.
 * @param string|int $user_id  Optional. User ID.
 * @return bool False, if the $password does not match the hashed password
 *
 */
function wp_check_password( $password, $hash, $user_id = '' ) {

	// Check if the current hash is known by PHP natively.
	$info = password_get_info( $hash );

	if ( ! empty( $info['algo'] ) ) {

		$check = password_verify( $password, $hash );

		if ( password_needs_rehash( $hash, PASSWORD_DEFAULT ) ) {
			$hash = wp_set_password( $password, $user_id );
		}

		return apply_filters( 'check_password', $check, $password, $hash, $user_id );
	}

	// This part is copied from the WP core password verification function.
	global $wp_hasher;

	// If the hash is still md5...
	if ( strlen($hash) <= 32 ) {
		$check = hash_equals( $hash, md5( $password ) );
		if ( $check && $user_id ) {
			// Rehash using new hash.
			wp_set_password($password, $user_id);
			$hash = wp_hash_password($password);
		}

		/**
		 * Filters whether the plaintext password matches the encrypted password.
		 *
		 * @since 2.5.0
		 *
		 * @param bool       $check    Whether the passwords match.
		 * @param string     $password The plaintext password.
		 * @param string     $hash     The hashed password.
		 * @param string|int $user_id  User ID. Can be empty.
		 */
		return apply_filters( 'check_password', $check, $password, $hash, $user_id );
	}

	// If the stored hash is longer than an MD5, presume the
	// new style phpass portable hash.
	if ( empty($wp_hasher) ) {
		require_once( ABSPATH . WPINC . '/class-phpass.php');
		// By default, use the portable hash from phpass
		$wp_hasher = new PasswordHash(8, true);
	}

	$check = $wp_hasher->CheckPassword($password, $hash);

	/** This filter is documented in wp-includes/pluggable.php */
	return apply_filters( 'check_password', $check, $password, $hash, $user_id );
}



/**
 * Hash password using @see password_hash() function if available.
 *
 * @param string $password Plaintext password
 * @return false|string
 */
function wp_hash_password( $password ) {
	$options = apply_filters( 'wp_php_password_hash_options', array() );
	return password_hash( $password, PASSWORD_DEFAULT, $options );
}



/**
 * Sets password hash taken from @see wp_hash_password().
 *
 * @param string $password password in plaintext.
 * @param int $user_id User ID of the user.
 * @return bool|string
 */
function wp_set_password( $password, $user_id ) {

	global $wpdb;

	$hash       = wp_hash_password( $password );
	$fields     = array( 'user_pass' => &$hash, 'user_activation_key' => '' );
	$conditions = array( 'ID' => $user_id );

	$wpdb->update( $wpdb->users, $fields, $conditions );

	wp_cache_delete( $user_id, 'users' );

	return $hash;
}