<?php

it('can show the welcome page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
