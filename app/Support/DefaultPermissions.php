<?php

namespace App\Support;

class DefaultPermissions
{
    public const NAMESPACE = 'roles';

    public const VIEW_ANY_ROLES = 'roles::view-any-roles';
    public const DELETE_ANY_ROLES = 'roles::delete-any-roles';
    public const CREATE_ROLE = 'roles::create-role';
    public const VIEW_ROLE = 'roles::view-role';
    public const UPDATE_ROLE = 'roles::update-role';
    public const DELETE_ROLE = 'roles::delete-role';

    public const VIEW_ANY_USERS = 'roles::view-any-users';
    public const DELETE_ANY_USERS = 'roles::delete-any-users';
    public const CREATE_USER = 'roles::create-user';
    public const VIEW_USER = 'roles::view-user';
    public const UPDATE_USER = 'roles::update-user';
    public const DELETE_USER = 'roles::delete-user';

    public const VIEW_ANY_POSTS = 'roles::view-any-posts';
    public const DELETE_ANY_POSTS = 'roles::delete-any-posts';
    public const CREATE_POST = 'roles::create-post';
    public const VIEW_POST = 'roles::view-post';
    public const UPDATE_POST = 'roles::update-post';
    public const DELETE_POST = 'roles::delete-post';

    public const VIEW_ANY_EMPLOYEES = 'roles::view-any-employees';
    public const DELETE_ANY_EMPLOYEES = 'roles::delete-any-employees';
    public const CREATE_EMPLOYEE = 'roles::create-employee';
    public const VIEW_EMPLOYEE = 'roles::view-employee';
    public const UPDATE_EMPLOYEE = 'roles::update-employee';
    public const DELETE_EMPLOYEE = 'roles::delete-employee';


    protected static array $permissions = [
        [
            'name' => self::VIEW_ANY_ROLES,
            'label' => 'View Any Roles',
            'description' => 'View Any Roles',
            'group' => 'role',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::DELETE_ANY_ROLES,
            'label' => 'Delete Any Roles',
            'description' => 'Delete Any Roles',
            'group' => 'role',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::CREATE_ROLE,
            'label' => 'Create Role',
            'description' => 'Create Role',
            'group' => 'role',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::VIEW_ROLE,
            'label' => 'View Role',
            'description' => 'View Role',
            'group' => 'role',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::UPDATE_ROLE,
            'label' => 'Update Role',
            'description' => 'Update Role',
            'group' => 'role',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::DELETE_ROLE,
            'label' => 'Delete Role',
            'description' => 'Delete Role',
            'group' => 'role',
            'namespace' => self::NAMESPACE,
        ],

        [
            'name' => self::VIEW_ANY_USERS,
            'label' => 'View Any Users',
            'description' => 'View Any Users',
            'group' => 'user',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::DELETE_ANY_USERS,
            'label' => 'Delete Any Users',
            'description' => 'Delete Any Users',
            'group' => 'user',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::CREATE_USER,
            'label' => 'Create User',
            'description' => 'Create User',
            'group' => 'user',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::VIEW_USER,
            'label' => 'View User',
            'description' => 'View User',
            'group' => 'user',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::UPDATE_USER,
            'label' => 'Update User',
            'description' => 'Update User',
            'group' => 'user',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::DELETE_USER,
            'label' => 'Delete User',
            'description' => 'Delete User',
            'group' => 'user',
            'namespace' => self::NAMESPACE,
        ],

        [
            'name' => self::VIEW_ANY_POSTS,
            'label' => 'View Any Posts',
            'description' => 'View Any Posts',
            'group' => 'post',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::DELETE_ANY_POSTS,
            'label' => 'Delete Any Posts',
            'description' => 'Delete Any Posts',
            'group' => 'post',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::CREATE_POST,
            'label' => 'Create Post',
            'description' => 'Create Post',
            'group' => 'post',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::VIEW_POST,
            'label' => 'View Post',
            'description' => 'View Post',
            'group' => 'post',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::UPDATE_POST,
            'label' => 'Update Post',
            'description' => 'Update Post',
            'group' => 'post',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::DELETE_POST,
            'label' => 'Delete Post',
            'description' => 'Delete Post',
            'group' => 'post',
            'namespace' => self::NAMESPACE,
        ],

        [
            'name' => self::VIEW_ANY_EMPLOYEES,
            'label' => 'View Any Employees',
            'description' => 'View Any Employees',
            'group' => 'employee',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::DELETE_ANY_EMPLOYEES,
            'label' => 'Delete Any Employees',
            'description' => 'Delete Any Employees',
            'group' => 'employee',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::CREATE_EMPLOYEE,
            'label' => 'Create Employee',
            'description' => 'Create Employee',
            'group' => 'employee',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::VIEW_EMPLOYEE,
            'label' => 'View Employee',
            'description' => 'View Employee',
            'group' => 'employee',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::UPDATE_EMPLOYEE,
            'label' => 'Update Employee',
            'description' => 'Update Employee',
            'group' => 'employee',
            'namespace' => self::NAMESPACE,
        ],
        [
            'name' => self::DELETE_EMPLOYEE,
            'label' => 'Delete Employee',
            'description' => 'Delete Employee',
            'group' => 'employee',
            'namespace' => self::NAMESPACE,
        ],

    ];

    public static function getPermissions(): array
    {
        return self::$permissions;
    }
}
