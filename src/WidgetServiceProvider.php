<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 03.05.2019
 * Time: 21:46
 */

namespace peroln\Widgets;
use Illuminate\Support\ServiceProvider;
use App;
use Blade;

class WidgetServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->publishes([__DIR__ . '/../config/' => config_path() . '/']);
        $this->publishes([__DIR__ . '/../app/' => app_path() . '/']);
        Blade::directive('widget', function($name){
          return "<?php echo app('widget')->show($name); ?>";
        });
        $this->loadViewsFrom(app_path() . '/Widgets/views', 'Widgets');
    }

    public function register(){
        App::singleton('widget', function(){
            return new \Peroln\Widgets\Widget();
        });
    }

}