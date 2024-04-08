@extends('layouts.main')

@section('pageTitle', 'Listado de recargas')

@section('sectionContent')

    <div class="container-fluid">

        <div class="card bg-white border-0 shadow-sm p-4">
            <div class="card-body">

                <h5 class="card-title fw-semibold mb-5">Listado de recargas por jugador</h5>
                <!--<p class="mb-0">This is a sample page </p>-->

                <div class="row">
                    <div class="col-12 col-md-8">
                        <p><b>Jugador:</b> {{ strtoupper($player->name) }} {{ strtoupper($player->lastname) }}</p>
                        <p><b>PlayerID:</b> {{ $player->PlayerID }}</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <button type="button" class="btn btn-primary float-end" id="btn-nueva-recarga" data-bs-toggle="modal"
                            data-bs-target="#mdlAgregarEditar">Registrar nueva recarga</button>
                    </div>
                </div>

                {{-- @dump($banks) --}}
                {{-- @dump($channels) --}}

                <!--AGREGAR FILTROS COMO BANCO Y CANALES DE ATENCION-->
                <div class="input-group mb-4 mt-4">
                    <input type="text" disabled class="form-control"
                        placeholder="Buscar recarga por fecha o número de operación" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class='bx bx-search-alt-2'></i></span>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Num. Operación</th>
                                <th scope="col">Canal Ate.</th>
                                <th scope="col">Banco</th>
                                <th scope="col">Saldo Recargado</th>
                                <th scope="col">Fecha Recarga</th>
                                <th scope="col">Hora Recarga</th>
                                <th scope="col">Vaucher</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($refills as $key => $item)
                                <tr>
                                    <th scope="row"> {{ $key + 1 }}</th>
                                    <td><b><a href="javascript:void(0) cursor-pointer" class="">
                                                {{ $item->num_op }} </a></b></td>
                                    <td>{{ $item->channel->name }}</td>
                                    <td>{{ $item->bank->name }}</td>
                                    <td>S/. {{ $item->amount }}</td>
                                    <td>{{ $item->date_refills }}</td>
                                    <td>{{ $item->hour_refills }}</td>
                                    <td><a href="javascript:void(0)">Ver imagen</a></td>
                                    <td>
                                        <div class="btn-group cursor-pointer">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                Administrar
                                            </button>
                                            <ul class="dropdown-menu">  
                                                <li>
                                                    <a class="dropdown-item btn-editar-recarga" onclick="editarMontoRecarga(this , {{$item->num_op}} , {{$item->amount}})" numope="{{$item->num_op}}" data-bs-toggle="modal"
                                                        data-bs-target="#modalEditarSaldo">
                                                        <i class='bx bx-money'></i> Modificar saldo recargado
                                                    </a>
                                                </li>
                                                <li><a class="dropdown-item disabled" href="#"><i
                                                            class='bx bx-edit'></i> Editar datos de recarga</a></li>
                                                <li><a class="dropdown-item disabled" href="#"><i
                                                            class='bx bx-x-circle'></i> Anular recarga</a></li>
                                                <li><a class="dropdown-item disabled" href="#"><i class='bx bxs-report'></i> Generar Reportes</a></li>                                                                                                
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

    <!--MODAL AGREGAR-->
    <div class="modal fade" id="mdlAgregarEditar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="mdlAgregarEditarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tituloModal" style="font-weight: bold">Registrar nueva recarga</h1>
                    <!--<button type="button" id="mdlAgregarEditarLabel" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                </div>
                <form id="form-guardar-editar-recarga" novalidate method="post" action="{{ route('refills.create') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-12 col-lg-6 mb-3">
                                <label class="form-label">Jugador</label>
                                <input type="text" class="form-control" disabled
                                    value="{{ strtoupper($player->name) }} {{ strtoupper($player->lastname) }}">
                            </div>
                            <div class="col-12 col-lg-6 mb-3">
                                <label class="form-label">PlayerID</label>
                                <input type="text" class="form-control" name="player_id" required readonly
                                    value="{{ $player->PlayerID }}">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12 col-lg-6 mb-3">
                                <label class="form-label">Numero Operación</label>
                                <input type="number" max="12" class="form-control" name="num_op" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12 col-lg-6 mb-3">
                                <label class="form-label">Canal de Atención</label>
                                <select class="form-select" name="canal_atencion" required>
                                    <option value="" selected>Seleccione</option>
                                    @foreach ($channels as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12 col-lg-6 mb-3">
                                <label class="form-label">Banco</label>
                                <select class="form-select" name="banco" required>
                                    <option value="" selected>Seleccione</option>
                                    @foreach ($banks as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-12 col-lg-6 mb-3">
                                <label class="form-label">Saldo</label>
                                <input type="number" value="" step="0.01" class="form-control" name="saldo"
                                    required>
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="col-12 col-lg-6 mb-3">
                                <label class="form-label">Fecha</label>
                                <input type="date" step="0.01" value="" class="form-control" name="fecha"
                                    required>
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="col-12 col-lg-6 mb-3">
                                <label class="form-label">Hora</label>
                                <input type="time" class="form-control" value="" name="hora" required>
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="formFile" class="form-label">Voucher (Adjuntar imagen de voucher)</label>
                                <input class="form-control" type="file" value="" name="voucher" required>
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="col-12">
                                <div id="mensaje-confirmacion"
                                    class="alert alert-success alert-dismissible fade show d-none" role="alert">
                                    <strong>Recarga exitosa!</strong> La recarga se agrego con éxito al jugador
                                    <strong>{{ $player->name }} {{ $player->lastname }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btn-cancelar-continuar"
                            class="btn btn-outline-danger">Cancelar</button>
                        <button type="button" id="btn-guardar-editar-recarga" class="btn btn-primary">Guardar
                            Registro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal editar saldo-->
    <div class="modal fade" id="modalEditarSaldo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><strong>Editar saldo</strong></h1>
                    <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-12 mb-3">
                            <label class="form-label">Jugador</label>
                            <input type="text" class="form-control" disabled
                                value="{{ strtoupper($player->name) }} {{ strtoupper($player->lastname) }}">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">PlayerID</label>
                            <input type="text" class="form-control" name="player_id" disabled value="{{ $player->PlayerID }}">                            
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Numero Operación</label>
                            <input type="text" id="mdleditar_numoperacion" class="form-control" disabled>                            
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Modificar Saldo</label>
                            <input type="number" id="mdleditar_amount" value="" step="0.01" class="form-control" name="saldo"
                                required>                           
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-outline-danger">Cancelar</button>
                    <button type="button" disabled class="btn btn-primary">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>

@endsection