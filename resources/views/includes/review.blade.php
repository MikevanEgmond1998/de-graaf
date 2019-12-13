<div class="container">

    <h2 class="h1-responsive font-weight-bold text-center my-4">Plaats een recensie</h2>

    <p class="text-center w-responsive mx-auto mb-5">
        Heb je een vraag? Twijfel niet en neem contact met ons op.
        Ons team reageert meestal binnen een paar uur.
    </p>

    <div class="row">

        <div class="col-md-12 mb-md-0 mb-5">
            <review></review>
        </div>






    </div>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
