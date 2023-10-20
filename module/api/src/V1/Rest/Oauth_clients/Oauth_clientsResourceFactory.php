<?php
namespace api\V1\Rest\Oauth_clients;

class Oauth_clientsResourceFactory
{
    public function __invoke($services)
    {
        return new Oauth_clientsResource();
    }
}
