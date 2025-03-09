<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 3
        // ];
        // UserModel::insert($data);

        // $data = [
        //     'username' => 'Pelanggan Pertama'
        // ];
        // UserModel::where('username', 'customer-1')->update($data);

        // $data= [
        //     'level_id' => 2,
        //     'username' => 'manager 3',
        //     'nama' => 'Manager 3',
        // 'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // $user = UserModel::find(1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id', 1)->first();
        // $user = UserModel::firstWhere('level_id', 1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::findOr(20, ['username', 'nama'], function(){
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);

        // $user = UserModel::findOrFail(1);
        // return view('user', ['data' => $user]);
        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id', 2)->count();
        // dd($user);

        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager tiga tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ]
        );
        $user->save();
        return view('user', ['data' => $user]);
    }
}
