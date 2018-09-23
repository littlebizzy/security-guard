=== Security Guard ===

Contributors: littlebizzy
Donate link: https://www.patreon.com/littlebizzy
Tags: security, guard, firewall, protection, suite
Requires at least: 4.4
Tested up to: 4.9
Requires PHP: 7.2
Multisite support: No
Stable tag: 1.0.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: SCRGRD

A carefully selected security suite for WordPress that combines only the most effective methods of guarding against hackers and other common attacks.

== Description ==

A carefully selected security suite for WordPress that combines only the most effective methods of guarding against hackers and other common attacks.

* [**Join our FREE Facebook group for support!**](https://www.facebook.com/groups/littlebizzy/)
* [**Worth a 5-star review? Thank you!**](https://wordpress.org/support/plugin/security-guard-littlebizzy/reviews/?rate=5#new-post)
* [Plugin Homepage](https://www.littlebizzy.com/plugins/security-guard)
* [Plugin GitHub](https://github.com/littlebizzy/security-guard)

*Our related OSS projects:*

* [SlickStack (LEMP stack automation)](https://slickstack.io)
* [WP Lite boilerplate](https://wplite.org)
* [Starter Theme](https://starter.littlebizzy.com)

#### The Long Version ####

Bundles all of the following in one-click activation:

* Disable Empty Trash 1.0.0
* Disable Post Via Email 1.0.0
* Disable XML-RPC 1.0.8
* Force Strong Hashing 1.0.5
* Header Cleanup 1.1.1
* (more modules coming soon...)

...if you wish to disable a certain module, use the below defined constants in your `wp-config.php` file.

Note: these defined constants are ONLY supported within Speed Demon. If you have one of these installed as a standalone plugin already, that function WILL REMAIN ENABLED until you disable the standalone version of the function. For example, if you disable Index Autoload in Speed Demon using a defined constant, but you still have our other Index Autoload plugin installed + enabled, then that function will continue to function until you disable or delete the standalone Index Autoload plugin. This allows for web hosts or other agencies to force-control their WordPress environment using our standalone plugins.

Below are all included sub-plugins along with their default values:

* define('DISABLE_EMPTY_TRASH', 'true');
* define('DISABLE_POST_VIA_EMAIL', 'true');
* define('DISABLE_XML_RPC', 'true');
* define('FORCE_STRONG_PASSWORDS', 'true');
* define('HEADER_CLEANUP', 'true');

Developer notes 1.0.0:

- It passes the PHP 7 compatibility tests
- It shares the Speed Demon initialization and verification modules mechanism.
- There are only two new modules (Disable Empty Trash and Force Strong Hashing); the other modules have been reused from Speed Demon.
- Doing tests having activated the Speed Demon plugin does not show any issue, both consult the plugin constants and work as expected.
- The config.php file is a copy of the existing of Speed Demon config.php file

#### Compatibility ####

This plugin has been designed for use on LEMP (Nginx) web servers with PHP 7.0 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only; for both performance and security reasons, we highly recommend against using WordPress Multisite for the vast majority of projects.

Note: Any WordPress plugin may also be loaded as "Must-Use" by using the [Autoloader](https://github.com/littlebizzy/autoloader) script within the `mu-plugins` directory.

#### Defined Constants ####

* define('DISABLE_NAG_NOTICES', true);
* define('DISABLE_EMPTY_TRASH', 'true');
* define('DISABLE_POST_VIA_EMAIL', 'true');
* define('DISABLE_XML_RPC', 'true');
* define('FORCE_STRONG_PASSWORDS', 'true');
* define('HEADER_CLEANUP', 'true');

#### Plugin Features ####

* Premium Version: [**Speed Demon**](https://www.littlebizzy.com/plugins/speed-demon)
* Settings Page: No
* PHP Namespaces: Yes
* Object-Oriented Code: Yes
* Includes Media (images, icons, etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * Options: Yes
  * Table Data: Yes
  * Creates New Tables: No
* Database Queries: Backend Only 
  * Query Types: Options API
* Multisite Support: No
* Uninstalls Data: Yes

#### Nag Notices ####

This plugin generates multiple [Admin Notices](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices) in the WP Admin dashboard. The first is a notice that fires during plugin activation which recommends several related free plugins that we believe will enhance this plugin's features; this notice will re-appear approximately once every 6 months as our code and recommendations evolve. The second is a notice that fires a few days after plugin activation which asks for a 5-star rating of this plugin on its WordPress.org profile page. This notice will re-appear approximately once every 9 months. These notices can be dismissed by clicking the **(x)** symbol in the upper right of the notice box. These notices may annoy or confuse certain users, but are appreciated by the majority of our userbase, who understand that these notices support our free contributions to the WordPress community while providing valuable (free) recommendations for optimizing their website.

If you feel that these notices are too annoying, than we encourage you to consider one or more of our upcoming premium plugins that combine several free plugin features into a single control panel, or even consider developing your own plugins for WordPress, if supporting free plugin authors is too frustrating for you. A final alternative would be to place the defined constant mentioned below inside of your `wp-config.php` file to manually hide this plugin's nag notices:

    define('DISABLE_NAG_NOTICES', true);

Note: This defined constant will only affect the notices mentioned above, and will not affect any other notices generated by this plugin or other plugins, such as one-time notices that communicate with admin-level users.

#### Inspiration ####

* n/a

#### Free Plugins ####

* [404 To Homepage](https://wordpress.org/plugins/404-to-homepage-littlebizzy/)
* [Autoloader](https://github.com/littlebizzy/autoloader)
* [CloudFlare](https://wordpress.org/plugins/cf-littlebizzy/)
* [Custom Functions](https://wordpress.org/plugins/custom-functions-littlebizzy/)
* [Delete Expired Transients](https://wordpress.org/plugins/delete-expired-transients-littlebizzy/)
* [Disable Admin-AJAX](https://wordpress.org/plugins/disable-admin-ajax-littlebizzy/)
* [Disable Author Pages](https://wordpress.org/plugins/disable-author-pages-littlebizzy/)
* [Disable Cart Fragments](https://wordpress.org/plugins/disable-cart-fragments-littlebizzy/)
* [Disable Embeds](https://wordpress.org/plugins/disable-embeds-littlebizzy/)
* [Disable Emojis](https://wordpress.org/plugins/disable-emojis-littlebizzy/)
* [Disable Empty Trash](https://wordpress.org/plugins/disable-empty-trash-littlebizzy/)
* [Disable Image Compression](https://wordpress.org/plugins/disable-image-compression-littlebizzy/)
* [Disable jQuery Migrate](https://wordpress.org/plugins/disable-jq-migrate-littlebizzy/)
* [Disable Search](https://wordpress.org/plugins/disable-search-littlebizzy/)
* [Disable WooCommerce Status](https://wordpress.org/plugins/disable-wc-status-littlebizzy/)
* [Disable WooCommerce Styles](https://wordpress.org/plugins/disable-wc-styles-littlebizzy/)
* [Disable XML-RPC](https://wordpress.org/plugins/disable-xml-rpc-littlebizzy/)
* [Download Media](https://wordpress.org/plugins/download-media-littlebizzy/)
* [Download Plugin](https://wordpress.org/plugins/download-plugin-littlebizzy/)
* [Download Theme](https://wordpress.org/plugins/download-theme-littlebizzy/)
* [Duplicate Post](https://wordpress.org/plugins/duplicate-post-littlebizzy/)
* [Enable Subtitles](https://wordpress.org/plugins/enable-subtitles-littlebizzy/)
* [Export Database](https://wordpress.org/plugins/export-database-littlebizzy/)
* [Facebook Pixel](https://wordpress.org/plugins/fb-pixel-littlebizzy/)
* [Force HTTPS](https://wordpress.org/plugins/force-https-littlebizzy/)
* [Force Strong Hashing](https://wordpress.org/plugins/force-strong-hashing-littlebizzy/)
* [Google Analytics](https://wordpress.org/plugins/ga-littlebizzy/)
* [Header Cleanup](https://wordpress.org/plugins/header-cleanup-littlebizzy/)
* [Index Autoload](https://wordpress.org/plugins/index-autoload-littlebizzy/)
* [Maintenance Mode](https://wordpress.org/plugins/maintenance-mode-littlebizzy/)
* [Profile Change Alerts](https://wordpress.org/plugins/profile-change-alerts-littlebizzy/)
* [Remove Category Base](https://wordpress.org/plugins/remove-category-base-littlebizzy/)
* [Remove Query Strings](https://wordpress.org/plugins/remove-query-strings-littlebizzy/)
* [Security Guard](https://wordpress.org/plugins/security-guard-littlebizzy/)
* [Server Status](https://wordpress.org/plugins/server-status-littlebizzy/)
* [Speed Demon](https://wordpress.org/plugins/speed-demon-littlebizzy/)
* [StatCounter](https://wordpress.org/plugins/sc-littlebizzy/)
* [View Defined Constants](https://wordpress.org/plugins/view-defined-constants-littlebizzy/)
* [Virtual Robots.txt](https://wordpress.org/plugins/virtual-robotstxt-littlebizzy/)

#### Premium Plugins ####

* [**Members Only**](https://www.littlebizzy.com/members)
* [Dunning Master](https://www.littlebizzy.com/plugins/dunning-master)
* [Genghis Khan](https://www.littlebizzy.com/plugins/genghis-khan)
* [Great Migration](https://www.littlebizzy.com/plugins/great-migration)
* [Security Guard](https://www.littlebizzy.com/plugins/security-guard)
* [SEO Genius](https://www.littlebizzy.com/plugins/seo-genius)
* [Speed Demon](https://www.littlebizzy.com/plugins/speed-demon)

#### Special Thanks ####

* [Alex Georgiou](https://www.alexgeorgiou.gr)
* [Automattic](https://automattic.com)
* [Brad Touesnard](https://bradt.ca)
* [Daniel Auener](http://www.danielauener.com)
* [Delicious Brains](https://deliciousbrains.com)
* [Greg Rickaby](https://gregrickaby.com)
* [Matt Mullenweg](https://ma.tt)
* [Mika Epstein](https://halfelf.org)
* [Mike Garrett](https://mikengarrett.com)
* [Samuel Wood](http://ottopress.com)
* [Scott Reilly](http://coffee2code.com)
* [Jan Dembowski](https://profiles.wordpress.org/jdembowski)
* [Jeff Starr](https://perishablepress.com)
* [Jeff Chandler](https://jeffc.me)
* [Jeff Matson](https://jeffmatson.net)
* [Jeremy Wagner](https://jeremywagner.me)
* [John James Jacoby](https://jjj.blog)
* [Leland Fiegel](https://leland.me)
* [Paul Irish](https://www.paulirish.com)
* [Rahul Bansal](https://profiles.wordpress.org/rahul286)
* [Roots](https://roots.io)
* [rtCamp](https://rtcamp.com)
* [Ryan Hellyer](https://geek.hellyer.kiwi)
* [WP Chat](https://wpchat.com)
* [WP Tavern](https://wptavern.com)

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep the above-mentioned goals in mind... thanks!

== Installation ==

1. Upload to `/wp-content/plugins/security-guard-littlebizzy`
2. Activate via WP Admin > Plugins
3. Test plugin is working

== Frequently Asked Questions ==

= How can I change this plugin's settings? =

There is no settings page. To enable/disable a certain function (sub-plugin) use the defined constants only.

= Why don't you have a settings page? =

Because that would mean database queries and more time/hassle/confusion for setup. No settings page means web developers, agencies, or web hosts can automate their WordPress setups (such as with Bash scripts, etc) much faster and easier, and clients have less chance of accidentally messing things up by snooping around a settings page.

= Does it work alongside XYZ plugin? =

Yes, it will work no matter what plugins/theme you have installed, there should be no conflicts.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Join our Facebook group instead.

== Changelog ==

= 1.0.0 =
* initial release
* tested with PHP 7.0
* tested with PHP 7.1
* tested with PHP 7.2
* bundles Disable Empty Trash 1.0.0
* bundles Post Via Email 1.0.0
* bundles Disable XML-RPC 1.0.8
* bundles Force Strong Hashing 1.0.5
* bundles Header Cleanup 1.1.1
* define('DISABLE_EMPTY_TRASH', 'true');
* define('DISABLE_POST_VIA_EMAIL', 'true');
* define('DISABLE_XML_RPC', 'true');
* define('FORCE_STRONG_PASSWORDS', 'true');
* define('HEADER_CLEANUP', 'true');
* added warning to Multisite installations
* plugin uses PHP namespaces
* object-oriented codebase
