@extends('layout.main')

@section('content')
<div class="py-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
        <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
        <li class="breadcrumb-item active"><a href="#">Report</a></li>
      </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
      <div class="mb-3 mb-lg-0">
        <h1 class="h4">History Data</h1>
        <p class="mb-0">Rekap seluruh data laporan tambal jalan</p>
      </div>
      <div>
        {{-- <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/tables/"
          class="btn btn-outline-gray"><i class="far fa-question-circle mr-1"></i> Bootstrap Tables Docs</a> --}}
      </div>
    </div>
  </div>

  <div class="card border-light shadow-sm mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-centered table-nowrap mb-0 rounded">
          <thead class="thead-light">
            <tr>
              <th class="border-0">Nama Pelapor</th>
              <th class="border-0">Alamat</th>
              <th class="border-0">Lokasi Laporan</th>
              <th class="border-0">Petunjuk Lokasi</th>
              <th class="border-0">Status</th>
            </tr>
          </thead>
          <tbody id="tbody">
            <!-- Item -->

            <!-- End of Item -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('scripts')

<script>

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  firebase.database().ref('Lapor/').on('value', function (snapshot) {
    var value = snapshot.val();
    var htmls = [];
    $.each(value, function (index, value) {
        let no = 1;
        var status;

        if(value.status == '1')
        {
            status = 'masuk';
        }
        else if(value.status == '2')
        {
            status = 'diterima'
        }
        else if(value.status == '3')
        {
            status = 'selesai'
        }

        if (value) {
            htmls.push('<tr>\
            <td>' + value.nama_pelapor + '</td>\
            <td>' + value.alamat + '</td>\
            <td><span class="fas fa-globe-europe"></span></span> ' + value.lokasi_jalan_rusak + '</td>\
            <td><span class="fas fa-globe-europe"></span></span> ' + value.petunjuk_lokasi + '</td>\
            <td><span class="btn btn-info btn-sm">'+ status +'</span></td>\
        </tr>');
        }
        no = no + 1
        lastIndex = index;
    });
    $('#tbody').html(htmls);
});

</script>
@endsection
