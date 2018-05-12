<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use App\Candidato;

class CandidatosDimmer extends AbstractWidget
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
        $count = Candidato::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-group',
            'title'  => "{$count} Candidatos",
            'text'   => "{$count} candidatos realizaram as provas de 2009 a 2016 e estão cadastrados no sistema.",
            'button' => [
                'text' => 'Ver todos os candidatos',
                'link' => route('voyager.candidatos.index'),
            ],
            'image' => 'candidatosdimmer.jpg',
        ]));
    }
}
