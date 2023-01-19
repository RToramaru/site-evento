@extends('layouts.main')

@section('title', 'Editar Evento ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>$event->title</h1>
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="image">Imagem do Evento:</label>
      <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
      <input type="file" id="image" name="image" class="from-control-file">
    </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{ $event->title }}">
    </div>
    <div class="form-group">
      <label for="date">Data do evento:</label>
      <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{ $event->city }}">
    </div>
    <div class="form-group">
      <label for="title">O evento é privado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1" {{ $event->private == 1 ? "selected = 'selected'" : ""}}>Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?">{{ $event->description }}</textarea>
    </div>

    <div class="form-group">
      <label for="title">Adicione características:</label>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Minicurso" {{ (in_array("Minicurso", $event->items)) ? "checked='checked' "  :  ' '  }}> Minicurso
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Palestra" {{ (in_array("Palestra", $event->items)) ? "checked='checked' "  :  ' '  }}> Palestra
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Workshop" {{ (in_array("Workshop", $event->items)) ? "checked='checked' "  :  ' '  }}> Workshop
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Oficina" {{ (in_array("Oficina", $event->items)) ? "checked='checked' "  :  ' '  }}> Oficina
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Mesa-redonda" {{ (in_array("Mesa-redonda", $event->items)) ? "checked='checked' "  :  ' '  }}> Mesa-redonda
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Painel" {{ (in_array("Painel", $event->items)) ? "checked='checked' "  :  ' '  }}> Painel
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Editar Evento">
  </form>
</div>

@endsection