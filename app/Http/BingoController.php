<?php

namespace App\Http;

use App\Core\Support\Controller;
use App\Repositories\BingoRepository;
use App\Service\Bingo;

class BingoController extends Controller
{
    private $bingo;
    private $bingoRepository;

    public function __construct(Bingo $bingo, BingoRepository $bingoRepository)
    {
        $this->bingo = $bingo;
        $this->bingoRepository = $bingoRepository;
    }

    public function index()
    {
        return response()->json([
            'number' => $this->bingo->addNumber(),
            'numbers' => array_flatten($this->bingoRepository->all(['numero'])->toArray())
        ]);
    }

    public function delete()
    {
        $this->bingo->clearTable();

        return response()->json([
            'message' => 'Jogo Zerado!'
        ]);
    }
}
