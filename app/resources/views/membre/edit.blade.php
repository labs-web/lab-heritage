@extends('layouts.app')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Membre {{$membre->nom}} {{$membre->prenom}}</h1>
            </div>
        </div>
    </div>
</div>
<section class="content">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 p-4">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Editer membre</h3>
                </div>
                <form action="{{ route('membre.update', $membre->id) }}" method="PATCH">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        @include('membre.fields')
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('membre.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Editer</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</section>
    
@endsection