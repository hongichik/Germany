<?php 
namespace App\Repositories;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;


class FileRepositiory extends Controller
{
    public function show_pdf(string $name)
    {
        $file = public_path().'/'.$name;
        try{
            $file = File::get($file);
            $response = Response::make($file,200);
            $response->header('Content-Type', 'application/pdf');
            return $response;
        }
        catch (\Exception $e){
            return redirect()->route('home');
        }

    }
}
