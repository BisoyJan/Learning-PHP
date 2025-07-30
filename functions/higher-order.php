<?php

$users = [
    ['id' => 1, 'name' => 'Alice', 'role' => 'admin'],
    ['id' => 2, 'name' => 'Bob', 'role' => 'user'],
    ['id' => 3, 'name' => 'Charlie', 'role' => 'admin'],
];

function createFilter($key, $value)
{
    return fn($item) => $item[$key] === $value;
}

$isAdmin = createFilter('role', 'admin');
$isBob = createFilter('name', 'Bob');
$admin = array_filter($users, $isAdmin);
var_dump($admin);
var_dump(array_filter($users, $isBob));
