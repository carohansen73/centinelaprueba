@extends('templates.panel-template')

@section('title-head', 'Listado de Estados de Salida')

@section('head')
    
    {{-- Estilos para datatables --}}
    @include('panel.partials.heads.datatables-styles')

@endsection

@section('breadcrumb')
{{-- Content Header (Page header) --}}
<section class="content-header">
    <h1>
        <i class="fa fa-retweet"></i> Estados de Salida
        <small>Listado</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Estados de Salida</li>
        <li class="active">Listado</li>
    </ol>
</section>
@endsection

@section('main-content')

<div class="col-md-12">
    {{-- Info box --}}
    <div class="box box-info">
        {{-- 
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-retweet"></i> Listado de Estados de Salida</h3>
            <div class="box-tools pull-right">
                <div class="label bg-aqua"></div>
            </div>
        </div> --}}
        <div class="box-body">

        {{-- Boton nuevo statusoutput --}}
        <a href="{{ route('statusoutputs.create') }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Nuevo estado"><i class="fa fa-retweet"></i> Nuevo estado</a><br><br>
            
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $statusoutputs as $statusoutput )
                        <tr>
                            
                            <td>{!! $statusoutput->id !!}</td>

                            <td><a href="{{ route('statusoutputs.show', $statusoutput->id) }}" data-toggle="tooltip" title="Ver">{!! $statusoutput->name !!}</a></td>

                            <td>{!! $statusoutput->color !!}</td>

                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Color</th>
                    </tr>
                </tfoot>
            </table>

        </div>{{-- /.box-body --}}
        <div class="box-footer">
            
        </div>{{-- /.box-footer--}}
    </div>{{-- /.box --}}
</div>{{-- /.col --}}

@endsection

@section('script')

    {{-- Scripts necesarios para datatables --}}
    @include('panel.partials.scripts.datatables')

    {{-- Scripts necesarios para tooltip --}}
    @include('panel.partials.scripts.tooltip')

@endsection