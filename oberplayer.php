<?php
/**
 * Plugin Name:     Ober Player
 * Plugin URI:      https://www.oberplayer.com
 * Description:     Ober Player bridges the gap between your WordPress site and Ober Player's powerful video player technology. Whether you're looking to publish tutorials, product reviews, or engaging stories, our plugin simplifies the process, allowing you to focus on creating captivating content that resonates with your audience.
 * Author:          Thibaut Lion
 * Author URI:      https://github.com/privaloops
 * License:         GPL v2 or later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     oberplayer
 * Version:         1.0.2
 *
 * @package         oberplayer
 */

 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function oberplayer_shortcode_callback($atts) {
  $default = array(
    'videourl' => "",
    'autoplay' => "false",
    'muted' => "false",
  );
  $a = shortcode_atts($default, $atts);

  return wpautop('<div style="width:'
  .$a['width'].';height:'
  .$a['height'].'" data-oberplayeroptions="{'
      .esc_html('"playlist":[{"videoUrl":"'
      .$a['videourl'].'","autoplay":'
      .$a['autoplay'].',"muted":'
      .$a['muted']
    .'}]}').'"></div>');
}

add_shortcode('oberplayer', 'oberplayer_shortcode_callback');

function oberplayer_enqueue_script()
{
    wp_enqueue_script( 'oberplayer', 'https://cdn.oberplayer.com/oberplayer.js', false, '1.0.2', array('in_footer' => true));

    $script = "window.addEventListener('load', (event) => {
      const players = document.querySelectorAll('[data-oberplayeroptions]');
      players.forEach(async(player) => {
        await oberplayer(player).setup();
      })
    })";
  
    wp_add_inline_script("oberplayer", $script);
}
add_action( 'wp_enqueue_scripts', 'oberplayer_enqueue_script' );