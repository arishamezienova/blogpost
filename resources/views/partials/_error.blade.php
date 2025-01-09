<!--Errors controle bij het inzenden van het formulier-->
@if ($errors->any())
    <div class="flash-error">
        <p>Er werden fouten vastgesteld bij de inzending van het formulier:</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
