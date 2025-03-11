<?php

it('returns a 302 code for the dashboard (login redirect)', function () {
    $response = $this->get('/');

    $response->assertStatus(302);
});

it('returns a 404 error for a non-existant page', function () {
    $response = $this->get('/page-inexistante');

    $response->assertStatus(404);
});

it('redirects to the login page if not authenticated.', function () {
    $response = $this->get('/dashboard');

    $response->assertRedirect('/login');
});