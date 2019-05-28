# Blackjack

### Getting Started
---
It is highly recommended that you use a php development environment that works out of the box with Laravel. If you are on Mac your best option is probably [Laravel Valet](https://github.com/laravel/valet). If you are using a Windows Environment I would recommend either setting a PHP Development Environment using the WSL or Docker. I am personally using Docker with [DevilBox](https://github.com/cytopia/devilbox) which is good for most web development.

- Clone Repo
- Run ```cp .env.example .env```
- Setup .env file's database connections
- Run ```composer install```
- Run ```yarn``` or ```npm install```
- Run ```php artisan key:generate```
- Run ```php artisan migrate```
- Run ```yarn dev``` or ```npm run dev``` to ensure the you are using the latest frontend build.
- Run ```php artisan:websockets serve```

You should now be able to access the application in your browser using whatever webserver environment you have setup. If you are using a VM or Docker ensure that port 6001 is open as that is what the WebSocket runs on by default. This can be changed in /config/broadcasting.php under ```connections > pusher > options ``` you can change the ```port``` to another something custom if you choose.

---

This project is brand new and will be broken and filled with bugs. If you are pulling this repo it is assumed you doing so out of interest or to assist in further development on the project.