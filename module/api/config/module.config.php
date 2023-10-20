<?php
return [
    'service_manager' => [
        'factories' => [
            \api\V1\Rest\Oauth_access_tokens\Oauth_access_tokensResource::class => \api\V1\Rest\Oauth_access_tokens\Oauth_access_tokensResourceFactory::class,
            \api\V1\Rest\Oauth_authorization_codes\Oauth_authorization_codesResource::class => \api\V1\Rest\Oauth_authorization_codes\Oauth_authorization_codesResourceFactory::class,
            \api\V1\Rest\Oauth_clients\Oauth_clientsResource::class => \api\V1\Rest\Oauth_clients\Oauth_clientsResourceFactory::class,
            \api\V1\Rest\Oauth_jwt\Oauth_jwtResource::class => \api\V1\Rest\Oauth_jwt\Oauth_jwtResourceFactory::class,
            \api\V1\Rest\Oauth_refresh_tokens\Oauth_refresh_tokensResource::class => \api\V1\Rest\Oauth_refresh_tokens\Oauth_refresh_tokensResourceFactory::class,
            \api\V1\Rest\Oauth_scopes\Oauth_scopesResource::class => \api\V1\Rest\Oauth_scopes\Oauth_scopesResourceFactory::class,
            \api\V1\Rest\Oauth_users\Oauth_usersResource::class => \api\V1\Rest\Oauth_users\Oauth_usersResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'api.rest.oauth_access_tokens' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/oauth_access_tokens[/:oauth_access_tokens_id]',
                    'defaults' => [
                        'controller' => 'api\\V1\\Rest\\Oauth_access_tokens\\Controller',
                    ],
                ],
            ],
            'api.rest.oauth_authorization_codes' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/oauth_authorization_codes[/:oauth_authorization_codes_id]',
                    'defaults' => [
                        'controller' => 'api\\V1\\Rest\\Oauth_authorization_codes\\Controller',
                    ],
                ],
            ],
            'api.rest.oauth_clients' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/oauth_clients[/:oauth_clients_id]',
                    'defaults' => [
                        'controller' => 'api\\V1\\Rest\\Oauth_clients\\Controller',
                    ],
                ],
            ],
            'api.rest.oauth_jwt' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/oauth_jwt[/:oauth_jwt_id]',
                    'defaults' => [
                        'controller' => 'api\\V1\\Rest\\Oauth_jwt\\Controller',
                    ],
                ],
            ],
            'api.rest.oauth_refresh_tokens' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/oauth_refresh_tokens[/:oauth_refresh_tokens_id]',
                    'defaults' => [
                        'controller' => 'api\\V1\\Rest\\Oauth_refresh_tokens\\Controller',
                    ],
                ],
            ],
            'api.rest.oauth_scopes' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/oauth_scopes[/:oauth_scopes_id]',
                    'defaults' => [
                        'controller' => 'api\\V1\\Rest\\Oauth_scopes\\Controller',
                    ],
                ],
            ],
            'api.rest.oauth_users' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/oauth_users[/:oauth_users_id]',
                    'defaults' => [
                        'controller' => 'api\\V1\\Rest\\Oauth_users\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'api.rest.oauth_access_tokens',
            1 => 'api.rest.oauth_authorization_codes',
            2 => 'api.rest.oauth_clients',
            3 => 'api.rest.oauth_jwt',
            4 => 'api.rest.oauth_refresh_tokens',
            5 => 'api.rest.oauth_scopes',
            6 => 'api.rest.oauth_users',
        ],
    ],
    'api-tools-rest' => [
        'api\\V1\\Rest\\Oauth_access_tokens\\Controller' => [
            'listener' => \api\V1\Rest\Oauth_access_tokens\Oauth_access_tokensResource::class,
            'route_name' => 'api.rest.oauth_access_tokens',
            'route_identifier_name' => 'oauth_access_tokens_id',
            'collection_name' => 'oauth_access_tokens',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \api\V1\Rest\Oauth_access_tokens\Oauth_access_tokensEntity::class,
            'collection_class' => \api\V1\Rest\Oauth_access_tokens\Oauth_access_tokensCollection::class,
            'service_name' => 'oauth_access_tokens',
        ],
        'api\\V1\\Rest\\Oauth_authorization_codes\\Controller' => [
            'listener' => \api\V1\Rest\Oauth_authorization_codes\Oauth_authorization_codesResource::class,
            'route_name' => 'api.rest.oauth_authorization_codes',
            'route_identifier_name' => 'oauth_authorization_codes_id',
            'collection_name' => 'oauth_authorization_codes',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \api\V1\Rest\Oauth_authorization_codes\Oauth_authorization_codesEntity::class,
            'collection_class' => \api\V1\Rest\Oauth_authorization_codes\Oauth_authorization_codesCollection::class,
            'service_name' => 'oauth_authorization_codes',
        ],
        'api\\V1\\Rest\\Oauth_clients\\Controller' => [
            'listener' => \api\V1\Rest\Oauth_clients\Oauth_clientsResource::class,
            'route_name' => 'api.rest.oauth_clients',
            'route_identifier_name' => 'oauth_clients_id',
            'collection_name' => 'oauth_clients',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \api\V1\Rest\Oauth_clients\Oauth_clientsEntity::class,
            'collection_class' => \api\V1\Rest\Oauth_clients\Oauth_clientsCollection::class,
            'service_name' => 'oauth_clients',
        ],
        'api\\V1\\Rest\\Oauth_jwt\\Controller' => [
            'listener' => \api\V1\Rest\Oauth_jwt\Oauth_jwtResource::class,
            'route_name' => 'api.rest.oauth_jwt',
            'route_identifier_name' => 'oauth_jwt_id',
            'collection_name' => 'oauth_jwt',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \api\V1\Rest\Oauth_jwt\Oauth_jwtEntity::class,
            'collection_class' => \api\V1\Rest\Oauth_jwt\Oauth_jwtCollection::class,
            'service_name' => 'oauth_jwt',
        ],
        'api\\V1\\Rest\\Oauth_refresh_tokens\\Controller' => [
            'listener' => \api\V1\Rest\Oauth_refresh_tokens\Oauth_refresh_tokensResource::class,
            'route_name' => 'api.rest.oauth_refresh_tokens',
            'route_identifier_name' => 'oauth_refresh_tokens_id',
            'collection_name' => 'oauth_refresh_tokens',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \api\V1\Rest\Oauth_refresh_tokens\Oauth_refresh_tokensEntity::class,
            'collection_class' => \api\V1\Rest\Oauth_refresh_tokens\Oauth_refresh_tokensCollection::class,
            'service_name' => 'oauth_refresh_tokens',
        ],
        'api\\V1\\Rest\\Oauth_scopes\\Controller' => [
            'listener' => \api\V1\Rest\Oauth_scopes\Oauth_scopesResource::class,
            'route_name' => 'api.rest.oauth_scopes',
            'route_identifier_name' => 'oauth_scopes_id',
            'collection_name' => 'oauth_scopes',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \api\V1\Rest\Oauth_scopes\Oauth_scopesEntity::class,
            'collection_class' => \api\V1\Rest\Oauth_scopes\Oauth_scopesCollection::class,
            'service_name' => 'oauth_scopes',
        ],
        'api\\V1\\Rest\\Oauth_users\\Controller' => [
            'listener' => \api\V1\Rest\Oauth_users\Oauth_usersResource::class,
            'route_name' => 'api.rest.oauth_users',
            'route_identifier_name' => 'oauth_users_id',
            'collection_name' => 'oauth_users',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \api\V1\Rest\Oauth_users\Oauth_usersEntity::class,
            'collection_class' => \api\V1\Rest\Oauth_users\Oauth_usersCollection::class,
            'service_name' => 'oauth_users',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'api\\V1\\Rest\\Oauth_access_tokens\\Controller' => 'HalJson',
            'api\\V1\\Rest\\Oauth_authorization_codes\\Controller' => 'HalJson',
            'api\\V1\\Rest\\Oauth_clients\\Controller' => 'HalJson',
            'api\\V1\\Rest\\Oauth_jwt\\Controller' => 'HalJson',
            'api\\V1\\Rest\\Oauth_refresh_tokens\\Controller' => 'HalJson',
            'api\\V1\\Rest\\Oauth_scopes\\Controller' => 'HalJson',
            'api\\V1\\Rest\\Oauth_users\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'api\\V1\\Rest\\Oauth_access_tokens\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'api\\V1\\Rest\\Oauth_authorization_codes\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'api\\V1\\Rest\\Oauth_clients\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'api\\V1\\Rest\\Oauth_jwt\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'api\\V1\\Rest\\Oauth_refresh_tokens\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'api\\V1\\Rest\\Oauth_scopes\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'api\\V1\\Rest\\Oauth_users\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'api\\V1\\Rest\\Oauth_access_tokens\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
            'api\\V1\\Rest\\Oauth_authorization_codes\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
            'api\\V1\\Rest\\Oauth_clients\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
            'api\\V1\\Rest\\Oauth_jwt\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
            'api\\V1\\Rest\\Oauth_refresh_tokens\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
            'api\\V1\\Rest\\Oauth_scopes\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
            'api\\V1\\Rest\\Oauth_users\\Controller' => [
                0 => 'application/vnd.api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \api\V1\Rest\Oauth_access_tokens\Oauth_access_tokensEntity::class => [
                'entity_identifier_name' => 'access_token',
                'route_name' => 'api.rest.oauth_access_tokens',
                'route_identifier_name' => 'oauth_access_tokens_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \api\V1\Rest\Oauth_access_tokens\Oauth_access_tokensCollection::class => [
                'entity_identifier_name' => 'access_token',
                'route_name' => 'api.rest.oauth_access_tokens',
                'route_identifier_name' => 'oauth_access_tokens_id',
                'is_collection' => true,
            ],
            \api\V1\Rest\Oauth_authorization_codes\Oauth_authorization_codesEntity::class => [
                'entity_identifier_name' => 'authorization_code',
                'route_name' => 'api.rest.oauth_authorization_codes',
                'route_identifier_name' => 'oauth_authorization_codes_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \api\V1\Rest\Oauth_authorization_codes\Oauth_authorization_codesCollection::class => [
                'entity_identifier_name' => 'authorization_code',
                'route_name' => 'api.rest.oauth_authorization_codes',
                'route_identifier_name' => 'oauth_authorization_codes_id',
                'is_collection' => true,
            ],
            \api\V1\Rest\Oauth_clients\Oauth_clientsEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.oauth_clients',
                'route_identifier_name' => 'oauth_clients_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \api\V1\Rest\Oauth_clients\Oauth_clientsCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'api.rest.oauth_clients',
                'route_identifier_name' => 'oauth_clients_id',
                'is_collection' => true,
            ],
            \api\V1\Rest\Oauth_jwt\Oauth_jwtEntity::class => [
                'entity_identifier_name' => 'client_id',
                'route_name' => 'api.rest.oauth_jwt',
                'route_identifier_name' => 'oauth_jwt_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \api\V1\Rest\Oauth_jwt\Oauth_jwtCollection::class => [
                'entity_identifier_name' => 'client_id',
                'route_name' => 'api.rest.oauth_jwt',
                'route_identifier_name' => 'oauth_jwt_id',
                'is_collection' => true,
            ],
            \api\V1\Rest\Oauth_refresh_tokens\Oauth_refresh_tokensEntity::class => [
                'entity_identifier_name' => 'refresh_token',
                'route_name' => 'api.rest.oauth_refresh_tokens',
                'route_identifier_name' => 'oauth_refresh_tokens_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \api\V1\Rest\Oauth_refresh_tokens\Oauth_refresh_tokensCollection::class => [
                'entity_identifier_name' => 'refresh_token',
                'route_name' => 'api.rest.oauth_refresh_tokens',
                'route_identifier_name' => 'oauth_refresh_tokens_id',
                'is_collection' => true,
            ],
            \api\V1\Rest\Oauth_scopes\Oauth_scopesEntity::class => [
                'entity_identifier_name' => 'scope',
                'route_name' => 'api.rest.oauth_scopes',
                'route_identifier_name' => 'oauth_scopes_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \api\V1\Rest\Oauth_scopes\Oauth_scopesCollection::class => [
                'entity_identifier_name' => 'scope',
                'route_name' => 'api.rest.oauth_scopes',
                'route_identifier_name' => 'oauth_scopes_id',
                'is_collection' => true,
            ],
            \api\V1\Rest\Oauth_users\Oauth_usersEntity::class => [
                'entity_identifier_name' => 'username',
                'route_name' => 'api.rest.oauth_users',
                'route_identifier_name' => 'oauth_users_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \api\V1\Rest\Oauth_users\Oauth_usersCollection::class => [
                'entity_identifier_name' => 'username',
                'route_name' => 'api.rest.oauth_users',
                'route_identifier_name' => 'oauth_users_id',
                'is_collection' => true,
            ],
        ],
    ],
];
