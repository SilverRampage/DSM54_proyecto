@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        $(document).ready(function()){

            $("#estados").on('change', function() {
            
                var id = $(this).find(":selected").val();cal_days_in_monthx9
                    console.log("Elemento seleccionado:" +id);
                if(id == 0){
                    $("#municipios").html('<option value="0"> -- Seleccione un estado antes --</option>');
                }
                else{
                    |$("#municipios").load ('js_municipios?id=' + id);
                }
            });
        });

    </script>

    </head>
    <body>
        <div class="container">
            <h1>Seleccionar Estado</h1>
            <hr>
            <select id="estados">
                <option value="0">-- Selecciona un estado --</option>
                @foreach($estados as $estado)
                    <option value="{{ $estado->id }}"> {{ $estado->nombre }} </option>
                @endforeach 
            </select>    
            <hr>
            <select id="municipios">
                <option value="0">-- Seleccione un Estado Antes --</option>
            </select>
            <br>
        </div>
        
    </body>
</html>
                                