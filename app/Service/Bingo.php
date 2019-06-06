<?php

namespace App\Service;

use App\Repositories\BingoRepository;

class Bingo
{
    private $bingoRepository;

    public function __construct()
    {
        $this->bingoRepository = new BingoRepository();
    }

    public function addNumber()
    {
        $numbers = array_flatten($this->bingoRepository->all(['numero'])->toArray());
        $number = null;

        if (count($numbers) < 75) {
            do {
                $number = rand(1, 75);
            } while (in_array($number, $numbers));

            $this->bingoRepository->create([
                'numero' => $number
            ]);
        }

        return $number;
    }

    public function clearTable()
    {
        $this->bingoRepository->truncate();
    }
}
