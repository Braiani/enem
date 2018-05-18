<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use App\Edicao;

class EdicoesDimmer extends AbstractWidget
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
        $count = Edicao::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-settings',
            'title'  => "{$count} Edições de ENEM",
            'text'   => "{$count} edições de ENEM estão cadastrados no sistema.",
            'button' => [
                'text' => 'Ver todas as edições',
                'link' => route('voyager.edicoes.index'),
            ],
            'image' => 'edicoesdimmer.jpg',
        ]));
    }
}
