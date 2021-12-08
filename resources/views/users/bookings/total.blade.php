<title>Halaman Nota</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body style="padding: 0 20;">
    <div>
      <section class="content">
        <div class="row">
            <div>
                <div class="span12">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><h2><strong>No Tagihan </strong># {{ $booking->id }}</h2></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              From
              <address>
                <strong>Admin SmartParking</strong><br>
                Kepulauan Riau, Tanjungpinang,<br> 
                Tanjungpinang Timur, 29122</br>
                Nomor Handphone: 0771 1234 56<br>
                Email: cs@smartparking.com
              </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
              To
              <address>
                <strong>{{ Auth::user()->name }}</strong><br>
                {{ Auth::user()->address }}<br>
                Nomor Handphone: {{ Auth::user()->phone }}<br>
                Tanggal Lahir : {{ Auth::user()->dateBirth }}<br>
                Email: {{ Auth::user()->email }}
              </address>
            </div>
            <div class="col-sm-4 invoice-col">
              {!! QrCode::size(100)->generate('{{ $booking->id }}'); !!}
            </div></br>
          </div>
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                  <th>No Tagihan</th>
                  <th>Lokasi Tempat Parkir</th>
                  <th>Kategori Kendaraan</th>
                  <th>Plat Nomor Kendaraan</th>
                  <th>Jumlah Pembelian Parkir</th>
                  <th>Harga Perkendaraan</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  @php
                    $total = 0;
                  @endphp
                    @foreach ($bookings as $b)    
                        <tr>
                            <td>{{ $b->id }}</td>
                            <td>{{ $b->place->placeName }}</td>
                            <td>{{ $category_vehicle->transportaionType }}</td>
                            <td>{{ $b->vehicle->platNumber }}</td>
                            <td>{{ $b->quantity }}</td>
                            <td>{{ number_format($parking->parkingPrice) }}</td>
                            @if ($b->status == 0)
                                <td>Belum Dibooking</td>
                            @endif
                            @if ($b->status == 1)
                                <td>Sudah Dibooking</td>
                            @endif
                            @if ($b->status == 2)
                                <td>Sudah Ditempati</td>
                            @endif
                        </tr>
                        @php
                            $total += $parking->parkingPrice * $b->quantity;
                        @endphp
                    @endforeach
                </tbody>
                <tr>
                  <td colspan="3"></td>
                  <td><b>Total Biaya</b></td>
                  <td><b>Rp. {{ number_format($total) }}</b></td>
              </tr>
            </table>
          </div>
      </section>
    </div>
  </body>
   <script>
      window.print();
  </script>