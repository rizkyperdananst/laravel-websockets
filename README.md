<p>Steps</p>
<ul>
<li>composer require beyondcode/laravel-websockets -W</li>
<li>php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"</li>
<li>php artisan migrate</li>
<li>php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"</li>
<li>composer require pusher/pusher-php-server</li>
<li>BROADCAST_DRIVER=pusher</li>
<li>set up your puhser</li>
<li>uncomment service provider broadcasting in app.php</li>
</ul>