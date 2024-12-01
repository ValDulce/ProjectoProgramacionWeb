<div class="form-floating mb-3">
  <div class="form-floating mb-3">
      <input type="name" id="Nombre_editorial" name="Nombre_editorial" class="form-control" placeholder="Nombre editorial"
      @if(isset($editorial))
        value={{$editorial->Nombre_editorial}}
      @endif
      required
    />
    <label for="Nombre_editorial" class="form-label fuente">Nombre editorial:</label>
  </div>
  
  
  <div class="text-center">
      <a class="btn btn-danger" href="{{url('/editorial')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>
</div>
