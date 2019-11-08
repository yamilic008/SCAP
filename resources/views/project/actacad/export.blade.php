@extends('layouts.master')

@section('css')
@endsection

@push('style')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">CSV Import
                         <a href="{{route ('actacad.index')}}" class="btn btn-xs btn-success"><i class="fa fa-rotate-left"></i></a>
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('actexportar') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}{{method_field('PUT')}}

                            <div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">
                                <label for="csv_file" class="col-md-4 control-label">Actividad Academica</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="actacad" required>
                                            <option value="">Selecciona Una ActAcad</option>
                                        @foreach($dato as $datos)
                                            <option value="{{$datos->id}}">{{$datos->id}}-{{$datos->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                             <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-success">
                                        Exportar
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                        <form class="form-horizontal" method="POST" action="{{ route('actimportar') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            

                            <div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">
                                <label for="csv_file" class="col-md-4 control-label">CSV file to import</label>

                                <div class="col-md-6">
                                    <input id="csv_file" type="file" class="form-control" name="csv_file" required>

                                    @if ($errors->has('csv_file'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('csv_file') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="header" checked> File contains header row?
                                        </label>
                                    </div>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Importar
                                    </button>
                                </form>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
  @include('sweetalert::alert')
@endsection