<div class="bg-ligth card shadow" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="{{ asset('img/logo.png')}}" width="20" height="20" class="rounded mr-2" alt="...">
        <strong class="mr-auto">{{ $Nome }} ({{ $Placa }})</strong>
        <small class="text-muted"></small>
    </div>
    <div class="toast-body bg-ligth">
        @if ($Quilometragem >= 5000)
            <div class="form-group">
                <label for="disabledTextInput">Quilometragem - {{round($Porcentagem,2)}}%</label>
                    @if($Porcentagem >= 90)
                        <progress class="progress is-medium is-danger" value="{{round($Porcentagem,2)}}" min="0" max="100">{{round($Porcentagem,2)}}</progress>
                    @elseif($Porcentagem >= 50)
                        <progress class="progress is-medium is-warning" value="{{round($Porcentagem,2)}}" min="0" max="100">{{round($Porcentagem,2)}}</progress>
                    @elseif($Porcentagem >= 0)
                        <progress class="progress is-medium" value="{{round($Porcentagem,2)}}" min="0" max="100">{{round($Porcentagem,2)}}</progress>
                    @else

                    @endif
            </div>
        @else
            <div class="form-group">
                <label for="disabledTextInput">Tempo - {{round($Porcentagem,2)}}%</label>
                    @if($Porcentagem >= 90)
                        <progress class="progress is-medium is-danger" value="{{round($Porcentagem,2)}}" min="0" max="100">{{round($Porcentagem,2)}}</progress>
                    @elseif($Porcentagem >= 50)
                        <progress class="progress is-medium is-warning" value="{{round($Porcentagem,2)}}" min="0" max="100">{{round($Porcentagem,2)}}</progress>
                    @elseif($Porcentagem >= 0)
                        <progress class="progress is-medium" value="{{round($Porcentagem,2)}}" min="0" max="100">{{round($Porcentagem,2)}}</progress>
                    @else
                    @endif
            </div>
        @endif
    </div>
</div>
