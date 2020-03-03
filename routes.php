<?php
Route::set('index.php',function(){
    HomeController::CreateView('HomeView');
});

Route::set('about-us',function(){
    AboutUsController::CreateView('AboutUsView');
});

?>