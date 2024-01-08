@extends('template/admin')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Table Transaction</h3>
        </div>
        <div class="card-body">
            <a href=#>
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
            </a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>User ID</th>
                        <th>Product ID</th>
                        <th>Transaction Date</th>
                        <!-- Isi kolom sesuai dengan field yang ada di model Transaction -->
                        <th>Jumlah</th>
                        <th>Id Akun</th>
                        <th>Password</th>
                        <th>Catatan</th>
                        <th>Pembayaran</th>
                        <th>Nomor WhatsApp</th>
                        <th>Total Amount</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaction as $data)
                        <tr>
                            <td>{{ $data->transaction_id }}</td>
                            <td>{{ $data->user_id }}</td>
                            <td>{{ $data->product_id }}</td>
                            <td>{{ $data->transaction_date }}</td>
                            <!-- Isi kolom sesuai dengan field yang ada di model Transaction -->
                            <td>{{ $data->jumlah }}</td>
                            <td>{{ $data->id_akun }}</td>
                            <td>{{ $data->password }}</td>
                            <td>{{ $data->catatan }}</td>
                            <td>{{ $data->pembayaran }}</td>
                            <td>{{ $data->nomor_whatsapp }}</td>
                            <td>{{ $data->total_amount }}</td>
                            <td>
                                <!-- Actions -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <!-- DataTables & Plugins -->
    <script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ url('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
