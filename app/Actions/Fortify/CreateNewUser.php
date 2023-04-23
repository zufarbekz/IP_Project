<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'alpha', 'string', 'min:5'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'phoneNumber' => ['required', 'regex:/9989(0|3|4|9)(\d){7}/', 'string'],
            'postalCode' => ['required', 'regex:/(\d){7}/', 'string'],
            'cityName' => ['required', 'alpha', 'string', 'max:255',],
            'dateOfBirth' => ['required', 'regex:/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/', 'string'],
            'passportNumber' => ['required', 'regex:/a[ab](\d){7}/', 'string'],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'phoneNumber' => $input['phoneNumber'],
            'postalCode' => $input['postalCode'],
            'cityName' => $input['cityName'],
            'dateOfBirth' => $input['dateOfBirth'],
            'passportNumber' => $input['passportNumber'],
        ]);
    }
}
