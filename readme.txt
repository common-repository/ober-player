=== Ober Player ===
Contributors: privaloops
Tags: video, Ober player, shortcode
Tested up to: 6.4.1
Stable tag: 1.0.2
License: GPLv2

Ober Player bridges the gap between your WordPress site and Ober Player's powerful video player technology.

== Description ==

Ober Player bridges the gap between your WordPress site and Ober Player's powerful video player technology. Whether you're looking to publish tutorials, product reviews, or engaging stories, our plugin simplifies the process, allowing you to focus on creating captivating content that resonates with your audience.

== Installation ==

1. Upload oberplayer folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Now create a page or post and embed this shortcode where you want the player to be visible

[oberplayer videourl="yourvideoURL" autoplay="false|true" muted="false|true"]

The plugin will load a remote JavaScript library hosted on the Ober Player CDN, with the domain cdn.oberplayer.com, the full address of the script is "https://cdn.oberplayer.com/oberplayer.js?ver=1.0.2".
This library will be responsible for instantiating an "Ober Player" with the parameters you have integrated using the shortcode.
You can find all information about this service on the official website: https://www.oberplayer.com
To read the legal mentions: https://www.oberplayer.com/legal-mentions
To read the privacy policy: https://www.oberplayer.com/privacy-policy


== Screenshots ==

1. This screenshot displays how the shortcode renders within an article.

== Changelog ==

= 1.0 =
* First release

= 1.0.1 =
* Update to follow WP plugin recos

= 1.0.2 =
* Add missing shortcode example