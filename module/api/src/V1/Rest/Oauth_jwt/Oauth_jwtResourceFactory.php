<?php
namespace api\V1\Rest\Oauth_jwt;

class Oauth_jwtResourceFactory
{
    public function __invoke($services)
    {
        return new Oauth_jwtResource();
    }
}
