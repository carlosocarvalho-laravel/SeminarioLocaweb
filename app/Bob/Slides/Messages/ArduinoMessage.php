<?php
namespace App\Bob\Slides\Messages;

/**
 * Mensagem de questão
 */
class ArduinoMessage extends Message
{
    public $type = 'arduino';
    public $command;

    public function __construct($data, $connection)
    {
        $this->command = $data->command;
    }
}