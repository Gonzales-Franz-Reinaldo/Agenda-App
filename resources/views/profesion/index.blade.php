
    <div class="container-profesion">
        <h1>Lista de Profesiones</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($profesiones as $profesion)
                    <tr>
                        <td>{{$profesion->id}}</td>
                        <td>{{$profesion->nombre}}</td>
                        <td class="options">
                            <button class="btn-edit" data-id="{{$profesion->id}}">Editar</button>
                            <button class="btn-delete" data-id="{{$profesion->id}}">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn-create">Crear Profesión</button>
    </div>
