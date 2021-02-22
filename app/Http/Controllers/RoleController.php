<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Role::create(['name' => 'producer']);
        // Role::create(['name' => 'personnel']);
        // Permission::create(['name' => 'add product']);
        // Permission::create(['name' => 'edit product']);
        // Permission::create(['name' => 'add user']);
        // Permission::create(['name' => 'edit user']);
        // Permission::create(['name' => 'add order']);
        // Permission::create(['name' => 'edit order']);
        // Permission::create(['name' => 'dashboard']);
        // $role->givePermissionTo($permission);
        // $user = User::find(2);
        // $user->givePermissionTo('dashboard');
        // // $user->assignRole('producer');
        // $role = Role::findByName('producer');
        // $role->givePermissionTo('add product');
        // $role->givePermissionTo('edit product');
        // $role->givePermissionTo('dashboard');
        // $user->assignRole('producer');

        // $user = User::find(19);
        // $user->givePermissionTo('dashboard');
        // $role = Role::findByName('personnel');
        // $role->givePermissionTo('dashboard');
        // $role->givePermissionTo('add user');
        // $role->givePermissionTo('edit user');
        // $role->givePermissionTo('add order');
        // $role->givePermissionTo('edit order');
        // $user->assignRole('personnel');

        // $user = User::find(20);
        // $user->givePermissionTo('dashboard');
        // $role = Role::findByName('admin');
        // $role->givePermissionTo('dashboard');
        // $role->givePermissionTo('add product');
        // $role->givePermissionTo('edit product');
        // $role->givePermissionTo('add user');
        // $role->givePermissionTo('edit user');
        // $role->givePermissionTo('add order');
        // $role->givePermissionTo('edit order');
        // $user->assignRole('admin');

        return redirect()->route('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
