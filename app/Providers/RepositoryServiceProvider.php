<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repository\EloquentRepositoryInterface; 
use App\Repository\UserRepositoryInterface; 
use App\Repository\OrderRepositoryInterface; 
use App\Repository\ContactRepositoryInterface; 
use App\Repository\TicketRepositoryInterface; 

use App\Repository\Eloquent\BaseRepository; 
use App\Repository\Eloquent\UserRepository; 
use App\Repository\Eloquent\OrderRepository; 
use App\Repository\Eloquent\ContactRepository; 
use App\Repository\Eloquent\TicketRepository; 

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->bind(TicketRepositoryInterface::class, TicketRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
