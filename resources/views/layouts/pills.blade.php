<div class="dropdown">
    <button class="btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Ações
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <a class="dropdown-item" href="{{route('contatos.edit', $contato->id)}}">Editar</a>
            <form method="post" action="{{route('contatos.destroy',$contato->id)}}" class="form-horizontal">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="dropdown-item">
                    Delete
                </button>
            </form>

    </div>
</div>
