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
                                <h6 class="text-white mx-3"><strong> Gestión de zonas
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
                                        <h5 class="modal-title" id="exampleModalLabel">Gestión de zonas</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-12">
                                            <form action="{{ url('admin/zonas-store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="mb-3 col-md-12">
                                                        <label class="form-label">Email address</label>
                                                        <input type="text" name="zonas" class="form-control border border-2 p-2 border-primary" placeholder="Ingrese Zonas">
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

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID
                                            </th>


                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                NOMBRE</th>

                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                IMAGEN
                                            </th>

                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ESTADO
                                            </th>

                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                FECHA DE CREACIÓN
                                            </th>



                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACCIONES
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($zonas as $zona)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">{{ $zona['id'] }}</p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $zona['nombre'] }}</h6>

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
                                                <span class="text-secondary text-xs font-weight-bold">{{ $zona['estado'] }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ $zona['created_at'] }}</span>
                                            </td>


                                            <td class="align-middle text-center">
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
                                        @endforeach
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