<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

it('can create a user and an ID is automatically assigned to them', function () {
    $user = User::factory()->create();

    expect($user)->toBeInstanceOf(User::class)
        ->and($user->id)->not->toBeNull();
});

it('checks that the username is correct on registration', function() {
    $user = User::factory()->create([
        'name' => 'Kévin',
        'email' => 'test@test.test',
    ]);

    expect($user->name)->toBe("Kévin");
});

it('checks that the password is hashed', function() {
    $pwd = 'test';
    $hash_pwd = Hash::make($pwd);
    
    $user = User::factory()->create([
        'password' => $hash_pwd,
    ]);

    expect($user->password)->not->toBe($pwd);
    expect($user->password)->toBe($hash_pwd);
});

it('checks the username can be changed', function(){
    $user = User::factory()->create();

    $user->name = "toto";
    $user->save();

    $userFromDatabase = User::where('id', $user->id)->first();

    expect($userFromDatabase->name)->toBe("toto");
});