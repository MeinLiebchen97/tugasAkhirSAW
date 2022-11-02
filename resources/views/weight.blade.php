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
    </ol>
  </nav>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Normalize Data</h6>
      <table class="table table-striped">
          <thead>
            <tr>
              <th style="width:5rem" scope="col" class="text-center">Weight 1</th>
              <th style="width:5rem" scope="col" class="text-center">Weight 2</th>
              <th style="width:5rem" scope="col" class="text-center">Weight 3</th>
              <th style="width:5rem" scope="col" class="text-center">Weight 4</th>
              <th style="width:5rem" scope="col" class="text-center">Weight 5</th>
              <th style="width:5rem" scope="col" class="text-center">Utility</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($weights as $weight)
            <tr>
              <td class="text-center">{{ $weight->wgh1 }}</td>
              <td class="text-center">{{ $weight->wgh2 }}</td>
              <td class="text-center">{{ $weight->wgh3 }}</td>
              <td class="text-center">{{ $weight->wgh4 }}</td>
              <td class="text-center">{{ $weight->wgh5 }}</td>
              <td class="text-center"><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editWeight" data-dataid="{{$weight}}">Update</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    <small class="d-block text-end mt-3">
      <a class="btn btn-sm btn-bd-light mb-3 mb-md-0 rounded-2" href="/ranking">
        Ranking
      </a>
    </small>
  </div>
</div>

{{-- Edit Modal --}}
<div class="modal fade" id="editWeight" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('weight/'.$weight->id) }}" method="post" class="bg-body rounded">
          @method ('put')
          @csrf
          
          <div class="form-floating mb-3">
            <input type="text" name="weight1" class="form-control rounded-top @error('weight1') is-invalid @enderror" id="weight1" placeholder="Weight1" required value=""><label for="weight1">Weight 1</label>
            @error('weight1')
              <div class="invalid-feedback">
                {{ $message }}
              </div> 
            @enderror
          </div>

          <div class="form-floating mb-3">
            <input type="text" name="weight2" class="form-control rounded-top @error('weight2') is-invalid @enderror" id="weight2" placeholder="Weight2" required value=""><label for="weight2">Weight 2</label>
            @error('weight2')
              <div class="invalid-feedback">
                {{ $message }}
              </div> 
            @enderror
          </div>

          <div class="form-floating mb-3">
            <input type="text" name="weight3" class="form-control rounded-top @error('weight3') is-invalid @enderror" id="weight3" placeholder="Weight3" required value=""><label for="weight3">Weight 3</label>
            @error('weight3')
              <div class="invalid-feedback">
                {{ $message }}
              </div> 
            @enderror
          </div>

          <div class="form-floating mb-3">
            <input type="text" name="weight4" class="form-control rounded-top @error('weight4') is-invalid @enderror" id="weight4" placeholder="Weight4" required value=""><label for="weight4">Weight 4</label>
            @error('weight4')
              <div class="invalid-feedback">
                {{ $message }}
              </div> 
            @enderror
          </div>

          <div class="form-floating mb-3">
            <input type="text" name="weight5" class="form-control rounded-top @error('weight5') is-invalid @enderror" id="weight5" placeholder="Weight5" required value=""><label for="weight5">Weight 5</label>
            @error('weight5')
              <div class="invalid-feedback">
                {{ $message }}
              </div> 
            @enderror
          </div>
          
          <input type="hidden" name="ids" id="ids">
      
          <small class="d-block text-end mt-3" type="submit">
            <button class="btn btn-sm btn-bd-light mb-3 mb-md-0 rounded-2" type="submit">
              Update Data</button>
          </small>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection