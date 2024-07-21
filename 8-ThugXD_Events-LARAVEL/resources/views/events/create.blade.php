@extends('layouts.main')
@section('title', 'Criar Evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie um evento</h1>
        <form action="/events" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem:</label>
                <input type="file" name="image" class="form-control-file" id="image" >
            </div>
            <div class="form-group">
                <label for="title">Titulo:</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="Date">Data do evento:</label>
                <input type="date" name="date" class="form-control" id="date">
            </div>
            <div class="form-group">
                <label for="Cidade">Cidade:</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="Cidade do evento">
            </div>
            <div class="form-group">
                <label for="Private">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cidade">Descricção:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai descrever"></textarea>
            </div>  
            <div class="form-group">
                <label for="cidade">Adicione Items de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco">Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja">Cerveja
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes">Brindes
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food">Open Food
                </div>
            </div>  
            <input type="submit" class="btn btn-primary" style="margin-left: 10px;" value="Criar evento">
        </form>
 
    </div>
@endsection