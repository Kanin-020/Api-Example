<?php
namespace api\V1\Rest\Oauth_access_tokens;

class Oauth_access_tokensResourceFactory
{
    public function __invoke($services)
    {
        return new Oauth_access_tokensResource();
    }
}
