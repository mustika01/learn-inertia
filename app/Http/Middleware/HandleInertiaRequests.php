<?php

namespace App\Http\Middleware;

use App\Support\DefaultPermissions;
use Illuminate\Http\Request;
use Inertia\Middleware;

use illuminate\Support\Facades\App;
use illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'permissions' => [
                'post' => [
                    'view' => Auth::user()?->can(DefaultPermissions::VIEW_POST),
                    'create' => Auth::user()?->can(DefaultPermissions::CREATE_POST),
                    'edit' => Auth::user()?->can(DefaultPermissions::UPDATE_POST),
                    'delete' => Auth::user()?->can(DefaultPermissions::DELETE_POST),
                ],
                'role' => [
                    'view' => Auth::user()?->can(DefaultPermissions::VIEW_ROLE),
                    'create' => Auth::user()?->can(DefaultPermissions::CREATE_ROLE),
                    'edit' => Auth::user()?->can(DefaultPermissions::UPDATE_ROLE),
                    'delete' => Auth::user()?->can(DefaultPermissions::DELETE_ROLE),
                ],
                'employee' => [
                    'view' => Auth::user()?->can(DefaultPermissions::VIEW_EMPLOYEE),
                    'create' => Auth::user()?->can(DefaultPermissions::CREATE_EMPLOYEE),
                    'edit' => Auth::user()?->can(DefaultPermissions::UPDATE_EMPLOYEE),
                    'delete' => Auth::user()?->can(DefaultPermissions::DELETE_EMPLOYEE),
                ],
            ]
        ]);
    }
}
