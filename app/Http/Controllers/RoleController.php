<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Support\DefaultPermissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:' . DefaultPermissions::VIEW_ROLE, ['only' => ['index', 'show']]);
        $this->middleware('can:' . DefaultPermissions::CREATE_ROLE, ['only' => ['create', 'store']]);
        $this->middleware('can:' . DefaultPermissions::UPDATE_ROLE, ['only' => ['edit', 'update']]);
        $this->middleware('can:' . DefaultPermissions::DELETE_ROLE, ['only' => ['destroy']]);
    }

    public function index()
    {
        $users = User::with('roles')->get();

        return Inertia::render(
            'Admin/Roles',
            ['users' => $users]
        );
    }

    public function show(Role $role)
    {
        return Inertia::render('Admin/Roles/ViewRole', ['role' => $role]);
    }

    public function edit(User $post)
    {
        // return Inertia::render('Admin/Posts/EditPost', ['post' => $post]);
    }

    // public function update(Request $request, User $post)
    // {
    //     // $request->validate([
    //     //     'title' => 'required|string|max:255',
    //     //     'content' => 'required',
    //     // ]);

    //     // $post->title = $request->title;
    //     // $post->content = $request->content;
    //     // $post->save();
    //     // sleep(1);

    //     // return redirect()->route('posts.index')->with('message', 'Post Updated Successfully');

    // }


    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'role' => ['required'],
        ])->validate();

        if ($request->has('id')) {
            User::find($request->input('id'))->update($request->all());
            return redirect()->back()
                    ->with('message', 'Post Updated Successfully.');
        }

    }

    public function destroy(User $role)
    {
        $role->delete();
        sleep(1);

        return redirect()->route('roles.index')->with('message', 'User Delete Successfully');
    }
}
