<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="user-profile"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='User Profile'></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('assets') }}/img/bruce-mars.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ auth()->user()->name }}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                CEO / Co-Founder
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="true">
                                        <i class="material-icons text-lg position-relative">home</i>
                                        <span class="ms-1">App</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">email</i>
                                        <span class="ms-1">Messages</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="false">
                                        <i class="material-icons text-lg position-relative">settings</i>
                                        <span class="ms-1">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-3">Profile Information</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        @if (session('status'))
                            <div class="row">
                                <div class="alert alert-success alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('status') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                        data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        @if (Session::has('demo'))
                            <div class="row">
                                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('demo') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10"
                                        data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif


                        @foreach ($servicios as $servicio)
                            <form method="POST" action="{{ route('servicios-update', Crypt::encrypt($servicio->id)) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <input type="hidden" name="id" value="{{ $servicio->id }}">
                                <div class="row">
                                    <div class="mb-3 col-md-6">

                                        <label class="form-label">Tipo de servicio</label>
                                        <select id="tipo_id" class="form-control border border-1 p-2 border-primary"
                                            name="tipo_id" required>

                                            @foreach ($tipo_servicios as $tipo)
                                                <option @selected($tipo->id == $servicio->tipo_id) value="{{ $tipo->id }}">
                                                    {{ $tipo->tipo_servicio }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="floatingTextarea2">Nombre</label>
                                        <div class="form-group">
                                            <input type="text"
                                                class="form-control border border-1 p-2 border-primary" name="nombre"
                                                id="nombre" value="{{ $servicio->nombre }}" required>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Sexo</label>
                                        <select class="form-control border border-1 p-2 border-primary"
                                            aria-label="Default select example" name="sexo" id="sexo">

                                            <option value="">Seleccione sexo</option>
                                            <option value="1"
                                                @if (($servicio->sexo) == '1') {{ 'selected' }} @endif>Masculino
                                            </option>
                                            <option value="2"
                                                @if (($servicio->sexo) == '2') {{ 'selected' }} @endif>Femenino
                                            </option>
                                            <option value="3"
                                                @if (($servicio->sexo) == '3') {{ 'selected' }} @endif>Sin especificar</option>

                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="floatingTextarea2">Descuento</label>
                                        <div class="form-group">
                                            <input type="number"
                                                class="form-control border border-1 p-2 border-primary" id="descuento"
                                                aria-describedby="emailHelp" placeholder="Ingrese descuento a aplicar"
                                                value="{{ $servicio->descuento }}" name="descuento" required>

                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="floatingTextarea2">Cantidad Minima</label>
                                        <div class="form-group">
                                            <input type="text"
                                                class="form-control border border-1 p-2 border-primary" id="cant_min"
                                                aria-describedby="emailHelp" placeholder="Enter your name"
                                                name="cantidad_min_sesion"
                                                value="{{ $servicio->cantidad_min_sesion }}" required>

                                        </div>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="floatingTextarea2">Cantidad Maxima</label>
                                        <div class="form-group">
                                            <input type="number"
                                                class="form-control border border-1 p-2 border-primary" id="cant_max"
                                                aria-describedby="emailHelp" placeholder="Ingrese descuento a aplicar"
                                                name="cantidad_max_sesion"
                                                value="{{ $servicio->cantidad_max_sesion }}" required>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Precio Minimo</label>
                                        <div class="form-group ">
                                            <input type="text"
                                                class="form-control border border-1 p-2 border-primary" id="min_price"
                                                aria-describedby="emailHelp" placeholder="Enter your name"
                                                name="precio_min_sesion" value="{{ $servicio->precio_min_sesion }}"
                                                required>
                                        </div>
                                    </div>



                                    <div class="mb-3 col-md-6">
                                        <label class="floatingTextarea2">Precio Maximo</label>
                                        <div class="form-group">
                                            <input type="number"
                                                class="form-control border border-1 p-2 border-primary" id="max_price"
                                                aria-describedby="emailHelp" placeholder="Precio maximo"
                                                name="precio_max_sesion" value="{{ $servicio->precio_max_sesion }}"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-label">Descripción</label>

                                        <div class="form-group">
                                            <textarea type="text" class="form-control border border-1 p-2 border-primary" name="descripcion" required>{{ $servicio->descripcion }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Imagen</label>
                                        <div class="form-group">
                                            <input type="file"
                                                class="form-control border border-1 p-2 border-primary"
                                                aria-describedby="emailHelp" placeholder="Imagen" name="imagen"
                                                value="imagen">
                                        </div>
                                    </div>

                                    <div class="mt-3 col-auto">
                                        <div class="card border border-primary">
                                            <div class="avatar avatar-xl position-relative">
                                                <img src="{{ asset($servicio->url_imagen) }}" alt="profile_image"
                                                    class="w-100 border-radius-lg shadow-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">



                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label">Zonas</label>

                                            <div class="card p-1 border border-1">
                                                <select id="miSelect" class="form-control " name="zonas[]" multiple
                                                    required>
                                                    @foreach ($zonas as $id => $zona)
                                                        <option value="{{ $zona->nombre }}"
                                                            @if ($id == $id) selected @endif
                                                            {{ $zona->id }}>
                                                            {{ $zona->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        $(document).ready(function() {
                                            $('#miSelect').select2(); //--

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

                                </div>
                        @endforeach
                        <h1>dddd</h1>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <button type="submit" class="btn bg-gradient-dark">Submit</button>

                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>

</x-layout>
