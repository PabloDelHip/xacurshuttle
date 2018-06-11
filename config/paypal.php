<?php
return array(
    // set your paypal credential
    'client_id' => 'AbSA6bBMiz5jd2IQMAxEImIUZNBxnZsZpWTatmEfb-hgP_68lRpwkEaWBVbYvWUs6-ASWiSm8GyRDDCJ',
    'secret' => 'EN99rtNFKmmStGalv_IFjPfE78I-3b6aF91EmwIZPyQ8RO4K72dHow2R_39Wo4xJ3zpouUSOfZZe20Ui',

    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
