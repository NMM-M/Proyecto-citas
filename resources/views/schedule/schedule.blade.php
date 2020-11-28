@extends('layouts.panel')

@section('content')
<form action="{{url('/schedule')}}" method="post">
    @csrf    
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Gestionar Horario</h3>
                </div>
                <div class="col text-right">
                    <button type="submit" class="btn btn-sm btn-success">
                        Guardar cambios
                    </button>
                </div>
            </div>
        </div>
            
        <div class="card-body">
            @if (session('notification'))
            <div class="alert alert-success" role="alert">
                {{session('notification')}}
            </div>
            @endif
            <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Dia</th>
                        <th scope="col">Activo</th>                    
                        <th scope="col">Turno mañana</th>
                        <th scope="col">Turno tarde</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($days as $key => $day)
                        <tr>
                            <th>{{ $day }}</th>
                            <td><label class="custom-toggle">
                                <input name="active[]" type="checkbox" checked value="{{$key}}">
                                <span class="custom-toggle-slider rounded-circle"></span>
                                </label>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <label for="time-input-inicio" class="form-control-label">Inicio</label>
                                        <select class="form-control" id="time-input-inicio" name="morning_start[]">
                                            @for($i = 8; $i < 12; $i++) 
                                            <option value="{{$i}}:00 ">{{$i}}:00 am</option>
                                            <option value="{{$i}}:30 ">{{$i}}:30 am</option>                                         
                                            @endfor
                                        </select>   
                                    </div>
                                    <div class="col">
                                        <label for="time-input-fin" class="form-control-label">Fin</label>
                                        <select class="form-control" id="time-input-fin" name="morning_end[]">
                                            @for($i = 8; $i < 12; $i++) 
                                            <option value="{{$i}}:00 ">{{$i}}:00 am</option>
                                            <option value="{{$i}}:30 ">{{$i}}:30 am</option>                                         
                                            @endfor
                                        </select> 
                                    </div>
                                </div>                          
                            </td>
                            <td> <div class="row">
                                <div class="col">
                                    <label for="time-input-inicio" class="form-control-label">Inicio</label>
                                    <select class="form-control" id="time-input-inicio" name="afternoon_start[]">
                                        @for($i = 1; $i < 11; $i++) 
                                        <option value="{{$i+12}}:00 ">{{$i}}:00 pm</option>
                                        <option value="{{$i+12}}:30 ">{{$i}}:30 pm</option>                                         
                                        @endfor
                                    </select>   
                                </div>
                                <div class="col">
                                    <label for="time-input-fin" class="form-control-label">Fin</label>
                                    <select class="form-control" id="time-input-fin" name="afternoon_end[]">
                                        @for($i = 1; $i < 11; $i++) 
                                        <option value="{{$i+12}}:00 ">{{$i}}:00 pm</option>
                                        <option value="{{$i+12}}:30 ">{{$i}}:30 pm</option>                                         
                                        @endfor
                                    </select> 
                                </div>  
                            </td>
                        </tr>
                    @endforeach
                
                </tbody>
            </table>
        </div>
        </div>    
    </div>
</form>
@endsection