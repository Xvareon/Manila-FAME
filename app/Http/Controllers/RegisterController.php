<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Company;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request)
    {
        return DB::transaction(function () use ($request) {
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'email'      => $request->email,
                'username'   => $request->username,
                'password'   => Hash::make($request->password),
                'participation_type' => $request->participation_type,
            ]);

            $filePath = $request->hasFile('company.brochure')
                ? $request->file('company.brochure')->store('brochures', 'public')
                : null;

            Company::create([
                'user_id' => $user->id,
                'name' => $request->company['name'],
                'address_line' => $request->company['address_line'],
                'city' => $request->company['city'],
                'region' => $request->company['region'],
                'country' => $request->company['country'],
                'year_established' => $request->company['year_established'],
                'website' => $request->company['website'],
                'brochure_path' => $filePath,
            ]);

            return response()->json(['message' => 'Registration successful.'], 201);
        });
    }

    public function countries()
    {
        return response()->json([
            ['name' => 'Philippines'],
            ['name' => 'Japan'],
            ['name' => 'United States'],
            ['name' => 'United Kingdom'],
            ['name' => 'Australia']
        ]);
    }
}
