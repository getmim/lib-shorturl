<?php
/**
 * ShortUrl
 * @package lib-shorturl
 * @version 0.0.1
 */

namespace LibShorturl\Model;

class ShortUrl extends \Mim\Model
{

    protected static $table = 'short_url';

    protected static $chains = [];

    protected static $q = [];
}