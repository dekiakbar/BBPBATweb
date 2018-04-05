@extends('master')
@section('judul','Daftar Data Program Magang')

@section('isi')
    <h3 class="ui center aligned header" style="margin-bottom: 30px">DATA ANAK MAGANG DAN PKLAN</h3>
    <div class="ui column stackable grid container">
        <div class="column">
            
            <h4>Range</h4>
              <form class="ui form" method="post" action="{{route('pkl.csv.download')}}">
                {{csrf_field()}}
                <div class="three fields">
                  <div class="field">
                    <label>Mulai Magang</label>
                    <div class="ui calendar">
                      <div class="ui input left icon">
                        <i class="calendar icon"></i>
                        <input type="text" name="dari" placeholder="Mulai" id="minimal">
                      </div>
                    </div>
                  </div>
                  <div class="field">
                    <label>Akhir Magang</label>
                    <div class="ui calendar">
                      <div class="ui input left icon">
                        <i class="calendar icon"></i>
                        <input type="text" name="sampai" placeholder="Akhir" id="maksimal">
                      </div>
                    </div>
                  </div>
                    <div class="field">
                    <label>Download</label>
                    <button type="submit" style="margin-bottom: 5px" class="ui small primary labeled icon button">
                    <i class="download icon"></i>CSV</button>
                  </div>
                </div>
              </form>
                
            <table class="ui celled table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Nama Instansi</th>
                  <th>Judul kegiatan</th>
                  <th>Mulai Kegiatan</th>
                  <th>Akhir Kegiatan</th>
                  <th class="one wide column">Opsi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datas as $data)
                  <tr>
                      <td>{{++$no}}</td>
                      <td>{{$data->nama_lengkap}}</td>
                      <td>{{$data->nama_instansi}}</td>
                      <td>{{$data->judul_kegiatan}}</td>
                      <td>{{$data->mulai}}</td>
                      <td>{{$data->selesai}}</td>
                      <td style="text-align: center">
                          <div class="mini ui buttons">
                            <a href="{{route('pkl.edit',$data->id)}}" class="ui green button">E</a>
                            <div class="or"></div>
                            <button class="ui red button">H</button>
                            <a href="{{route('pdf',$data->id)}}" style="margin-left: 5px" class="ui blue button">PDF</a>
                          
                          </div>
                          
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <div class="ui container center aligned">
              {{ $datas->appends(\Request::except('page'))->links('pagination.semantic-ui') }}
            </div>
        </div>
    </div>
@endsection