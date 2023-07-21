<?php

namespace App\Support;

use App\Support\DefaultPermissions;
use App\Support\DefaultRoles;

class DefaultAccess
{
    protected static array $access = [
        DefaultRoles::ADMIN => [
            DefaultPermissions::VIEW_ANY_ROLES,
            DefaultPermissions::DELETE_ANY_ROLES,
            DefaultPermissions::CREATE_ROLE,
            DefaultPermissions::VIEW_ROLE,
            DefaultPermissions::UPDATE_ROLE,
            DefaultPermissions::DELETE_ROLE,

            DefaultPermissions::VIEW_ANY_USERS,
            DefaultPermissions::DELETE_ANY_USERS,
            DefaultPermissions::CREATE_USER,
            DefaultPermissions::VIEW_USER,
            DefaultPermissions::UPDATE_USER,
            DefaultPermissions::DELETE_USER,

            DefaultPermissions::VIEW_ANY_POSTS,
            DefaultPermissions::DELETE_ANY_POSTS,
            DefaultPermissions::CREATE_POST,
            DefaultPermissions::VIEW_POST,
            DefaultPermissions::UPDATE_POST,
            DefaultPermissions::DELETE_POST,

            DefaultPermissions::VIEW_ANY_EMPLOYEES,
            DefaultPermissions::DELETE_ANY_EMPLOYEES,
            DefaultPermissions::CREATE_EMPLOYEE,
            DefaultPermissions::VIEW_EMPLOYEE,
            DefaultPermissions::UPDATE_EMPLOYEE,
            DefaultPermissions::DELETE_EMPLOYEE,

        ],

        DefaultRoles::USER => [
            // DefaultPermissions::VIEW_ANY_ROLES,
            // DefaultPermissions::DELETE_ANY_ROLES,
            // DefaultPermissions::CREATE_ROLE,
            // DefaultPermissions::VIEW_ROLE,
            // DefaultPermissions::UPDATE_ROLE,
            // DefaultPermissions::DELETE_ROLE,

            // DefaultPermissions::VIEW_ANY_USERS,
            // DefaultPermissions::DELETE_ANY_USERS,
            // DefaultPermissions::CREATE_USER,
            // DefaultPermissions::VIEW_USER,
            // DefaultPermissions::UPDATE_USER,
            // DefaultPermissions::DELETE_USER,

            DefaultPermissions::VIEW_ANY_POSTS,
            DefaultPermissions::DELETE_ANY_POSTS,
            DefaultPermissions::CREATE_POST,
            DefaultPermissions::VIEW_POST,
            DefaultPermissions::UPDATE_POST,
            DefaultPermissions::DELETE_POST,


            DefaultPermissions::VIEW_ANY_EMPLOYEES,
            DefaultPermissions::DELETE_ANY_EMPLOYEES,
            DefaultPermissions::CREATE_EMPLOYEE,
            DefaultPermissions::VIEW_EMPLOYEE,
            DefaultPermissions::UPDATE_EMPLOYEE,
            DefaultPermissions::DELETE_EMPLOYEE,

        ],
    ];

    public static function getAccess(): array
    {
        return self::$access;
    }
}
