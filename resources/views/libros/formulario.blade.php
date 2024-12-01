<div class="form-floating mb-3">
    <div class="form-floating mb-3">
        <input type="name" id="titulo" name="titulo" class="form-control" placeholder="titulo del libro"
        @if(isset($libro))
          value={{$libro->titulo}}
        @endif
        required
      />
      <label for="nombre" class="form-label fuente">Titulo del Libro:</label>
    </div>
    <div class="form-floating mb-3">
      <input type="date" id="año" name="año" class="form-control" placeholder="año del libro"
      @if(isset($libro))
      value={{$libro->año}}
      @endif
        required
      />
      <label for="año" class="form-label fuente">año del libro:</label>
    </div>
  
    <div class="form-floating my-5">
        <select class="form-select" aria-label="Seleccion autor" id="autor_id" name="autor_id" required >
          <option selected>Selecciona un Autor</option>
          @foreach ($autores as $autor)
          <option value="{{$autor->id}}">{{$autor->nombre}}</option>                
          @endforeach
        </select>
    </div>

    
    <div class="form-floating my-5">
        <select class="form-select" aria-label="Seleccion categoria" id="categoria_id" name="categoria_id" required >
          <option selected>Selecciona una Categoria</option>
          @foreach ($categoria as $categoria)
          <option value="{{$categoria->id}}">{{$categoria->tipo}}</option>                
          @endforeach
        </select>
    </div>

    <div class="form-floating my-5">
        <select class="form-select" aria-label="Seleccion editorial" id="editorial_id" name="editorial_id" required>
          <option selected>Selecciona una editorial</option>
          @foreach ($editorial as $editorial)
          <option value="{{$editorial->id}}">{{$editorial->Nombre_editorial}}</option>                
          @endforeach
        </select>
    </div>

    
    <div class="text-center">
        <a class="btn btn-danger" href="{{url('/libro')}}" role="button">Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar Libro</button>
    </div>
  </form>
  </div>
  </div>