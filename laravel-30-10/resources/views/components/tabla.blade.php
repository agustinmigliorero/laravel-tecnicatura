<table class="table table-striped table-bordered align-middle">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>Dirección</th>
          <th>Tipo</th>
          <th>Habitaciones</th>
          <th>Baños</th>
          <th>Área (m²)</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($properties as $property)            
        <x-fila :$property />
        @endforeach
      </tbody>
    </table>