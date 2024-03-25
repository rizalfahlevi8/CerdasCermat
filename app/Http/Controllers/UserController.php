<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Peserta;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all users
        $users = User::all();

        // If Admin and Peserta are separate models
        $admins = Admin::all();
        $pesertas = Peserta::all();

        // If Admin and Peserta are roles in the User model, you might fetch them like this
        // $admins = User::where('role', 'admin')->get();
        // $pesertas = User::where('role', 'peserta')->get();

        // Pass the data to the view (assuming you have the appropriate views set up)
        return view('pages.user', [
            'users' => $users,
            'admins' => $admins,
            'pesertas' => $pesertas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
