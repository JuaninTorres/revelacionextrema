<?php

use RevExtrema\Repositories\InformationRepo;


class NoticiasController extends BaseController {

    protected $informationRepo;

    public function __construct(InformationRepo $informationRepo)
    {
        $this->informationRepo = $informationRepo;
    }

    public function information($slug, $id)
    {
        // dd($slug);
        $noticia = $this->informationRepo->find($id);

        return View::make('noticias/detalle', compact('noticia'));
    }
} 