@extends('template/fisico')

@section('titulo','Perfil')

@section('menu_perfil','active')



@section('style')

@endsection



@section('sistema_fisico')
<div class="col-md-6 mb-4">

    <!-- Card -->
    <div class="card testimonial-card" style="max-width: 22rem;">

        <!-- Background color -->
        <div class="card-up aqua-gradient"></div>

        <!-- Avatar -->
        <div class="avatar mx-auto white">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2831%29.jpg" class="rounded-circle img-responsive" alt="woman avatar">
        </div>

        <!-- Content -->
        <div class="card-body">
            <!-- Name -->
            <h4 class="card-title">Martha Smith</h4>
            <hr>
            <!-- Quotation -->
            <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos,
                adipisci</p>
        </div>

    </div>
    <!-- Card -->

</div>
@endsection



@section('script')


@endsection
