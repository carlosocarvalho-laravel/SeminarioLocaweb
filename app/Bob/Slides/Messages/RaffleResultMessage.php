<?php
namespace App\Bob\Slides\Messages;

/**
 * Mensagem de resultado de enquete
 */
class RaffleResultMessage extends Message
{
    public $type = 'raffle-result';
    public $nickname;
    public $name;
    public $winner = false;

    public function __construct($winnerNickname, $winnerName)
    {
        $this->nickname = $winnerNickname;
        $this->name = $winnerName;
    }
}