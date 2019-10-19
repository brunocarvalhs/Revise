@extends('template\juridico')

@section('titulo','Início')

@section('menu_inicio','active')





@section('style')

@endsection





@section('sistema_juridico')
<div class="row">
    <div class="col-6">

    </div>
</div>
@endsection





@section('script')
<script>
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
</script>
@endsection
