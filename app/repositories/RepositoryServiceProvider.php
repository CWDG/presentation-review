<?php

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    public function register() {
        $prefix = 'Database';
        $this->app->bind('CommentRepositoryInterface', $prefix.'CommentRepository');
        $this->app->bind('PresentationRepositoryInterface', $prefix.'PresentationRepository');
        $this->app->bind('ReviewRepositoryInterface', $prefix.'ReviewRepository');
    }

}