
    <div class="formulario-agenda">
        <h2>Crear Agenda</h2>
        <form id="form-create-agenda">
            @csrf
            <div class="impust">
                <label for="ci">CI:</label>
                <input type="text" name="ci" id="ci">
            </div>
            <div class="impust">
                <label for="nombres">Nombres:</label>
                <input type="text" name="nombres" id="nombres">
            </div>
            <div class="impust">
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos">
            </div>
            <div class="impust">
                <label for="celular">Celular:</label>
                <input type="text" name="celular" id="celular">
            </div>
            <div class="impust">
                <label for="email">Correo:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="impust">
                <label for="profesion_id">Profesión: </label>
                <select name="profesion_id" id="profesion_id">
                    @foreach($profesiones as $profesion)
                        <option value="{{$profesion->id}}">{{$profesion->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
