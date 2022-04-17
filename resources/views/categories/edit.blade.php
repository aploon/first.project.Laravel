@extends('layouts.layout')

@section('main-inner-title')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                    </i>
                </div>
                <div>Catégories
                    <div class="page-title-subheading">Tables de toutes les catégories présentes dans notre base de données
                    </div>
                </div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block">
                    <a href="/categories"><button type="button" aria-haspopup="true" aria-expanded="false"
                        class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-list fa-w-20"></i>
                        </span>
                        Catégories
                    </button></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="container">
        
        <form method="POST" action="{{route('categories.update', ['category' => $categories->id])}}" class="form-categories w-50">
            @csrf
            @method('PUT')
            <div class="h3">Modifier catégorie</div>
            <div class="input-group">
                <input name="nom" id="nom" placeholder="with a placeholder" type="text" class="form-control" value="{{$categories->nom}}">
                <div class="input-group-append">
                    <button class="btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-pencil fa-w-20"></i>
                        </span>
                        Modifier
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('footer')
@endsection
