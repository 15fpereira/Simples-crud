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
                    @if(Session::has('flash_message'))
                        <div class="alert alert-dismissible alert-success">
                            <button type="button" class="btn-close" data-dismiss="alert"></button>
                            <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Messagem de confirmação! </font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{Session::get('flash_message')}}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Add Outro Contato?</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .
                                </font></font>
                        </div>
                    @endif
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @foreach ($contatos as $contato)
                        <div class="accordion">
                            <h2 class="accordion-header" id="flush-heading{{$loop->iteration}}">
                                <button class="accordion-button collapsed" data-toggle="collapse" data-target="#flush-collapse{{$loop->iteration}}" aria-expanded="false" aria-controls="flush-collapse{{$loop->iteration}}">
                                    {{ $contato->name }}
                                </button>
                            </h2>
                            <div id="flush-collapse{{$loop->iteration}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$loop->iteration}}" data-parent="#accordionFlushExample">
                                <div class="accordion-body">Registro: {{$contato->id}} Telefone: {{$contato->telefone}}  E-mail: {{$contato->email}} <code>.data:{{$contato->created_at}}</code>. @include('layouts.pills')</div>
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

        <br>
        <div class="container text-center">
            <div class="row">
                <footer class="bg-back text-center">
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <!-- ultimo cadastrado   -->
                            @foreach (app\Models\Contato::all() as $item)
                                @if ($loop->last)
                                    <p class="mb-0" _msthash="2628171" _msttexthash="4229134"><b>{{ $item->name }}</b>: Foi o último contato cadastrado no Banco de dados. Email: {{ $item->email }} com o Telefone: {{ $item->telefone }}.</p>
                                @endif
                            @endforeach
                        </blockquote>
                        <figcaption class="blockquote-footer"><font _mstmutation="1" _msthash="2322372" _msttexthash="664170"> Alguém famoso em <cite title="Source Title" _mstmutation="1" _istranslated="1">Source Title</cite></font>
                        </figcaption>
                    </figure>
                </footer>
            </div>
        </div>
        <br>

    </div>
<script>
</script>
@endsection



