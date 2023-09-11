<img src="{{ $message->embed('muni-logo.png') }}" style="height:50px; width: auto;" />
<hr />
<p>
    <h2>Surco Adopta | Solicitud de Adopción</h2>
</p>
<div style="background:#eee; border:1px solid #ccc; padding:5px 10px" >
    <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
        <tbody>
            <tr>
                <td style="padding:20px 50px 20px 50px">
                    <p>Nombre completo : {{$registro->nombre_completo}}</p>
                    <hr>
                    <br>
                    <p>Edad : {{$registro->edad}}</p>
                    <hr>
                    <br>
                    <p>Correo electrónico : {{$registro->correo_electronico}}</p>
                    <hr>
                    <br>
                    <p>Número de Contacto : <a href="tel:{{$registro->numero_telefono}}">{{$registro->numero_telefono}}</a></p>
                    <hr>
                    <br>
                    <p>Dirección : {{$registro->direccion}}</p>
                    <hr>
                    <br>
                    <p>Redes sociales : {{$registro->redes_sociales}}</p>
                    <hr>
                    <br>
                    <p>Mascota de Inter�s: {{$registro->mascota_adoptar}}</p>
                    <hr>
                    <br>
                    <p>Interés por otra mascota : {{$registro->interesa_otra}}</p>
                    <hr>
                    <br>
                    <p>Familiar con alergía : {{$registro->familiar_alergias}}</p>
                    <hr>
                    <br>
                    <p>Compromiso con la salud de la mascota : {{$registro->salud_mascota}}</p>
                    <hr>
                    <br>
                    <p>Compromiso con la mascota : {{$registro->compromiso_cuidado}}</p>
                    <hr>
                    <br>
                    <p>Opinión sobre la esterilización : {{$registro->opinion_esterilizacion}}</p>
                    <hr>
                    <br>
                    <p>Pregunta adicional : {{$registro->pregunta_adicional}}</p>
                    <hr>
                    <br>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<p>&nbsp;</p>
<p>Gracias por utilizar nuestro servicio.</p>
<p><strong>Municipalidad Distrital de Santiago de Surco</strong></p>











