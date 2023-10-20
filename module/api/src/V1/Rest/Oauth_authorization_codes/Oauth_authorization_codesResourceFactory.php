<?php
namespace api\V1\Rest\Oauth_authorization_codes;

class Oauth_authorization_codesResourceFactory
{
    public function __invoke($services)
    {
        return new Oauth_authorization_codesResource();
    }
}
