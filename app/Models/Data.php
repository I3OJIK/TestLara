<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель Data
 * 
 * @property int $id Id записи
 * @property string $name Название
 * @property string $description  Описание записи (может быть NULL)
 * @property string $status Статус записи, может быть 'Allowed' или 'Prohibited'
 * 
 */
class Data extends Model
{
    use HasFactory;
    Public $timestamps = false;
    protected $fillable = ['name', 'status', 'description'];

    /**
     * Получить все записи у которых status = Allowed
     * 
     * @param mixed $query
     * 
     * @return void
     */
    #[Scope]
    protected function allowed(Builder $query):void
    {
        $query->where('status', 'Allowed');
    }
}
