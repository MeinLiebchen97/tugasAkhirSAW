@extends('layouts.main')

@section('container')
<div class="container col-xxl-10 px-4">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <img class="me-3" src="img/bootstrap-logo-white.svg" alt="" width="48" height="38">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Bootstrap</h1>
      <small>Since 2022</small>
    </div>
  </div>

  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Data Table</li>
      <li class="breadcrumb-item active" aria-current="page">Normalize</li>
      <li class="breadcrumb-item active" aria-current="page">Weight</li>
      <li class="breadcrumb-item active" aria-current="page">Ranking</li>
    </ol>
  </nav>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Normalize Data</h6>
      <table class="table table-striped">
          <thead>
            <tr>
              <th style="width:3rem" scope="col" class="text-center">Ranking</th>
              <th style="width:20rem" scope="col" class="text-center">Name</th>
              <th style="width:5rem" scope="col" class="text-center">Value</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data1s as $data1)
            <tr>
              <td class="text-center">{{ $loop->iteration }}</td>
              <td>{{ $data1->name }}</td>
              <td class="text-center">{{ number_format($data1->value, 2, '.', '') }}</td>
            </tr>    
            @endforeach
          </tbody>
        </table>
    <small class="d-block text-end mt-3">
      <a class="btn btn-sm btn-bd-light mb-3 mb-md-0 rounded-2" href="/saw">
        Done
      </a>
    </small>
  </div>
</div>
@endsection




