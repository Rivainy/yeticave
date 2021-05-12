<?php
// ставки пользователей, которыми надо заполнить таблицу
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

$user = [
    'is_auth'        => (bool) rand(0, 1),
    'user_name'      => 'Константин',
    'user_avatar'    => 'img/user.jpg',
];

$categories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];

$adverts = [
    0 => [
        'name'      => '2014 Rossignol District Snowboard',
        'catigory'  => 'Доски и лыжи',
        'price'     => '10999',
        'img_url'   => 'img/lot-1.jpg'
    ],
    1 => [
        'name'      => 'DC Ply Mens 2016/2017 Snowboard',
        'catigory'  => 'Доски и лыжи',
        'price'     => '159999',
        'img_url'   => 'img/lot-2.jpg'
    ],
    2 => [
        'name'      => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'catigory'  => 'Крепления',
        'price'     => '8000',
        'img_url'   => 'img/lot-3.jpg'
    ],
    3 => [
        'name'      => 'Ботинки для сноуборда DC Mutiny Charocal',
        'catigory'  => 'Ботинки',
        'price'     => '10999',
        'img_url'   => 'img/lot-4.jpg'
    ],
    4 => [
        'name'      => 'Куртка для сноуборда DC Mutiny Charocal',
        'catigory'  => 'Одежда',
        'price'     => '7500',
        'img_url'   => 'img/lot-5.jpg'
    ],
    5 => [
        'name'      => 'Маска Oakley Canopy',
        'catigory'  => 'Разное',
        'price'     => '5400',
        'img_url'   => 'img/lot-6.jpg'
    ]
];