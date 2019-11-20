<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    protected $table = 'designs';
    protected $fillable = [
        'article', 'subcategory_id', 'title', 'description', 'cost', 'count'
    ];


    public static function getSubCategory ($id){
        return [
            '1' => 'Визитки',
            '2' => 'Листовки',
            '3' => 'Буклеты',
            '4' => 'Брошюры',
            '5' => 'Грамоты/дипломы',
            '6' => 'Календари',
            '7' => 'Каталоги',
            '8' => 'Самокопирующиеся бланки',
            '9' => 'Меню',
            '10' => 'Портфолио',
            '11' => 'Разработка логотипа',
            '12' => 'Редизайн',
            '21' => 'Пригласительные',
            '22' => 'Бонбоньерки',
            '23' => 'Оформление шоколада',
        ];
    }
}
