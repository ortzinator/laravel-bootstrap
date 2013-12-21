<?php

// The Posts Bindings
App::bind('Davzie\LaravelBootstrap\Posts\PostsInterface', 'Davzie\LaravelBootstrap\Posts\PostsRepository' );

// The Posts Bindings
App::bind('Davzie\LaravelBootstrap\Accounts\UserInterface', 'Davzie\LaravelBootstrap\Accounts\UserRepository');

// The Settings Bindings
App::bind('Davzie\LaravelBootstrap\Settings\SettingsInterface', 'Davzie\LaravelBootstrap\Settings\SettingsRepository');

// The Blocks Bindings
App::bind('Davzie\LaravelBootstrap\Blocks\BlocksInterface', 'Davzie\LaravelBootstrap\Blocks\BlocksRepository');

// The Tags Bindings
App::bind('Davzie\LaravelBootstrap\Tags\TagsInterface', 'Davzie\LaravelBootstrap\Tags\TagsRepository');

// The Uploads Bindings
App::bind('Davzie\LaravelBootstrap\Uploads\UploadsInterface', 'Davzie\LaravelBootstrap\Uploads\UploadsRepository');

// The Uploads Bindings
App::bind('Davzie\LaravelBootstrap\Galleries\GalleriesInterface', 'Davzie\LaravelBootstrap\Galleries\GalleriesRepository');
