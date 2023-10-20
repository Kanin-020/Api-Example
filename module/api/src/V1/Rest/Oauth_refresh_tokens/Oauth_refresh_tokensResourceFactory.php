<?php
namespace api\V1\Rest\Oauth_refresh_tokens;

class Oauth_refresh_tokensResourceFactory
{
    public function __invoke($services)
    {
        return new Oauth_refresh_tokensResource();
    }
}
