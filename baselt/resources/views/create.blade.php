@extends('layout');
@section('content')
<h1>hi from create</h1>

<form action="/listings" method="POSt">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">title</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
        @error('title')
        <h3 class="text-info">this is not correct</h3>

        @enderror

    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">tags</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tags">
        @error('tags')
        <h3 class="text-info">this is not correct</h3>

        @enderror

      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">company</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="company">
        @error('company')
        <h3 class="text-info">this is not correct</h3>

        @enderror

      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">location</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="location">
        @error('location')
        <h3 class="text-info">this is not correct</h3>

        @enderror

      </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>




@endsection


