<x-layout>
<div class="container mt-5">
    <h2 class="mb-4"><i class="fa-solid fa-building"></i> Galería de Imágenes del Inmueble</h2>

   
    <div id="formulario-admin">
       
        <form action="/subir-imagen" method="POST" enctype="multipart/form-data" class="mb-4 p-4 border rounded bg-light">
            @csrf
            <h5><i class="fa-solid fa-upload"></i> Publicar nueva imagen</h5>
            <input type="hidden" name="property_id" value={{$propertyId}}> 
            <div class="mb-3">
                <label for="imagen" class="form-label">Seleccionar imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Publicar</button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered align-middle text-center">
            <thead class="table-secondary">
                <tr>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($imagenes as $imagen)
                    <tr>
                        <img src="/ver-imagenes/{{$imagen->image_url}}" />
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
{{-- <script>
    const esAdmin = true; 
    if (!esAdmin) {
        document.getElementById('formulario-admin').style.display = 'none';
    }
</script> --}}

</body>
</html>
</x-layout>