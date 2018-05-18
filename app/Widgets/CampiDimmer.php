<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use App\Campus;

class CampiDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Campus::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-company',
            'title'  => "{$count} Campi",
            'text'   => "{$count} campi estão cadastrados no sistema.",
            'button' => [
                'text' => 'Ver todos os campi',
                'link' => route('voyager.campus.index'),
            ],
            'image' => 'campidimmer.jpg',
        ]));
    }
}
