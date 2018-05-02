<?php
namespace Core;

Router::connect('PiePHP', ['controller' => 'user', 'action' => 'register']);
Router::connect('PiePHP/user/add', ['controller' => 'user', 'action' => 'add']);
Router::connect('PiePHP/user', ['controller' => 'user', 'action' => 'index']);
Router::connect('PiePHP/user/index', ['controller' => 'User', 'action' => 'index']);
Router::connect('PiePHP/user/add', ['controller' => 'User', 'action' => 'add']);
Router::connect('PiePHP/app/check', ['controller' => 'app', 'action' => 'check']);
Router::connect('PiePHP/user/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('PiePHP/user/show', ['controller' => 'user', 'action' => 'show']);
Router::connect('PiePHP/user/login', ['controller' => 'user', 'action' => 'login']);
Router::connect('PiePHP/user/logout', ['controller' => 'user', 'action' => 'logout']);
Router::connect('PiePHP/movie/allmovies', ['controller' => 'movie', 'action' => 'allmovies']);
Router::connect('PiePHP/movie/info', ['controller' => 'movie', 'action' => 'info']);
Router::connect('PiePHP/movie/add', ['controller' => 'movie', 'action' => 'add']);

