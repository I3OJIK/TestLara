<?php

namespace App\Services;

use App\Interfaces\DataGeneratorInterface;
use App\Models\Data;

class DataGeneratorService implements DataGeneratorInterface
{
    /**
     * Генерация данных и запись в БД
     *
     * @param int $count Количество записей
     * @return bool Успешно выполнено или нет
     */
    public function generate(int $count = 1000): bool
    {
        $data = Data::factory()->count($count)->make()->toArray();
        return Data::insert($data);
    }
}