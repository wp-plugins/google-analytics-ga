<?php

/**
 * @class       MBJ_Easy_Google_Analytics_Admin
 * @version	1.0.0
 * @package	paypal-donation-for-wordpress
 * @category	Class
 * @author      johnny manziel <phpwebcreators@gmail.com>
 */
class MBJ_Easy_Google_Analytics_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    public function easy_google_analytics_add_settings_menu() {
        add_options_page('Easy Google Analytics Options', 'Easy Google Analytics', 'manage_options', 'easy-google-analytics', array(__CLASS__, 'easy_google_analytics_options'));
    }

    public function easy_google_analytics_options() {
        ?>
        <div class="wrap">
            <h2>Google Analytics</h2>

            <form method="post" action="options.php">
                <?php wp_nonce_field('update-options'); ?>
                <?php settings_fields('googleanalytics'); ?>

                <table class="form-table">

                    <tr valign="top">
                        <th scope="row">Website tracking code:</th>
                        <td><input type="text" name="web_property_id" value="<?php echo get_option('web_property_id'); ?>" /></td>
                    </tr>

                    </tr>

                </table>

                <input type="hidden" name="action" value="update" />

                <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
                </p>

            </form>
        </div>

        <?php
    }

    public function easy_google_analytics_add_settings_googleanalytics() {
        register_setting('googleanalytics', 'web_property_id');
    }

    public function easy_google_analytics_googleanalytics_code() {
        $web_property_id = get_option('web_property_id');
        ?>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', '<?php echo $web_property_id ?>']);
            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <?php
    }

}
