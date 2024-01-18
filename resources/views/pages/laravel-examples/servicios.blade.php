<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="user-management"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="User Management"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3"><strong>Servicios
                                    </strong>
                                    <strong>
                                </h6>
                            </div>
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <button class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Agregar Nueva
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h5 class="modal-title" style="color: rgb(250, 250, 250)" id="exampleModalLabel">Gestión de servicios</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-12">
                                            <form action="{{ route('servicios-store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <div class="row">
                                                    <div class="mb-3 col-md-12">
                                                        <label class="form-label">Tipo de servicio</label>
                                                        <select id="tipo" class="form-control border border-1 p-2 border-primary" name="tipo">
                                                            @foreach ($tipo_servicios as $tipos)
                                                            <option value="{{ $tipos->id }}">
                                                                {{ $tipos->nombre }}
                                                            </option>
                                                            @endforeach

                                                        </select>
                                                        <div class="@error('tipo') is-invalid @enderror"></div>
                                                        @error('tipo')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label">Nombre</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control border border-1 p-2 border-primary" name="name" id="name">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Sexo</label>
                                                        <select class="form-control border border-1 p-2 border-primary" aria-label="Default select example" name="sexo" id="sexo">
                                                            <option disabled>Seleccione sexo</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Femenino</option>
                                                            <option value="2">Sin Especificar</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Descuento</label>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control border border-1 p-2 border-primary" id="descuento" aria-describedby="emailHelp" placeholder="Ingrese descuento a aplicar" name="descuento">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Cantidad Minima</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control border border-1 p-2 border-primary" id="cant_min_sesion" aria-describedby="emailHelp" placeholder="Enter your name" name="cant_min">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Cantidad Maxima</label>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control border border-1 p-2 border-primary" id="cant_max" aria-describedby="emailHelp" placeholder="Ingrese descuento a aplicar" name="cant_max">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Precio minimo</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control border border-1 p-2 border-primary" id="min_price" aria-describedby="emailHelp" placeholder="Enter your name" name="min_price">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Precio Maximo</label>

                                                        <div class="form-group ">
                                                            <input type="text" class="form-control border border-1 p-2 border-primary" id="max_price" aria-describedby="emailHelp" placeholder="Enter your name" name="max_price">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label">Descripción</label>

                                                        <div class="form-group">
                                                            <textarea type="text" class="form-control border border-1 p-2 border-primary" name="descripcion"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label">Imagen</label>
                                                        <div class="form-group">
                                                            <input type="file" class="form-control border border-1 p-2 border-primary" id="imagen" aria-describedby="emailHelp" placeholder="Imagen" name="imagen">

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label">Zonas</label>

                                                        <div class="card p-1 border border-1">
                                                            <select id="miSelect" class="form-control " name="zonas[]" multiple>
                                                                @foreach ($zonas as $zona)
                                                                <option value="{{ $zona->nombre }}">
                                                                    {{ $zona->nombre }}
                                                                </option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {
                                $('#miSelect').select2();


                                // function agregarNuevoValor() {
                                //     var nuevoValor = '6'; // Puedes obtener el valor desde un input o cualquier otra fuente
                                //     var nuevoTexto = 'Nuevo Valor'; // Puedes obtener el texto desde un input o cualquier otra fuente

                                //     // Crear una nueva opción y agregarla al select
                                //     var nuevaOpcion = new Option(nuevoTexto, nuevoValor);
                                //     $('#miSelect').append(nuevaOpcion);

                                //     // Actualizar el Select2 para mostrar la nueva opción agregada
                                //     $('#miSelect').trigger('change');
                                // }
                            });
                        </script>

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID
                                            </th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Tipo
                                            </th>

                                            {{-- <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                PHOTO</th> --}}
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NOMBRE</th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                SEXO</th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                ZONAS</th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                MIN-SESION</th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                MAX-SESION</th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                PRECIO-X-MIN</th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                PRECIO-X-MAX</th>



                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                IMAGEN
                                            </th>

                                            {{-- <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                EMAIL</th> --}}
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ESTADO</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                FECHA DE CREACIÓN
                                            </th>

                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ACCIONES
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm"></p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"></h6>

                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm"></p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"></h6>

                                                </div>
                                            </td>


                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm"></p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"></h6>

                                                </div>
                                            </td>


                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm"></p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"></h6>

                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm"></p>
                                                    </div>
                                                </div>
                                            </td>



                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                    </div>

                                                </div>
                                            </td>

                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold"></span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold"></span>
                                            </td>


                                            <td class="align-middle">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>

                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>