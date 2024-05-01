<?php

Route::get('/.well-known/webfinger', function () {
    return [
        'subject' => 'acct:david@feature-activitypub.davidpeach.me',
        'links' => [
            [
                'rel' => 'self',
                'type' => 'application/activity+json',
                'href' => 'https://feature-activitypub.davidpeach.me/david',
            ],
        ],
    ];

});

Route::get('/david', function () {
    return [
        '@context' => [
            'https://www.w3.org/ns/activitystreams',
            'https://w3id.org/security/v1',
        ],
        'type' => 'Person',
        'id' => 'https://feature-activitypub.davidpeach.me/david',
        'following' => 'https://feature-activitypub.davidpeach.me/david/following',
        'followers' => 'https://feature-activitypub.davidpeach.me/david/followers',
        'inbox' => 'https://feature-activitypub.davidpeach.me/david/inbox',
        'outbox' => 'https://feature-activitypub.davidpeach.me/david/outbox',
        'featured' => 'https://feature-activitypub.davidpeach.me/david/collections/featured',
        'featuredTags' => 'https://feature-activitypub.davidpeach.me/david/collections/tags',
        'endpoints' => [
            'sharedInbox' => 'https://feature-activitypub.davidpeach.me/inbox',
        ],
        'name' => 'david peach dot me',
        'summary' => "<p>A bio goes here</p>\n",
        'url' => 'https://feature-activitypub.davidpeach.me/david',
        'manuallyApprovesFollowers' => false,
        'discoverable' => true,

        // 'preferredUsername' => 'david',
        // 'inbox' => 'https://feature-activitypub.davidpeach.me/inbox',
        // 'outbox' => 'https://feature-activitypub.davidpeach.me/outbox',

        'publicKey' => [
            'id' => 'https://feature-activitypub.davidpeach.me/david#main-key',
            'owner' => 'https://feature-activitypub.davidpeach.me/david',
            'publicKeyPem' => "-----BEGIN PUBLIC KEY-----\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxKW+hzgm/knxT7DHI0sL\nzfdnZiKX2WXRBRwEJCdQ7p6B4QuA5JB5MqVTnT8WA4S3m0NMuNsCBHV7kNcFW1iF\ntuVqj/xZeDiwVg9SYwQs79hfC0OPiJnS5a/YXEqaNQg6u/os5K3O0+9FiYCvi3lf\nb8bb05yoNh0bEL7MM2OuZVaLVkUkf2wugOT1it+NmBzdAMb6CUG1WkLJllnFDyoq\nEUmoQmIdUGZ83GlD9CQCv7Ne3IjXqxOw/CPmtUaDM4naauGKGeD0MHoAb++aFrig\nThOURn7JaAsIxd3dMbLibbCmSfpnMwCRNG7X4uZrkqxPNIjM+EIcgcNRxng9+JWP\nYwIDAQAB\n-----END PUBLIC KEY-----",
        ],
    ];
});
