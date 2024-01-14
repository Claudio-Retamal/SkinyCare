<table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                ID
            </th>

            {{-- <th
                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                PHOTO</th> --}}
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                NOMBRE</th>
            {{-- <th
                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                EMAIL</th> --}}
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                ESTADO</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                FECHA DE CREACIÓN
            </th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
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
                {{-- <td>
                <div class="d-flex px-2 py-1">
                    <div>
                        <img src="{{ asset('assets') }}/img/team-2.jpg"
                            class="avatar avatar-sm me-3 border-radius-lg"
                            alt="user1">
                    </div>

                </div>
            </td> --}}
                <td>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{ $zona['nombre'] }}</h6>

                    </div>
                </td>
                {{-- <td class="align-middle text-center text-sm">
                <p class="text-xs text-secondary mb-0">john@creative-tim.com
                </p>
            </td> --}}
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Admin</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">22/03/18</span>
                </td>
                <td class="align-middle">
                    <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title=""
                        title="">
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
