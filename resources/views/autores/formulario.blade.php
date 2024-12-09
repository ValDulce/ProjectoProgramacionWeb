<div class="form-floating mb-3">
    <div class="form-floating mb-3">
        <input type="name" id="nombre" name="nombre" class="form-control" placeholder="Nombre del autor"
        @if(isset($autor))
          value={{$autor->nombre}}
        @endif
        required
      />
      <label for="nombre" class="form-label fuente">Nombre del autor:</label>
    </div>
    <div class="form-floating mb-3">
      <input type="name" id="apellidoPat" name="apellidoPat" class="form-control" placeholder="Apellido paterno del autor"
        @if(isset($autor))
          value={{$autor->apellidoPat}}
        @endif
        required
      />
      <label for="apellidoPat" class="form-label fuente">Apellido paterno del autor:</label>
    </div>
  
    <div class="form-floating mb-3">
      <input type="name" id="apellidoMat" name="apellidoMat" class="form-control" placeholder="Apellido materno del autor"
        @if(isset($autor))
          value={{$autor->apellidoMat}}
        @endif
        required
      />
      <label for="apellidoMat" class="form-label fuente">Apellido materno del autor:</label>
    </div>
           
    <div class="input-group mb-3">
      <div class="input-group-text">
        <input class="form-check-input mt-0" type="radio" value="masculino" aria-label="Masculino" 
        id="sexo" name="sexo"
        @if(isset($autor))
          @if ($autor->sexo=="masculino")
            checked 
          @endif
        @endif
        required
        />
      </div>
      <input type="text" class="form-control fuente" aria-label="Masculino" value="Masculino">
      <div class="input-group-text">
        <input class="form-check-input mt-0" type="radio" value="femenino" aria-label="Femenino"
        id="sexo" name="sexo"
        @if(isset($autor))
          @if ($autor->sexo=="femenino")
            checked 
          @endif
        @endif
        required
        />
      </div>
      <input type="text" class="form-control fuente" aria-label="Femenino" value="Femenino">
    </div>
  
    <div class="form-floating mb-3">
        <input type="number" id="edad" name="edad" class="form-control" placeholder="Edad del autor"
          @if(isset($autor))
            value="{{ $autor->edad }}"
          @endif
          required
        />
        <label for="edad" class="form-label fuente">Edad del autor:</label>
    </div>
    
    
    <div class="text-center">
        <a class="btn btn-danger" href="{{url('/autor')}}" role="button">Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar Autor</button>
    </div>
  </form>
  </div>
  </div>