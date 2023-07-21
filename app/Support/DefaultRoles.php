<?php

namespace App\Support;

class DefaultRoles
{
    public const ADMIN = 'role::admin';
    public const USER = 'role::user';
    public const BOT = 'role::bot';

    protected static array $roles = [
        [
            'name' => self::ADMIN,
            'label' => 'Admin',
            'description' => 'Admin',
        ],
        [
            'name' => self::USER,
            'label' => 'User',
            'description' => 'User',
        ],
        [
            'name' => self::BOT,
            'label' => 'Bot',
            'description' => 'This role is reserved for user accounts with automated activities.',
        ],
    ];

    public static function getRoles(): array
    {
        return self::$roles;
    }
}
