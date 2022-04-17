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
                    <div class="page-title-subheading">Ajouter une catégorie dans la table de toutes les catégories
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
        
        <form method="POST" action="{{route('categories.store')}}" class="form-categories w-50">
            @csrf
            <div class="h3">Nouvelle catégorie</div>
            <div class="input-group">
                <input id="nom" name="nom" type="text" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-plus-circle fa-w-20"></i>
                        </span>
                        Ajouter
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('footer')
@endsection
