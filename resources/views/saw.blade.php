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

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Data Table</li>
    </ol>
  </nav>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Data Input</h6>

      <!-- Button add data modal -->
      <small class="d-block mt-3">
        <!--<a class="btn btn-sm btn-bd-light mb-3 mb-md-0 rounded-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Add Data
        </a>-->
        <a href="{{ url('/input') }}" class="btn btn-sm btn-bd-light mb-3 mb-md-0 rounded-2">
          Add Data
        </a>
      </small>

        <table class="table table-striped">
          <thead>
            <tr>
              <th style="width:3rem" scope="col" class="text-center">No</th>
              <th style="width:20rem" scope="col" class="text-center">Name</th>
              <th style="width:5rem" scope="col" class="text-center">C1</th>
              <th style="width:5rem" scope="col" class="text-center">C2</th>
              <th style="width:5rem" scope="col" class="text-center">C3</th>
              <th style="width:5rem" scope="col" class="text-center">C4</th>
              <th style="width:5rem" scope="col" class="text-center">C5</th>
              <th style="width:5rem" scope="col" class="text-center">Utility</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data1s as $data1)
            <tr>
              <td class="text-center">{{ $loop->iteration }}</td>
              <td>{{ $data1->name }}</td>
              <td class="text-center">{{ $data1->c1 }}</td>
              <td class="text-center">{{ $data1->c2 }}</td>
              <td class="text-center">{{ $data1->c3 }}</td>
              <td class="text-center">{{ $data1->c4 }}</td>
              <td class="text-center">{{ $data1->c5 }}</td>
              <td class="text-center">
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editData" data-dataid="{{$data1}}">Update</button>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#delData" data-dataid="{{$data1}}">Delete</button>
              </div>
            </td>
            </tr>    
            @endforeach
          </tbody>
        </table>
    <small class="d-block text-end mt-3">
      {{-- <a class="btn btn-sm btn-bd-light mb-3 mb-md-0 rounded-2" href="" title="View and edit this file on GitHub" target="_blank" rel="noopener">
        View on GitHub
      </a> --}}
      <a class="btn btn-sm btn-bd-light mb-3 mb-md-0 rounded-2" href="/normalize">
        Normalize
      </a>
    </small>
  </div>
  
  {{-- Edit Modal --}}
    <div class="modal fade" id="editData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
            <a href="{{ url('/saw') }}" class="btn btn-close"></a>
          </div>
          <div class="modal-body">
            <h3>Overall experience with our service</h3>
            <form action="{{ url('saw/'.$data1->id) }}" method="post" class="bg-body rounded">
              @method ('put')
              @csrf
              <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" autofocus placeholder="Name" required value="{{ old('name') }}"><label for="name">Name</label>
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div> 
                @enderror
              </div>
              <table>
                <tr>
                  <th class="first-col-text-center"></th>
                  <th style="width:5rem" class="text-center">0</th>
                  <th style="width:5rem" class="text-center">0,25</th>
                  <th style="width:5rem" class="text-center">0,5</th>
                  <th style="width:5rem" class="text-center">0,75</th>
                  <th style="width:5rem" class="text-center">1</th>
                </tr>
                <tr>
                  <td class="first-col">How would you rate their prices?</td>
                  <td class="rdo-ctr"><input type="radio" value="0" name="rate" id="rate1" onclick="clkrate(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.25" name="rate" id="rate2" onclick="clkrate(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.5" name="rate" id="rate3" onclick="clkrate(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.75" name="rate" id="rate4" onclick="clkrate(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="1" name="rate" id="rate5" onclick="clkrate(this.value)"/></td>
                </tr>
                <tr>
                  <td class="first-col">How far their destination is?</td>
                  <td class="rdo-ctr"><input type="radio" value="0" name="satisfied" id="sati1" onclick="clksatisfied(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.25" name="satisfied" id="sati2" onclick="clksatisfied(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.5" name="satisfied" id="sati3" onclick="clksatisfied(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.75" name="satisfied" id="sati4" onclick="clksatisfied(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="1" name="satisfied" id="sati5" onclick="clksatisfied(this.value)"/></td>
                </tr>
                <tr>
                  <td class="first-col">When they are open?</td>
                  <td class="rdo-ctr"><input type="radio" value="0" name="prices" id="pric1" onclick="clkprices(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.25" name="prices" id="pric2" onclick="clkprices(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.5" name="prices" id="pric3" onclick="clkprices(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.75" name="prices" id="pric4" onclick="clkprices(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="1" name="prices" id="pric5" onclick="clkprices(this.value)"/></td>
                </tr>
                <tr>
                  <td class="first-col">How would you rate their facilities have offer?</td>
                  <td class="rdo-ctr"><input type="radio" value="0" name="timeliness" id="time1" onclick="clktimeliness(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.25" name="timeliness" id="time2" onclick="clktimeliness(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.5" name="timeliness" id="time3" onclick="clktimeliness(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.75" name="timeliness" id="time4" onclick="clktimeliness(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="1" name="timeliness" id="time5" onclick="clktimeliness(this.value)"/></td>
                </tr>
                <tr>
                  <td class="first-col">What is the mode of the visitors age?</td>
                  <td class="rdo-ctr"><input type="radio" value="0" name="support" id="supp1" onclick="clksupport(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.25" name="support" id="supp2" onclick="clksupport(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.5" name="support" id="supp3" onclick="clksupport(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="0.75" name="support" id="supp4" onclick="clksupport(this.value)"/></td>
                  <td class="rdo-ctr"><input type="radio" value="1" name="support" id="supp5" onclick="clksupport(this.value)"/></td>
                </tr>
              </table>
              <input type="text" name="c1" id="c1" hidden>
              <input type="text" name="c2" id="c2" hidden>
              <input type="text" name="c3" id="c3" hidden>
              <input type="text" name="c4" id="c4" hidden>
              <input type="text" name="c5" id="c5" hidden>
              <input type="text" name="ids" id="ids" hidden>
          
              <small class="d-block text-end mt-3" type="submit">
                <button class="btn btn-sm btn-bd-light mb-3 mb-md-0 rounded-2" type="submit">
                  Edit Data</button>
              </small>
              
            </form>
            
          </div>
        </div>
      </div>
    </div>

    <!-- DELETE SAW -->
    <div class="modal fade" id="delData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Delete Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form action="{{ url('saw_del') }}" method="post" class="bg-body rounded">
              @csrf

              <p>Yakin Data <b id="data_nama"></b> ingin di hapus?</p>
              <input type="hidden" name="data" id="idsdel">
          
              <small class="d-block text-end mt-3" type="submit">
                <button class="btn btn-sm btn-bd-light mb-3 mb-md-0 rounded-2" type="submit">
                  Delete Data</button>
              </small>
            </form>
            
          </div>
        </div>
      </div>
    </div>

</div>

@endsection


