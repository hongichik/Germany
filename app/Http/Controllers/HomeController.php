<?php

namespace App\Http\Controllers;

use App\Table;
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
        $table = Table::orderBy('id', 'DESC')->get();
        return view('welcome',
        [
            'questions' =>$question,
            'tables'    =>$table
        ]);
    }

    public function show_pdf()
    {
        $url_pdf = json_decode(setting('site.file_pdf_home'));
        $url_pdf = 'storage/' . $url_pdf[0]->download_link;
        return $this->file->show_pdf($url_pdf);
    }
}
