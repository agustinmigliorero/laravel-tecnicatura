<tr>
           <td>{{$property->property_id}}</td>
           <td>{{$property->title}}</td>
           <td>{{$property->description}}</td>
           <td>{{$property->price}}</td>
           <td>{{$property->address}}</td>
           <td>{{$property->property_type}}</td>
           <td>{{$property->bedrooms}}</td>
           <td>{{$property->bathrooms}}</td>
           <td>{{$property->area}}</td>
           <td>
             <x-boton url="/contact/{{$property->property_id}}" color="btn-success" texto="Crear" />
             <x-boton url="#" color="btn-warning" texto="Ver Imagenes"  />
           </td>
         </tr>