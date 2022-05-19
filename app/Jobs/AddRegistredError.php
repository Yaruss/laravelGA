<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Error;

class AddRegistredError implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $tries = 3;

    protected $name_id, $id1, $id2, $id3;

    public function __construct($name_id, $id1, $id2, $id3)
    {
        $this->name_id = $name_id;
        $this->id1 = $id1;
        $this->id2 = $id2;
        $this->id3 = $id3;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //*
        $error = Error::create ([
            'name_id'=>$this->name_id,
            'id1' => $this->id1,
            'id2' => $this->id2,
            'id3' => $this->id3
        ]);//*/
    }
}
