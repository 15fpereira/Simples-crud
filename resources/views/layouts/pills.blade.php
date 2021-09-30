 <!-- Button trigger modal
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>
 -->
<div class="dropdown">
    <button class="btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Ações
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <a class="dropdown-item" href="{{route('contatos.edit', $contato->id)}}">Editar</a>

         <!-- Button trigger modal -->
        <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal{{ $loop->iteration }}">Detetar</button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $loop->iteration }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel{{ $loop->iteration }}"> DELETE </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Deseja relamente deletar o contato: {{ $contato->name }}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form method="post" action="{{route('contatos.destroy',$contato->id)}}" class="form-horizontal">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-primary">Deletar</button>
                </form>

            </div>
        </div>
    </div>
</div>




