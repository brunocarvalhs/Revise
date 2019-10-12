@extends('template/fisico')

@section('titulo','Serviços e Produtos')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/SearchBar.css') }}">
@endsection

@section('sistema_fisico')
    <div class="s128">
      <form>
        <div class="inner-form">
          <div class="row">
            <div class="input-field second">
              <input type="search" placeholder="Keyword" />
            </div>
          </div>
        </div>
      </form>
    </div>
@endsection

@section('script')
        <script>
      var btnDelete = document.getElementById('clear');
      var inputFocus = document.getElementById('inputFocus');
      //- btnDelete.on('click', function(e) {
      //-   e.preventDefault();
      //-   inputFocus.classList.add('isFocus')
      //- })
      //- inputFocus.addEventListener('click', function() {
      //-   this.classList.add('isFocus')
      //- })
      btnDelete.addEventListener('click', function(e)
      {
        e.preventDefault();
        inputFocus.value = ''
      })
      document.addEventListener('click', function(e)
      {
        if (document.getElementById('first').contains(e.target))
        {
          inputFocus.classList.add('isFocus')
        }
        else
        {
          // Clicked outside the box
          inputFocus.classList.remove('isFocus')
        }
      });

    </script>
@endsection
