<option value="0">-- Seleccione un municipio js--</option>
@foreach($municipios as $municipio)
    <option value="{{ $municipio->id }}"> {{ $municipio->nombre }} </option>
@endforeach 
