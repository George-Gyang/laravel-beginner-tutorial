<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Validation\Rules\In;

class Product
{
    public static function all(): array
    {
        return
            [
                [
                    "id" => 1,
                    "name" => "computer",
                    "price" => "$500",
                    "availability" => true,
                ],
                [
                    "id" => 2,
                    "name" => "Wrist Watches",
                    "price" => "$3000",
                    "availability" => false,
                ],
                [
                    "id" => 3,
                    "name" => "Jourals",
                    "price" => "$50",
                    "availability" => false,
                ],
                [
                    "id" => 4,
                    "name" => "computer",
                    "price" => "$1500",
                    "availability" => true,
                ],
                [
                    "id" => 5,
                    "name" => "Phones",
                    "price" => "$3300",
                    "availability" => true,
                ],
                [
                    "id" => 6,
                    "name" => "Headphones",
                    "price" => "$1000",
                    "availability" => true,
                ],
            ];
    }
    public static function find(int $id): array
    {
        $product = Arr::first(static::all(), fn ($product) => $product['id'] == $id);
        if (!$product) {
            abort(404);
        }
        return $product;
    }
};
