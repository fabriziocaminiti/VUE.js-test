@extends('app-vue')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 v-if="show"> @{{titletoUppercase()}}</h1>
            <h3>@{{toLowercase(description)}}</h3>
        </div>
    </div>
</div>

@endsection