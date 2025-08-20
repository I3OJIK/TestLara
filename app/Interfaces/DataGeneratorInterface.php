<?php

namespace App\Interfaces;

interface DataGeneratorInterface
{
    /**
     * Генерация данных
     *
     * @param int $count Количество записей
     * @return bool Успешно выполнено или нет
     */
    public function generate(int $count = 1000): bool;
}
