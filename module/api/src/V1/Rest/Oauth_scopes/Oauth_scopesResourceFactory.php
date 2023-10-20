<?php
namespace api\V1\Rest\Oauth_scopes;

class Oauth_scopesResourceFactory
{
    public function __invoke($services)
    {
        return new Oauth_scopesResource();
    }
}
