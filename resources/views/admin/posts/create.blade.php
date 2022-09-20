@extends('layouts.app')

@section('content')ù
<h2 class="text-center mt-2">Form per creazione post</h2>
<div class="col-4 mx-auto p-3 mt-3 mb-2 bg-dark">
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        @method('POST'); {{-- Non esistendo il metodo put nel form,dobbiamo inserirlo noi  --}}
        @include('forms.form');
      </form>
</div>
@endsection