<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="user-management"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="User Management"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <ul class="bg-primary">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <!-- <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3"><strong>Servicios
                                    </strong>
                                    <strong>
                                </h6>
                            </div> -->

                            <x-notify::notify />

                        </div>
                        <div class=" me-3 mt-5 my-3 text-end">
                            <button class="btn bg-gradient-dark mb-0" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Agregar Nueva
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h5 class="modal-title" style="color: rgb(250, 250, 250)"
                                            id="exampleModalLabel">Gestión de servicios</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-12">
                                            <form action="{{ route('servicios-store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="row">
                                                    <div class="mb-3 col-md-12">
                                                        <label class="form-label">Tipo de servicio</label>
                                                        <select id="tipo"
                                                            class="form-control border border-1 p-2 border-primary"
                                                            name="tipo" required>
                                                            <option value="">Seleccione tipo de servicio</option>
                                                            @foreach ($tipo_servicios as $tipos)
                                                                <option value="{{ $tipos->id }}">
                                                                    {{ $tipos->tipo_servicio }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label">Nombre</label>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                class="form-control border border-1 p-2 border-primary"
                                                                name="name" id="name"
                                                                value="{{ old('name') }}" required>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Sexo</label>
                                                        <select class="form-control border border-1 p-2 border-primary"
                                                            aria-label="Default select example" name="sexo"
                                                            id="sexo">
                                                            <option value="">Seleccione sexo</option>
                                                            <option value="1">Masculino</option>
                                                            <option value="2">Femenino</option>
                                                            <option value="2">Sin Especificar</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Descuento</label>
                                                        <div class="form-group">
                                                            <input type="number"
                                                                class="form-control border border-1 p-2 border-primary"
                                                                id="descuento" aria-describedby="emailHelp"
                                                                placeholder="Ingrese descuento a aplicar"
                                                                value="{{ old('descuento') }}" name="descuento"
                                                                required>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Cantidad Minima</label>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                class="form-control border border-1 p-2 border-primary"
                                                                id="cant_min" aria-describedby="emailHelp"
                                                                placeholder="Enter your name" name="cant_min"
                                                                value="{{ old('cant_min') }}" required>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Cantidad Maxima</label>
                                                        <div class="form-group">
                                                            <input type="number"
                                                                class="form-control border border-1 p-2 border-primary"
                                                                id="cant_max" aria-describedby="emailHelp"
                                                                placeholder="Ingrese descuento a aplicar"
                                                                name="cant_max" required>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Precio minimo</label>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                class="form-control border border-1 p-2 border-primary"
                                                                id="min_price" aria-describedby="emailHelp"
                                                                placeholder="Enter your name" name="min_price"
                                                                value="{{ old('min_price') }}" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Precio Maximo</label>

                                                        <div class="form-group ">
                                                            <input type="text"
                                                                class="form-control border border-1 p-2 border-primary"
                                                                id="max_price" aria-describedby="emailHelp"
                                                                placeholder="Enter your name" name="max_price"
                                                                value="{{ old('max_price') }}" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label">Descripción</label>

                                                        <div class="form-group">
                                                            <textarea type="text" class="form-control border border-1 p-2 border-primary" name="descripcion" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label">Imagen</label>
                                                        <div class="form-group">
                                                            <input type="file"
                                                                class="form-control border border-1 p-2 border-primary"
                                                                id="imagen" aria-describedby="emailHelp"
                                                                placeholder="Imagen" name="imagen" required>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label">Zonas</label>

                                                        <div class="card p-1 border border-1">
                                                            <select id="miSelect" class="form-control "
                                                                name="zonas[]" multiple required>
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
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>

                                    </div>
                                    </form>
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
                                <table class="table table-bordered table-sm  align-items-center mb-0 ">
                                    <thead class="bg-gradient-dark    text-center text-light-emphasis" >
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID
                                            </th>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Tipo
                                            </th>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NOMBRE</th>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                SEXO</th>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                ZONAS</th>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                MIN-SESION</th>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                MAX-SESION</th>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                PRECIO-X-MIN</th>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                PRECIO-X-MAX</th>


                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ESTADO</th>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                IMAGEN
                                            </th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                FECHA DE CREACIÓN
                                            </th>

                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ACCIONES
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($servicios as $servicio)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">{{ $servicio->id }}</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">{{ $servicio->tipo_servicio }}</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">{{ $servicio->nombre }}</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">
                                                                {{ $servicio->sexo == 1 ? 'Masculino' : ($servicio->sexo == 2 ? 'Femenino' : 'Sin especificar') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">{{ $servicio->zonas }}</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">
                                                                {{ $servicio->cantidad_min_sesion }}</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">
                                                                {{ $servicio->cantidad_max_sesion }}</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">{{ $servicio->precio_min_sesion }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">{{ $servicio->precio_max_sesion }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">
                                                                {{ $servicio->estado == 1 ? 'Activo' : 'Inactivo' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset($servicio->url_imagen) }}"
                                                                class="avatar avatar-sm me-3 border-radius-lg"
                                                                alt="">
                                                        </div>

                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">{{ $servicio->created_at }}</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="align-middle">
                                                    <form action="" method="POST">
                                                        <a class="btn btn-info btn-link"
                                                            href="{{ route('servicios-edit', Crypt::encrypt($servicio->id)) }}"
                                                            data-original-title="" title="">edit</a>
                                                        <!-- <i class="material-icons">edit</i> -->

                                                        @csrf
                                                        @method('DELETE')
                                                        <a class="btn btn-primary btn-link"
                                                            href="{{ route('servicios-delete', $servicio->id) }}"
                                                            data-original-title="" title="">Delete</a>
                                                        <!-- <i class="material-icons">delete</i> -->

                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>

                            <div class="container">
                                <div class="row">
                                    {{ $servicios->links() }}
                                </div>
                                
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
