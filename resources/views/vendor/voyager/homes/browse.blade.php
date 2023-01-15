@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing') . ' ' . $dataType->getTranslatedAttribute('display_name_plural'))

@section('page_header')
    <div class="container-fluid">
        <h3 class="text-center mt-5">Edit homepage</h3>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        <form action="" method="post" class="d-flex flex-column mt-4" enctype="multipart/form-data">
            <div class="d-flex flex-column mt-4 mb-3">
                <label for="" class="m-auto">Image header</label>
                <div class="d-flex justify-center">
                    <img style="width: 200px;" class=""
                        src="https://perspective.imgix.net/63bdd43b1395840058ffdad9.png?h=40&dpr=2&q=75&auto=format,compress"
                        alt="">
                    <input type="file" id="avatar" name="avatar" class="" style="width: 300px;"
                        accept="image/png, image/jpeg">
                </div>
            </div>
            <div class="d-flex flex-column mt-4 mb-3">
                <label for="" class="m-auto">Home page title</label>
                <input type="text" value="oke" class="m-auto " placeholder="Home page title">
            </div>
            <div class="d-flex flex-column mt-4 mb-3">
                <label for="" class="m-auto">description</label>
                <input type="text" value="oke" class="m-auto " placeholder="description">
            </div>
            <div class="d-flex justify-center">
                <div class="d-flex flex-column mt-4 mb-3 input_f">
                    <label for="" class="m-auto">description link (show)</label>
                    <input type="text" value="oke" class="m-auto " placeholder="description link (show)">
                </div>
                <div class="d-flex flex-column mt-4 mb-3 input_f">
                    <label for="" class="m-auto">description link (path)</label>
                    <input type="text" value="oke" class="m-auto " placeholder="description link (path)">
                </div>
            </div>
            <div class="d-flex flex-column mt-4 mb-3">
                <label for="" class="m-auto">Title button show pdf</label>
                <input type="text" value="oke" class="m-auto " placeholder="description">
            </div>
            <div class="d-flex flex-column mt-4 mb-3">
                <label for="" class="m-auto">Image pdf</label>
                <div class="d-flex justify-center">
                    <img style="width: 400px;" class=""
                        src="https://perspective.imgix.net/63bdd9957389c8008f71f1c4.png?ixlib=js-2.3.2&q=80&fit=crop&auto=format%2Ccompress&ar=1.3333333333333333&w=798"
                        alt="">
                    <input type="file" id="avatar" name="avatar" class="" style="width: 300px; margin: auto 0"
                        accept="image/png, image/jpeg">
                </div>
            </div>
            <div class="d-flex flex-column mt-4 mb-3">
                <label for="" class="m-auto">Title registration form</label>
                <input type="text" value="oke" class="m-auto " placeholder="description">
            </div>
            <div class="d-flex" style="flex-wrap: wrap">
                <div class="d-flex justify-center w-100">
                    <div class="d-flex flex-column mt-4 mb-3 input_f">
                        <label for="" class="m-auto">Title registration form</label>
                        <input type="text" value="oke" class="m-auto " placeholder="description link (show)">
                    </div>
                    <div class="d-flex flex-column mt-4 mb-3 input_f">
                        <label for="" class="m-auto">description link (path)</label>
                        <input type="text" value="oke" class="m-auto " placeholder="description link (path)">
                    </div>
                </div>
                <div class="d-flex justify-center w-100">
                    <div class="d-flex flex-column mt-4 mb-3 input_f">
                        <label for="" class="m-auto">description link (show)</label>
                        <input type="text" value="oke" class="m-auto " placeholder="description link (show)">
                    </div>
                    <div class="d-flex flex-column mt-4 mb-3 input_f">
                        <label for="" class="m-auto">description link (path)</label>
                        <input type="text" value="oke" class="m-auto " placeholder="description link (path)">
                    </div>
                </div>
            </div>
            <input type="submit" value="Lưu chỉnh sửa" class="m-auto">
        </form>
    </div>


@stop

@section('css')
    <style>
        .page-content {
            font-size: 17px;
        }

        .d-flex {
            display: flex;
        }

        .flex-column {
            flex-direction: column;
        }

        .m-auto {
            margin: auto;
        }

        .mt-1 {
            margin-top: 10px;
        }

        .mt-2 {
            margin-top: 15px;
        }

        .mt-3 {
            margin-top: 20px;
        }

        .mt-4 {
            margin-top: 25px;
        }

        .mb-1 {
            margin-bottom: 10px;
        }

        .mb-2 {
            margin-bottom: 15px;
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        .mb-4 {
            margin-bottom: 25px;
        }
        .w-100{
            width: 100%;
        }
        .justify-center {
            justify-content: center;
        }

        input[type="submit"] {
            background-color: #28a745;
            border: 0;
            font-size: 17px;
            color: white;
            border-radius: 5px;
            font-weight: 500;
            padding: 5px 15px;
        }

        .input_f {
            border: 0 !important;
        }

        input[type="text"],
        input[type="file"],
        .input_f {
            width: 100%;
            max-width: 500px;
            border: 2px solid rgb(220, 220, 220);
            padding: 5px 10px;
        }
    </style>
@stop

@section('javascript')

@stop
