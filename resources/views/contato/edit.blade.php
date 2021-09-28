@extends('layouts.app')
@section('title','Cadastro Contato')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="classic-title"><span>Editar Contatos</span></h2>
                <div class="row sidebar-page">
                    <div class="col-md-8 page-content">
                        <!-- Start Contact Form -->
                        <form class="contact-form" id="contact-form" role="form" method="post" action="{{route('contatos.update', $contato->id)}}">
                            {{ csrf_field() }}

                                <input type="hidden" name="_method" value="put">

                                <div class="form-group">
                                    <input id="name" type="text" class="form-control-plaintext" name="name" value="{{ $contato->name }}">
                                </div>
                                <div class="form-group">
                                    <input id="telefone" type="text" class="form-control-plaintext" name="telefone" value="{{ $contato->telefone }}">
                                </div>
                                <div class="col-sm-10">
                                    <input id="email" type="text" class="form-control-plaintext" name="email" value="{{ $contato->email }}">

                                </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-link"></button>

                        <button type="submit" class="btn btn-lg btn-primary">
                            Editar
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

