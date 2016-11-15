<?php

/**
 * Project's settings.
 */

$app['telegram.settings'] = [
    'bot_key' => getenv('TELEGRAM.BOT_KEY'),
    'bot_name' => getenv('TELEGRAM.BOT_NAME'),
    'webhook' => getenv('TELEGRAM.WEBHOOK'),
    'command_path' => __DIR__.'/../../src/SatanGoss/Command/',
];

$app['twitter.settings'] = [
    'oauth_access_token' => getenv('TWITTER.ACCESS_TOKEN'),
    'oauth_access_token_secret' => getenv('TWITTER.ACCESS_TOKEN_SECRET'),
    'consumer_key' => getenv('TWITTER.CONSUMER_KEY'),
    'consumer_secret' => getenv('TWITTER.CONSUMER_SECRET'),
];
