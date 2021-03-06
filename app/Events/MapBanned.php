<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MapBanned implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $map;
    public $mapban;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($map, $mapban)
    {
        $this->map = $map;
        $this->mapban = $mapban;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ['map_ban_'.$this->mapban->id];
    }
}
