<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Support\DefaultPermissions;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmployeeController extends Controller
{
    public function __construct()
    {
        //admin
        $this->middleware('can:' . DefaultPermissions::VIEW_EMPLOYEE, ['only' => ['index', 'show']]);
        $this->middleware('can:' . DefaultPermissions::CREATE_EMPLOYEE, ['only' => ['create', 'store']]);
        $this->middleware('can:' . DefaultPermissions::UPDATE_EMPLOYEE, ['only' => ['edit', 'update']]);
        $this->middleware('can:' . DefaultPermissions::DELETE_EMPLOYEE, ['only' => ['destroy']]);
    }

    public function index()
    {
        $employees = Employee::all();

        return Inertia::render(
            'Admin/Employees',
            ['employees' => $employees]
        );
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
