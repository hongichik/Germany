<?php

namespace App\Http\Controllers;

use App\Table;
use App\Service;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Repositories\FileRepositiory;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    /**
     * index home
     *
     * @return void
     */
    protected $file;
    public function __construct(FileRepositiory $fileRepositiory)
    {
        $this->file = $fileRepositiory;
    }
    public function index()
    {
        $question = Question::all();
        $Service = Service::all();
        $table = Table::orderBy('id', 'DESC')->get();
        return view('welcome',
        [
            'questions' =>$question,
            'tables'    =>$table,
            'services'  =>$Service
        ]);
    }

    public function show_pdf($pdf)
    {
        $url_pdf = 'storage/' . $pdf;
        return $this->file->show_pdf($url_pdf);
    }
}
