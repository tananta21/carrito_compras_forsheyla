<?php
return array(
    // set your paypal credential
    'client_id' => 'AbYX9B6Iq7-w0vWWkYxRZhFR3HFnHhYO6GVqk9SDNYGAc-QtwYhEZ9p2r9E5gfIJCJNb9AoASKMB6_Fc',
    'secret' => 'EK-aSQNQbi0qKIV4A9dFuDfrlDPKMjgPF50MJNvluYdEfuwvv4HR4tIJ7nknJN7uG6arGmwyXHkcsyO4',

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
        'http.ConnectionTimeOut' => 50,

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