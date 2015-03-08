<?php

/**
 * @class       MBJ_Easy_Google_Analytics_Activator
 * @version	1.0.0
 * @package	paypal-donation-for-wordpress
 * @category	Class
 * @author      johnny manziel <phpwebcreators@gmail.com>
 */
class MBJ_Easy_Google_Analytics_Activator {

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function activate() {
        add_option('web_property_id', 'UA-0000000-0');
    }

}
