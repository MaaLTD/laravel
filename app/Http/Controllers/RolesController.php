<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RolesController extends Controller
{
    public function create(Request $request)
    {
        $name = $request->input('name');

        Role::create(['name' => $name]);
        return response()->json(['role' => $name]);
    }

    public function update(Request $request, Role $role)
    {
        $role->update($request->only('name'));

        return response()->json([$role]);
    }

    public function delete(Role $role)
    {
        $role->delete();
    }

    public function index()
    {
        return Role::all()->first();
//        return Role::find($role_id);
//        Role::where('id', $role_id)->first();
//        dd(Role::whereNotNull('created_at')->orWhere('id', '>', $role_id)->get());
//        dd(Role::whereNotNull('created_at')->orWhere('id', '>', $role_id)->get());
//        return Role::where('created_at', '!=', null)->get();
//        dd(Role::get()->sortBy('name'));

//        return response()->json(Role::get());

//        $role = Role::find($role_id);
//        $role->name = 'Manager';
//        $role->save();

//        $role = Role::find($role_id)->update([
//            'name' => 'M',
//        ]);
//
//        return Role::find($role_id);

//        Role::find($role_id)->delete();

        return response()->json(Role::get());
    }

    public function show(Role $role)
    {
//        $role = Role::find($role_id);

//        if($role === null) {
//            throw new NotFoundHttpException('This role doesn\'t have');
//        }

        return response()->json(['role' => $role]);
    }

    public function users(Role $role)
    {
//        return $role->users()->get() // used queryBuilder;
//        return $role->users; // used collections
        dump('room_'. Str::random(10));
        return $role->users->map->name;
    }
}
