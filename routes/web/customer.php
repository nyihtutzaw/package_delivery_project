<?php 
    Route::name("customer.")->prefix("customer")->group(function(){
        Route::name("login")->get("login","Customer\CustomerLoginController@login");
        Route::name("login.action")->post("login","Customer\CustomerLoginController@loginAction");
        Route::name("logout")->get("logout","Customer\CustomerLoginController@logout");

        Route::name("register")->get("register","Customer\CustomerLoginController@register");
        Route::name("register.action")->post("register","Customer\CustomerLoginController@registerAction");

        Route::name("home.")->prefix("home")->group(function(){
            Route::name("index")->get("/","Customer\HomeController@index");
        });

        Route::name("order.")->prefix("order")->group(function(){
            Route::name("create")->get("/","Customer\OrderController@create");
            Route::name("store")->post("/store","Customer\OrderController@store");
        });

    });
?>