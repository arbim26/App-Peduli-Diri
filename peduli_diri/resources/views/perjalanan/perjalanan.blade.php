@extends('layout.main')

@section('content')
    <div class=" grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="text-center">Data Guru</h3>
                    <a href="#" type="button" class="btn btn-primary btn-md mt-3" >
                        Isi Daftar
                    </a>

                  <div class="table-responsive mt-3">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Tanggal</th>
                          <th>Waktu</th>
                          <th>Lokasi</th>
                          <th>Suhu Tubuh</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($data as $row)
                        <tr>
                            <td>{{$row->tanggal}}</td>
                            <td>{{$row->waktu}}</td>
                            <td>{{$row->lokasi}}</td>
                            <td>{{$row->suhu}}</td>v>
                            </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection