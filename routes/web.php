<?php

Route::get('/.well-known/webfinger', function () {
    return response([
        'subject' => 'acct:david@ap1.davidpeach.me',
        'links' => [
            [
                'rel' => 'self',
                'type' => 'application/activity+json',
                'href' => 'https://ap1.davidpeach.me/david',
            ],
        ],
    ])->withHeaders([
        'Content-Type' => 'application/ld+json; profile="https://www.w3.org/ns/activitystreams',
    ]);

});

Route::get('/david', function () {
    return response([
        '@context' => [
            'https://www.w3.org/ns/activitystreams',
            'https://w3id.org/security/v1',
        ],
        'type' => 'Person',
        'id' => 'https://ap1.davidpeach.me/david',
        'following' => 'https://ap1.davidpeach.me/david/following',
        'followers' => 'https://ap1.davidpeach.me/david/followers',
        'inbox' => 'https://ap1.davidpeach.me/david/inbox',
        'outbox' => 'https://ap1.davidpeach.me/david/outbox',
        'featured' => 'https://ap1.davidpeach.me/david/collections/featured',
        'featuredTags' => 'https://ap1.davidpeach.me/david/collections/tags',
        'endpoints' => [
            'sharedInbox' => 'https://ap1.davidpeach.me/inbox',
        ],
        'name' => 'David Peach',
        'summary' => "<p>A bio goes here</p>\n",
        'url' => 'https://ap1.davidpeach.me/david',
        'manuallyApprovesFollowers' => false,
        'discoverable' => true,

        'preferredUsername' => 'david',
        'published' => '2020-01-01T00:00:00Z',

        // 'inbox' => 'https://ap1.davidpeach.me/inbox',
        // 'outbox' => 'https://ap1.davidpeach.me/outbox',

        'publicKey' => [
            'id' => 'https://ap1.davidpeach.me/david#main-key',
            'owner' => 'https://ap1.davidpeach.me/david',
            'publicKeyPem' => "-----BEGIN PUBLIC KEY-----\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxKW+hzgm/knxT7DHI0sL\nzfdnZiKX2WXRBRwEJCdQ7p6B4QuA5JB5MqVTnT8WA4S3m0NMuNsCBHV7kNcFW1iF\ntuVqj/xZeDiwVg9SYwQs79hfC0OPiJnS5a/YXEqaNQg6u/os5K3O0+9FiYCvi3lf\nb8bb05yoNh0bEL7MM2OuZVaLVkUkf2wugOT1it+NmBzdAMb6CUG1WkLJllnFDyoq\nEUmoQmIdUGZ83GlD9CQCv7Ne3IjXqxOw/CPmtUaDM4naauGKGeD0MHoAb++aFrig\nThOURn7JaAsIxd3dMbLibbCmSfpnMwCRNG7X4uZrkqxPNIjM+EIcgcNRxng9+JWP\nYwIDAQAB\n-----END PUBLIC KEY-----",
        ],
    ])->withHeaders([
        'Content-Type' => 'application/ld+json; profile="https://www.w3.org/ns/activitystreams',
    ]);
});
