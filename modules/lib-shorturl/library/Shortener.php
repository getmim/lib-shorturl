<?php
/**
 * Shortener
 * @package lib-shorturl
 * @version 0.0.1
 */

namespace LibShorturl\Library;

use LibShorturl\Model\ShortUrl as SUrl;

class Shortener
{
    protected static $last_shortener;

    private static function getUser(): int{
        $user_id = 0;
        if(module_exists('lib-user') && \Mim::$app->user->isLogin())
            $user_id = \Mim::$app->user->id;
        return $user_id;
    }

    static function lastError(): ?string{
        if(!self::$last_shortener)
            return null;

        $shp = self::$last_shortener;
        return $shp::lastError();
    }

    static function shorten(string $url): ?string{
        $sdb = SUrl::getOne(['url' => $url]);
        if($sdb)
            return $sdb->short;

        $result = null;

        $shorteners = \Mim::$app->config->libShortURL->shorteners;
        foreach($shorteners as $name => $shortener){
            self::$last_shortener = $shortener;
            $result = $shortener::shorten($url);
            if($result)
                break;
        }

        if(!$result)
            return null;
        
        SUrl::create([
            'user'  => self::getUser(),
            'url'   => $url,
            'short' => $result
        ]);

        return $result;
    }
}