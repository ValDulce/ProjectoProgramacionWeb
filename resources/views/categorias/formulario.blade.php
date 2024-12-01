<div class="form-floating mb-3">
    <div class="form-floating mb-3">
        <input type="name" id="tipo" name="tipo" class="form-control" placeholder="tipo de categoria"
        @if(isset($categoria))
          value={{$categoria->tipo}}
        @endif
        required
      />
      <label for="tipo" class="form-label fuente">Tipo de categoria:</label>
    </div>
    
    
    <div class="text-center">
        <a class="btn btn-danger" href="{{url('/categoria')}}" role="button">Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </form>
</div>
 