<?php

/**
 * @class       MBJ_Easy_Google_Analytics_Activator
 * @version	1.0.0
 * @package	paypal-donation-for-wordpress
 * @category	Class
 * @author      johnny manziel <phpwebcreators@gmail.com>
 */
class MBJ_Easy_Google_Analytics_Deactivator {

    /**
     * @since    1.0.0
     */
    public static function deactivate() {
        delete_option('web_property_id');
    }

}
