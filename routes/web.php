<?php

Route::get('/.well-known/webfinger', function () {
    return [
        'subject' => 'acct:david@feature-activitypub.davidpeach.me',
        'links' => [
            [
                'rel' => 'self',
                'type' => 'application/activity+json',
                'href' => 'https://feature-activitypub.davidpeach.me/actor',
            ],
        ],
    ];

});
