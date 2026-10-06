<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return 'memberController@index';
    }

    public function create()
    {
        return 'memberController@create';
    }

    public function store(Request $request)
    {
        return 'memberController@store';
    }

    public function edit(string $id)
    {
        return "memberController@edit, id: {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "memberController@update, id: {$id}";
    }

    public function destroy(string $id)
    {
        return "memberController@destroy, id: {$id}";
    }
}

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return 'MemberController@index';
    }

    public function create()
    {
        return 'MemberController@create';
    }

    public function store(Request $request)
    {
        return 'MemberController@store';
    }

    public function show(string $id)
    {
        return "MemberController@show, id: {$id}";
    }

    public function edit(string $id)
    {
        return "MemberController@edit, id: {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "MemberController@update, id: {$id}";
    }

    public function destroy(string $id)
    {
        return "MemberController@destroy, id: {$id}";
    }
}