<div class="form-floating mb-3">
    <div class="form-floating mb-3">
        <input type="date" id="fechaPrestamo" name="fechaPrestamo" class="form-control" placeholder="fecha dia de prestamo del libro"
        @if(isset($prestamo))
          value={{$prestamo->fechaPrestamo}}
        @endif
        required
      />
      <label for="fechaPrestamo" class="form-label fuente">fecha dia de prestamo del usuario:</label>
    </div>
    <div class="form-floating mb-3">
      <input type="date" id="fechaEntrega" name="fechaEntrega" class="form-control" placeholder="fecha dia entrega del libro"
      @if(isset($prestamo))
      value={{$prestamo->fecha_entrega}}
      @endif
        required
      />
      <label for="fechaEntrega" class="form-label fuente">fecha entrega del libro:</label>
    </div>
  
        
    <div class="form-floating my-5">
        <select class="form-select" aria-label="Seleccion Usuario" id="usuario_id" name="usuario_id" required >
          <option selected>Selecciona nombre del usuario</option>
          @foreach ($usuarios as $usuario)
          <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>                
          
          @endforeach

          
        </select>
    </div>

    <div class="form-floating my-5">
        <select class="form-select" aria-label="Seleccion libro" id="libro_id" name="libro_id" required>
          <option selected>Selecciona una Libro </option>
          @foreach ($libros as $libro)
          <option value="{{$libro->id}}">{{$libro->titulo}}</option>                
          @endforeach
        </select>
    </div>

    <div class="form-floating mb-3">
      <select id="estatus" name="estatus" class="form-control fuente" placeholder="estatus del usuario">
          <option value="completo" 
              @if(isset($prestamo) && $prestamo->estatus === 'completo') selected @endif required>
              Completo
          </option>
          <option value="incompleto" 
              @if(isset($prestamo) && $prestamo->estatus === 'incompleto') selected @endif required>
              Incompleto
          </option>
      </select>
      <label for="estatus" class="form-label fuente">Estatus</label>
  </div>

    
    <div class="text-center">
        <a class="btn btn-danger" href="{{url('/prestamo')}}" role="button">Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </form>
  </div>
  </div>