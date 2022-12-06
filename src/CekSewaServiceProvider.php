<?php
namespace kel6pbpu\ceksewa;

use Illuminate\Support\ServiceProvider;
use kel6pbpu\ceksewa\Director\Director;
use kel6pbpu\ceksewa\Console\MakeBuilderCommand;
use kel6pbpu\ceksewa\Console\MakeConcreteBuilderCommand;

class CekSewaServiceProvider extends ServiceProvider
{
  public function register()
  {
  //   $this->app->bind('director', function($app) {
  //     return new Director($type);
  // });
  }

  public function boot()
  {
    $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'home');
    $this->commands([MakeBuilderCommand::class]);
    $this->commands([MakeConcreteBuilderCommand::class]);
    $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
  
    if ($this->app->runningInConsole()) {
      $this->publishes([
        __DIR__.'/../resources/views' => resource_path('views'),
      ], 'views');

      $this->publishes([
        __DIR__.'/../resources/assets' => public_path('ceksewa'),
      ], 'assets');

      $this->publishes([
        __DIR__.'/../src' => app_path('ceksewa'),
      ], 'src');
    }
  }
}
?>