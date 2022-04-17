@extends('layouts.layout')

@section('head-modules')
@endsection

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
                    <a href="/categories/create"><button type="button" aria-haspopup="true" aria-expanded="false"
                            class="btn-shadow btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-plus-circle fa-w-20"></i>
                            </span>
                            Ajouter
                        </button></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <table class="mb-0 table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nom de la catégorie</th>
                        <th style="text-align: right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                        <tr>
                            <th scope="row">{{ $categorie->id }}</th>
                            <td>{{ $categorie->nom }}</td>
                            <td style="display: flex; justify-content: end;">
                                <a href="{{ Route('categories.edit', ['category' => $categorie->id]) }}"><button
                                        class="btn btn-info mr-2">Modifier</button></a>

                                <form action="{{ Route('categories.destroy', ['category' => $categorie->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button id="delete" class="btn btn-danger">Supprimer</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('footer-modules')
    <script src="{{ asset('modules/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('modules/sweetalert/sweetalert.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(document).on('click', '#delete', function() {
            var del = $(this).closest("form");
            event.preventDefault();
            Swal.fire({
                title: 'Supression !',
                text: "Souhaitez-vous supprimer cette catégorie ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Supprimer',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    del.submit();
                }
            });
        });
    </script>
@endsection

@section('footer')
@endsection
