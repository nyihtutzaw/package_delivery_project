<?php 
    Route::name("dashboard.")->prefix("dashboard")->group(function(){
        Route::get("login","Dashboard\AdminLoginController@index");
        Route::name("login")->post("login","Dashboard\AdminLoginController@login");

        Route::name("logout")->get("logout","Dashboard\AdminLoginController@logout");

        Route::name("home.")->prefix("home")->group(function(){
            Route::name("index")->get("/","Dashboard\HomeController@index");
        });

        Route::name("township.")->prefix("township")->group(function(){
            Route::name("index")->get("/","Dashboard\TownshipController@index");
            Route::name("store")->post("/store","Dashboard\TownshipController@store");
            Route::name("delete")->get("/delete","Dashboard\TownshipController@delete");
            Route::name("edit")->get("/edit","Dashboard\TownshipController@edit");
            Route::name("update")->post("/update","Dashboard\TownshipController@update");
        });

        Route::name("deliveryman.")->prefix("deliveryman")->group(function(){
            Route::name("index")->get("/","Dashboard\DeliveryManController@index");
            Route::name("store")->post("/store","Dashboard\DeliveryManController@store");
            Route::name("delete")->get("/delete","Dashboard\DeliveryManController@delete");
            Route::name("edit")->get("/edit","Dashboard\DeliveryManController@edit");
            Route::name("update")->post("/update","Dashboard\DeliveryManController@update");
        });

    });
    
?>