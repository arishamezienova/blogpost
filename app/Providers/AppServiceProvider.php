<?php

namespace App\Providers;

use App\Models\BlogModel;
use App\Policies\BlogPolicy;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        BlogModel::class => BlogPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();

        //registreer je policy
        Gate::policy(BlogModel::class, BlogPolicy::class);
    }
}
