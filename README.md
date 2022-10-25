## About Laravel Websockets and Laravel Echo

This project is related to the Laravel websockets and Laravel echo. Redis used to broadcast events.

## Steps to use project

1. first you need to setup redis connection. For this i used a redis container. you can run this command to create a redis command using docker.

```
docker run -d --name redis-stack-server -p 6379:6379 redis/redis-stack-server:latest
```

2. Then you need to compile js files

```
npm install
```

```
npm run dev
```

3. Then start laravel echo server

```
laravel-echo-server start
```

4. set .env file variables

```
BROADCAST_DRIVER=redis
QUEUE_CONNECTION=redis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
LARAVEL_ECHO_PORT=6001
```

5. you can run this project using artisan command

```
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
