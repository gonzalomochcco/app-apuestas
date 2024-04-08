@extends('layouts.main')

@section('pageTitle', 'Listado de jugadores')

@section('sectionContent')

    <div class="container-fluid">

        <div class="card bg-white border-0 shadow-sm p-4">
            <div class="card-body">

                <h5 class="card-title fw-semibold mb-4">Listado de jugadores</h5>
                <!--<p class="mb-0">This is a sample page </p>-->

                <div class="input-group mb-5 mt-4">
                    <input type="text" disabled class="form-control" placeholder="Buscar por PlayerID, DNI o nombre...  "
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class='bx bx-search-alt-2'></i></span>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">PlayerID</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Dni</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Saldo Actual</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($players as $key => $item)
                                <tr>
                                    <th scope="row"> {{ $key + 1 }}</th>
                                    <td> <b><a href="javascript:void(0) cursor-pointer" class="">
                                                {{ $item->PlayerID }} </a></b> </td>
                                    <td>{{ $item->name }} {{ $item->lastname }}</td>
                                    <td>{{ $item->dni }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td> <b>S/. 148.22 </b> </td>
                                    <td>
                                        <div class="btn-group cursor-pointer">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                Administrar
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('player.refills', ['player_id' => $item->PlayerID]) }}">
                                                        <i class='bx bx-money'></i> Administrar recargas
                                                    </a>
                                                </li>
                                                <li><a class="dropdown-item disabled" href="#">Editar Datos</a></li>
                                                <li><a class="dropdown-item disabled" href="#">Verificar Apuestas</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link">Anterior</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Siguiente</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>



    </div>

@endsection
