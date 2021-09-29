@extends('layouts.app')
@section('title','Home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                <div class="row">
                    <h3>
                        Contatos
                        <small class="text-muted">Crud simples de contatos</small>
                    </h3>
                    <p class="lead">Lista de contato na sequência da data de cadastro.</p>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @foreach ($contatos as $contato)
                        <div class="accordion">
                            <h2 class="accordion-header" id="flush-heading{{$loop->iteration}}">
                                <button class="accordion-button collapsed" data-toggle="collapse" data-target="#flush-collapse{{$loop->iteration}}" aria-expanded="false" aria-controls="flush-collapse{{$loop->iteration}}">
                                    {{ $contato->name }}
                                </button>
                            </h2>
                            <div id="flush-collapse{{$loop->iteration}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$loop->iteration}}" data-parent="#accordionFlushExample">
                                <div class="accordion-body">Registro: {{$contato->id}} Telefone: {{$contato->telefone}}  E-mail: {{$contato->email}} <code>.accordion-flush</code>. @include('layouts.pills')</div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

                <script>
                    $(document).ready(function(){
                        //Add a minus icon to the collapse element that is open by default
                        $('.collapse.show').each(function(){
                            $(this).parent().find(".fa").removeClass("fa-plus").addClass("fa-minus");
                        });

                        //Toggle plus/minus icon on show/hide of collapse element
                        $('.collapse').on('shown.bs.collapse', function(){
                            $(this).parent().find(".fa").removeClass("fa-plus").addClass("fa-minus");
                        }).on('hidden.bs.collapse', function(){
                            $(this).parent().find(".fa").removeClass("fa-minus").addClass("fa-plus");
                        });
                    });

                </script>
                <div class="container">
                    <div class="d-grid gap-2">
                        <a href="{{ url('contatos/create') }}" class="btn btn-lg btn-primary">Adicionar novos contatos</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<script>

</script>

@endsection



