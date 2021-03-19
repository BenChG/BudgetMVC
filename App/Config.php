<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'budgetmvc';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'admin';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'kosha2150';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

    /**
     * Secret key for hashing
     * @var boolean
     */
    const SECRET_KEY = 'your-secret-key';

    /**
     * Mailgun API key
     *
     * @var string
     */
    const MAILGUN_API_KEY = '1d2bdcd35bdd57e6a36fb054e8736445-73e57fef-962a5a30';

    /**
     * Mailgun domain
     *
     * @var string
     */
    const MAILGUN_DOMAIN = 'https://api.mailgun.net/v3/sandboxc442377a5b3441e18545b788b35e57bf.mailgun.org';
}
