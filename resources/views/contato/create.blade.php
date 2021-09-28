@extends('layouts.app')
@section('title','Cadastro Contato')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="classic-title"><span>Cadastro de Contatos</span></h2>
                <div class="row sidebar-page">
                    <div class="col-md-8 page-content">
                        <!-- Start Contact Form -->
                        <form class="contact-form" id="contact-form" role="form" method="POST" action="{{route('contatos.store')}}">
                            {{ csrf_field() }}
                            <div class="controls form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control-plaintext" name="name" value="{{ old('name') }}" autofocus placeholder="Nome:">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input id="telefone" type="text" class="form-control-plaintext" name="telefone" value="{{ old('telefone') }}" autofocus placeholder="Telefone:">

                                    @if ($errors->has('telefone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <div class="col-sm-10">
                                <input id="email" type="text" class="form-control-plaintext" name="email" value="{{ old('email') }}" autofocus placeholder="Email:">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-link"></button>

                        <button type="submit" class="btn btn-lg btn-primary">
                            Salvar
                        </button>

                    </div>
                    </form>
                    <!-- End Contact Form -->

                </div>


                <!--Sidebar-->

            </div>

        </div>
        </div>
    </div>
@endsection

