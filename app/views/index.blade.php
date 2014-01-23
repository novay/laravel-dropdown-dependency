@extends('_layouts.index')
 
@section('content')
    {{ Form::open(array('url' => '#')) }}

    <h2>Demo Dropdown Dependency</h2>
    <table>
        <tr>
            <td> {{ Form::label('provinsi', 'Provinsi') }} </td>
            <td> : </td> 
            <td> {{ Form::select('provinsi', $daftar, null, array('id' => 'sProvinsi', 'style'=>'width: 200px'))  }} </td>
        </tr>
        <tr>
            <td> {{ Form::label('kabupaten', 'Kabupaten/Kota') }} </td>
            <td> : </td> 
            <td> {{ Form::select('kabupaten', array(), null, array('id' => 'sKabupaten', 'style'=>'width: 200px'))  }} </td>
        </tr>
        <tr>
            <td> {{ Form::label('kecamatan', 'Kecamatan') }} </td>
            <td> : </td>
            <td> {{ Form::select('kecamatan', array(), null, array('id' => 'sKecamatan', 'style'=>'width: 200px'))  }} </td>
        </tr>
        <tr>
            <td> {{ Form::label('kelurahan', 'Kelurahan/Desa') }} </td>
            <td> : </td>
            <td> {{ Form::select('kelurahan', array(), null, array('id' => 'sKelurahan', 'style'=>'width: 200px'))  }} </td>
        </tr>
    </table>

    {{ Form::close() }}
@stop
 
@section('script')
    $('#sProvinsi').on('change', function(){
        $.post('{{ URL::to('/dropdown') }}', {type: 'kabupaten', id: $('#sProvinsi').val()}, function(e){
            $('#sKabupaten').html(e);
        });
        $('#sKecamatan').html('');
        $('#sKelurahan').html('');
    });
    $('#sKabupaten').on('change', function(){
        $.post('{{ URL::to('/dropdown') }}', {type: 'kecamatan', id: $('#sKabupaten').val()}, function(e){
            $('#sKecamatan').html(e);
        });
        $('#sKelurahan').html('');
    });
    $('#sKecamatan').on('change', function(){
        $.post('{{ URL::to('/dropdown') }}', {type: 'kelurahan', id: $('#sKecamatan').val()}, function(e){
            $('#sKelurahan').html(e);
        });
    });
@stop