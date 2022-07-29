@extends('layout.main')

@section('content')
    <div class=" grid-margin stretch-card">
    <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form class="forms-sample" action="/insert" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="nik">Nik</label>
                      <input type="number" name="nik" class="form-control" id="nik" placeholder="Nik">
                    </div>
                    <div class="form-group">
                      <label for="tanggal">Tanggal</label>
                      <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="DD/MM/YY">
                    </div>
                    <div class="form-group">
                      <label for="waktu">Waktu</label>
                      <input type="time" name="waktu" class="form-control" id="waktu" placeholder="Waktu">
                    </div>
                    <div class="form-group">
                      <label for="lokasi">Lokasi</label>
                      <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Lokasi">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <input type="number" class="form-control" placeholder="00.0" required name="suhu" step="any">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            </div>
@endsection