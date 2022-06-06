@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-3 p-5">
                <img src="https://img.freepik.com/free-photo/junior-developer-sitting-down-desk-showing-laptop-with-source-code-senior-dev-asking-opinion-programer-writing-algorithm-interrupted-by-colleague-wanting-help-with-fixing-errors_482257-41823.jpg?size=626&ext=jpg&ga=GA1.2.1972091218.1654480343" class="rounded-circle w-100">
            </div>
            <div class="col-9">
                <div><h1>{{ $user->username }}</h1></div>
                <div class="d-flex">
                    <div class="pr-5"><strong>135</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#"></a>{{ $user->profile->url }}</div>
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-4">
                <img src="https://img.freepik.com/free-photo/junior-developer-sitting-down-desk-showing-laptop-with-source-code-senior-dev-asking-opinion-programer-writing-algorithm-interrupted-by-colleague-wanting-help-with-fixing-errors_482257-41823.jpg?size=626&ext=jpg&ga=GA1.2.1972091218.1654480343" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://img.freepik.com/free-photo/junior-developer-sitting-down-desk-showing-laptop-with-source-code-senior-dev-asking-opinion-programer-writing-algorithm-interrupted-by-colleague-wanting-help-with-fixing-errors_482257-41823.jpg?size=626&ext=jpg&ga=GA1.2.1972091218.1654480343" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://img.freepik.com/free-photo/junior-developer-sitting-down-desk-showing-laptop-with-source-code-senior-dev-asking-opinion-programer-writing-algorithm-interrupted-by-colleague-wanting-help-with-fixing-errors_482257-41823.jpg?size=626&ext=jpg&ga=GA1.2.1972091218.1654480343" class="w-100">
            </div>
        </div>

    </div>
@endsection
