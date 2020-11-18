<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function __construct()
    {
        // TODO:
    }

    public function getUsers()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Mario',
            ],[
                'id' => 2,
                'name' => 'Luigi',
            ]
        ];

        return response()->json($data);
    }

    public function update()
    {
        $data = [
            'status' => 'success',
        ];

        return response()->json($data);
    }

    public function updateTwo()
    {
        $data = [
            'status' => 'success',
        ];

        return response()->json($data);
    }

    public function updateThree()
    {
        $data = [
            'status' => 'success',
        ];

        return response()->json($data);
    }

    public function updateFour()
    {
        $data = [
            'status' => 'success',
        ];

        return response()->json($data);
    }

    public function updateFive()
    {
        $data = [
            'status' => 'success',
        ];

        return response()->json($data);
    }
}
