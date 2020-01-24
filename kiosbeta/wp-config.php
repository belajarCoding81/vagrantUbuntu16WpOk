<?php

/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define('DB_NAME', 'kiosbeta');

/** Nama pengguna basis data MySQL */
define('DB_USER', 'kiosbeta');

/** Kata sandi basis data MySQL */
define('DB_PASSWORD', 'Kiosbeta!@3');

/** Nama host MySQL */
define('DB_HOST', 'localhost');

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define('DB_CHARSET', 'utf8');

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RoSf[=IT}Tr6exn0[L|Po-gadFCVz6+{!OFcRA,+AG=I5e-b5%l9jl-)t+8Hlt?X');
define('SECURE_AUTH_KEY',  'AN!&+;0prMau=XcxE?AoGVnnLN[_jg)[&_~dgjmC/Tdg0OeiL}{DX20yp~C-6rF|');
define('LOGGED_IN_KEY',    '!aZF}n-SDyF-Tm>M6qjuqwe4+Zu|}vR^V|iI,a~QD U/F|X`VF)TC-c!iX&aNd*>');
define('NONCE_KEY',        'e}Mx/bycrqof=1+[<*LSEL.!Kr`Uls-tNbj%Zd=/t4`5;TC]@;FQ)`Nr~C=0Xj+}');
define('AUTH_SALT',        'XT&]fBs72b[ ZKJ-d}-jq` HcZjMe#WyxC{~8CLXiJ@T+|Dpg>]togdO<$QP}k[X');
define('SECURE_AUTH_SALT', '2z~*8kImN~gqh,{[]-9,/;fpc3gvg|HRR6,(W`2v3c[Of~JsJq)1dPmE4|+P-y.Z');
define('LOGGED_IN_SALT',   'D_bmD,Hw?l%7/I.M(N[zK=-7h6{cLx5Zeuvpmlq~fYV*ci-WAlUoUy|{~;Yyw$4Z');
define('NONCE_SALT',       ')p[FEQaw>4$D.k`vD.9?JXaXASPqAws0=eCO*fzL9 )thcJ~9rrS2h1r l1lr$A@');

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
