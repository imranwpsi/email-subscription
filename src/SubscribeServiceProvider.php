<?php

namespace HossainVendor\EmailSubscription;

use Illuminate\Support\ServiceProvider;
class SubscribeServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'email_subscription');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }
    public function register()
    {
    }
}
?>
