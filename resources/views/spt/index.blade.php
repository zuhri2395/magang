@extends('layout.master')

@section('breadcrumbPath')
    <li class="active">SPT</li>
    <li>
        <a href="{{url('/spt/create')}}">Input SPT</a>
    </li>
@endsection

@section('contentHeading')
    Surat Perintah Tugas
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <h4 class="margin-bottom-15">Daftar Surat Perintah Tugas</h4>
                <table class="table table-striped table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="text-center">No Surat</th>
                            <th class="text-center">Tanggal Keluar SPT</th>
                            <th class="text-center">No DPA</th>
                            <th class="text-center">No SPD</th>
                            <th class="text-center">NIP Pegawai</th>
                            <th class="text-center">Keterangan SPT</th>
                            <th class="text-center">Lokasi SPT dikeluarkan</th>
                            <th class="text-center">Penandatangan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($sptData as $spt)
                        @if($nip = json_decode($spt->nip))
                        @endif
                            <tr>
                                <td>{{$spt->noSPT}}</td>
                                <td>{{$spt->tanggalSPT}}</td>
                                <td>{{$spt->noDPA}}</td>
                                <td>{{$spt->noSPD}}</td>
                                <td>
                                    @foreach($nip as $nama)
                                        {{App\Pegawai::find($nama)->nama}}
                                        <br>
                                    @endforeach
                                </td>
                                <td>{{$spt->keterangan}}</td>
                                <td>{{$spt->kotaSPT}}</td>
                                <td>{{$spt->penandatanganSPT}}</td>
                                @include('layout.actionForm', ['formAction' => 'TES', 'viewName' => 'noSPT'])
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection