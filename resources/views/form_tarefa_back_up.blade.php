@extends('generic_template')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Inserir Tarefa de Backup
  </div>
  <div class="card-body">

  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    @if (\Session::has('success'))
        <div class="alert alert-success">
             <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif

      <form method="post" action="{{ route('FormTarefaDeBackup.store') }}">
          <div class="form-group">
              @csrf
              <label for="origem">Origem:</label>
              <input type="text" class="form-control" name="origem"/>
          </div>
          <div class="form-group">
              <label for="symptoms">destino:</label>
              <input type="text" class="form-control" name="destino"/>
          </div>
          <div class="form-group">
              <label for="cron">Cron:</label>
              <input type="text" class="form-control" name="cron"/>
          </div>

          <button type="submit" class="btn btn-success">ok</button>
      </form>
  </div>
</div>
@endsection