<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('appTextForm', 'components.form.text', ['name', 'value', 'attributes' => []]);
        Form::component('appTextarea', 'components.form.textarea', ['name', 'value', 'attributes' => []]);
        Form::component('appSubmit', 'components.form.submit', ['value' => 'Submit', 'attributes' => []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
