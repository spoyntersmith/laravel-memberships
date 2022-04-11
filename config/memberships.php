<?php
// config for Spoyntersmith/LaravelMemberships
return [
    /*
     * Default settings for the package
     */
    'defaults' => [
        /*
         * Default amount of days a membership is valid
         * This setting can be overwritten in the membership model
         *
         */
        'valid_for' => '365',

        /*
         * Touch timestamp on membership creation
         */
        'touch_on_create' => true,
    ],

    /*
     * Models that are used by the package
     */
    'models' => [
        /*
         * The membership model can be overwritten here
         * It must extend the Spoyntersmith\LaravelMemberships\Models\Membership model
         */
        'membership' => Spoyntersmith\LaravelMemberships\Models\Membership::class,
    ],

];
