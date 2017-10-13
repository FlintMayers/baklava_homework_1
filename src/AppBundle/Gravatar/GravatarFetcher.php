<?php

namespace AppBundle\Gravatar;

class GravatarFetcher extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('gravatar', array($this, 'fetchGravatar')),
        );
    }

    public function fetchGravatar($email)
    {
        $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . '?s=200';

        return $grav_url;
    }
}