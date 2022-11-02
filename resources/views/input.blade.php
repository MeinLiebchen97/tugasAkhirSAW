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

  <div>
      <form action="/saw" method="post" class="my-3 bg-body rounded form-prevent">
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
            <td class="rdo-ctr"><input type="radio" value="0" name="rate" onclick="clkrate(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.25" name="rate" onclick="clkrate(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.5" name="rate" onclick="clkrate(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.75" name="rate" onclick="clkrate(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="1" name="rate" onclick="clkrate(this.value)"/></td>
            <td>
              <input type="text" name="c1" class="rounded-top @error('c1') is-invalid @enderror" id="c1" hidden>
              @error('c1')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </td>
          </tr>
          <tr>
            <td class="first-col">How far their destination is?</td>
            <td class="rdo-ctr"><input type="radio" value="0" name="satisfied" onclick="clksatisfied(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.25" name="satisfied" onclick="clksatisfied(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.5" name="satisfied" onclick="clksatisfied(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.75" name="satisfied" onclick="clksatisfied(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="1" name="satisfied" onclick="clksatisfied(this.value)"/></td>
            <td>
              <input type="text" name="c2" class="rounded-top @error('c2') is-invalid @enderror" id="c2" hidden>
              @error('c2')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </td>
          </tr>
          <tr>
            <td class="first-col">When they are open?</td>
            <td class="rdo-ctr"><input type="radio" value="0" name="prices" onclick="clkprices(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.25" name="prices" onclick="clkprices(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.5" name="prices" onclick="clkprices(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.75" name="prices" onclick="clkprices(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="1" name="prices" onclick="clkprices(this.value)"/></td>
            <td>
              <input type="text" name="c3" class="rounded-top @error('c3') is-invalid @enderror" id="c3" hidden>
              @error('c3')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </td>
          </tr>
          <tr>
            <td class="first-col">How would you rate their facilities have offer?</td>
            <td class="rdo-ctr"><input type="radio" value="0" name="timeliness" onclick="clktimeliness(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.25" name="timeliness" onclick="clktimeliness(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.5" name="timeliness" onclick="clktimeliness(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.75" name="timeliness" onclick="clktimeliness(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="1" name="timeliness" onclick="clktimeliness(this.value)"/></td>
            <td>
              <input type="text" name="c4" class="rounded-top @error('c4') is-invalid @enderror" id="c4" hidden>
              @error('c4')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </td>
          </tr>
          <tr>
            <td class="first-col">What is the mode of the visitors age?</td>
            <td class="rdo-ctr"><input type="radio" value="0" name="support" onclick="clksupport(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.25" name="support" onclick="clksupport(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.5" name="support" onclick="clksupport(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="0.75" name="support" onclick="clksupport(this.value)"/></td>
            <td class="rdo-ctr"><input type="radio" value="1" name="support" onclick="clksupport(this.value)"/></td>
            <td>
              <input type="text" name="c5" class="rounded-top @error('c5') is-invalid @enderror" id="c5" hidden>
              @error('c5')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </td>
          </tr>
        </table>
        <a href="{{ url('/saw') }}" class="btn btn-sm btn-bd-light mt-4" style="margin-left:85%">Cancel</a>
        <small class="d-block text-end mt-4" type="submit" style="float:right">
          <button class="btn btn-sm btn-bd-light mb-3 mb-md-0 rounded-2" type="submit">
            Add Data</button>
        </small>
        <hr>
      </form>
  </div>
@endsection