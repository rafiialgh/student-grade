@extends('layouts.main')

@section('container')
<div class="container-fluid border rounded p-4 mx-auto border-2 row">
  <div class="col border rounded p-3" style="width: 30rem">
    <form action="{{ Route('posts.store') }}" method="POST">
      {{ csrf_field() }}

      @if($errors->any())
      {!! implode('', $errors->all('<div class="alert alert-danger alert-sm">:message</div>')) !!}
      @endif
      <h3>Data mahasiswa</h3>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
        <input type="text" name="nama" class="form-control" aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">NIM</span>
        <input type="text" name="nim" class="form-control" aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-sm">
      </div>

      <h3 class="mt-5">Nilai Mahasiswa</h3>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Quiz</span>
        <input type="text" name="quiz" class="form-control" aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Tugas</span>
        <input type="text" name="tugas" class="form-control" aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Absensi</span>
        <input type="text" name="absen" class="form-control" aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Praktek</span>
        <input type="text" name="praktek" class="form-control" aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">UAS</span>
        <input type="text" name="uas" class="form-control" aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-sm">
      </div>
      <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </form>
  </div>

  <div class="col ms-3" style="width: 30rem">
    <div class="card">
      {!! $chart->container() !!}
    </div>
  </div>
</div>

<div class="border border-2 p-3 mt-4 rounded mb-5">
  <div>
    <h3>Table Data Nilai Mahasiswa</h3>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>Quiz</th>
          <th>Tugas</th>
          <th>Absen</th>
          <th>Praktek</th>
          <th>Uas</th>
          <th>Nilai akhir</th>
          <th>Grade</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $index => $data)
        <tr>
          <td>
            {{ $index+1 }}
          </td>
          <td>
            {{ $data->nama }}
          </td>
          <td>
            {{ $data->nim }}
          </td>
          <td>
            {{ $data->quiz }}
          </td>
          <td>
            {{ $data->tugas }}
          </td>
          <td>
            {{ $data->absen }}
          </td>
          <td>
            {{ $data->praktek }}
          </td>
          <td>
            {{ $data->uas }}
          </td>
          <td>
            {{ $data->nilai_akhir }}
          </td>
          <td>
            {{ $data->grade }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}
@endsection