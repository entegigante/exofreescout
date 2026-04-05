<?php

namespace Modules\ExoGreetings\Providers;

use Illuminate\Support\ServiceProvider;

define('EXO_GREETINGS_MODULE', 'exogreetings');

class ExoGreetingsServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        // 1. Add our greeting message to the sidebar of each mailbox
        \Eventy::addAction('mailbox.show.sidebar', function($mailbox) {
            echo '<div class="margin-top-20">';
            echo '  <div class="well well-sm" style="background-color: #e0f7fa; border-color: #b2ebf2;">';
            echo '      <strong>¡Hola desde Exosfera! 🚀</strong><br>';
            echo '      <small>Este es tu primer módulo funcional.</small>';
            echo '  </div>';
            echo '</div>';
        });

        // 2. Add an item to the global menu to test the module
        \Eventy::addFilter('layout.main.menu', function($menu) {
            $menu['exogreetings'] = [
                'title' => 'Exo Greetings',
                'url'   => route('exogreetings.index'),
                'icon'  => 'glyphicon glyphicon-globe',
                'order' => 1000,
            ];
            return $menu;
        });

        $this->registerViews();
        $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/exogreetings');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/exogreetings';
        }, \Config::get('view.paths')), [$sourcePath]), 'exogreetings');
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('exogreetings.php'),
        ], 'config');
        
        // No config created for now, but good to have the structure
    }
}
