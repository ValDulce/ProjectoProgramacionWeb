<div class="form-floating mb-3">
  <div class="form-floating mb-3">
      <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del usuario"
      @if(isset($usuario))
        value={{$usuario->nombre}}
      @endif
      required
    />
    <label for="nombre" class="form-label fuente">Nombre del usuario:</label>
  </div>
  <div class="form-floating mb-3">
    <input type="name" id="apellidoPat" name="apellidoPat" class="form-control" placeholder="Apellido paterno del usuario"
      @if(isset($usuario))
        value={{$usuario->apellidoPat}}
      @endif
      required
    />
    <label for="apellidoPat" class="form-label fuente">Apellido paterno del usuario:</label>
  </div>

  <div class="form-floating mb-3">
    <input type="name" id="apellidoMat" name="apellidoMat" class="form-control" placeholder="Apellido materno del usuario"
      @if(isset($usuario))
        value={{$usuario->apellidoMat}}
      @endif
      required
    />
    <label for="apellidoMat" class="form-label fuente">Apellido materno del usuario:</label>
  </div>

  <div class="form-floating mb-3">
    <input type="number" id="telefono" name="telefono" class="form-control" placeholder="telefono del usuario"
      @if(isset($usuario))
        value={{$usuario->telefono}}
      @endif
      required
    />
    <label for="telefono" class="form-label fuente">telefono del usuario:</label>
  </div>

  <div class="form-floating mb-3">
    <input type="name" id="direccion" name="direccion" class="form-control" placeholder="direccion del usuario"
      @if(isset($usuario))
        value={{$usuario->direccion}}
      @endif
      required
    />
    <label for="direccion" class="form-label fuente">direccion del usuario:</label>
  </div>

  <div class="input-group mb-3">
    <div class="input-group-text">
      <input class="form-check-input mt-0" type="radio" value="masculino" aria-label="Masculino" 
      id="sexo" name="sexo"
      @if(isset($usuario))
        @if ($usuario->sexo=="masculino")
          checked 
        @endif
        required
      @endif
      />
    </div>
    <input type="text" class="form-control fuente" aria-label="Masculino" value="Masculino">
    <div class="input-group-text">
      <input class="form-check-input mt-0" type="radio" value="femenino" aria-label="Femenino"
      id="sexo" name="sexo"
      @if(isset($usuario))
        @if ($usuario->sexo=="femenino")
          checked 
        @endif
        required
      @endif
      />
    </div>
    
    <input type="text" class="form-control fuente" aria-label="Femenino" value="Femenino">
  </div>

 

  
  <div class="text-center">
      <a class="btn btn-danger" href="{{url('/usuario')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar usuario</button>
  </div>
</form>
</div>
</div>