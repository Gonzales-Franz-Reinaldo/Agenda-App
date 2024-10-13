
    <div class="container-agendas">
        <h1 class="title">Lista de Agendas</h1>
        <table class="styled-table" border="1">
            <thead>
                <tr>
                    <th>CI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Profesión</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agendas as $agenda)
                    <tr>
                        <td>{{ $agenda->ci }}</td>
                        <td>{{ $agenda->nombres }}</td>
                        <td>{{ $agenda->apellidos }}</td>
                        <td>{{ $agenda->celular }}</td>
                        <td>{{ $agenda->email }}</td>
                        <td>{{ $agenda->profesion->nombre }}</td>
                        <td class="options">
                            <!-- opciones de acciones para la agenda eliminar y editar -->
                            <button class="btn-edit" data-id="{{ $agenda->id }}">Editar</button>
                            <button class="btn-delete" data-id="{{ $agenda->id }}">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- para agregar funcionalidad para agregar nueva agenda -->
        <button class="btn-create">Crear Agenda</button>
    </div>

