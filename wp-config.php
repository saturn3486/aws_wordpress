<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wordpress');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'jazztro29');

/** MySQL のホスト名 */
define('DB_HOST', '10.0.2.10');
define('WP_SITEURL','http://52.69.190.175/');
/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4M?NSs$w_X6m#/O+fUBSP<xg&cCZ9I1)x<_a[omV|MnZO;#Y>7LyJj3N>YS)5G;N');
define('SECURE_AUTH_KEY',  'GGd}xyLr}*Vv+x0Bs>7XTL-bkrOJMH(T/*o$Nd4Yj)5 KnTz`+P,dn,SLZ-Q}I$T');
define('LOGGED_IN_KEY',    'ChHqs!*>ho3J]9_>#xHT4sB^iujfvo>`}T(EhunlqNilsl!a+F$xPgW5GSi[+!(g');
define('NONCE_KEY',        '_o&CG}@ha7j.qfS}6HqtH!eRje]1Q1o(Q%S~zP%e0-x5H8)+|@!X6h^]<4SCtv3=');
define('AUTH_SALT',        'F?9Y#am[@V]J?Hzw/QzSUF,wI1Ib%**8RO2m_YR6&R;Sb5?G@v:DH|fv!!7{rZuQ');
define('SECURE_AUTH_SALT', 'R,faHL|Op=JJEcK@V?h#^PX645a*_Ox^s9Z3fDf9UrOWL)W7iC=~FL8`E^yn B;A');
define('LOGGED_IN_SALT',   'fvxNxO?~NQ,{[b)z*B2iB!W?KSs.xF7SvupKyc:up6 D6ayh)ve>:OW,O%VV(4lL');
define('NONCE_SALT',       'k{r+db+|FO-Ok|,uP Cimsfr5_.QW&hUWwhV7#N7#,OTt_9|(iGjtn*k=[,Df+]D');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
