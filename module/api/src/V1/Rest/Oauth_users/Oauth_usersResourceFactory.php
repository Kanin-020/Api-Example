<?php
namespace api\V1\Rest\Oauth_users;

class Oauth_usersResourceFactory
{
    public function __invoke($services)
    {
        return new Oauth_usersResource();
    }
}
