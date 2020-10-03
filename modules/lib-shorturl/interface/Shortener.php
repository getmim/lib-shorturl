<?php
/**
 * Shortener
 * @package lib-shorturl
 * @version 0.0.1
 */

namespace LibShorturl\Iface;


interface Shortener
{

    static function lastError(): ?string;

    static function shorten(string $url): ?string;
}