{{-- Ajax Tagihan --}}
<script>
    $(document).ready(function() {
        $('#nama1').select2({
            dropdownParent: $('#modalTagihan'),
        });
        $('#tagihan').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ url('TotalTagihan') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'nama',
                    name: 'Nama'
                }, {
                    data: 'total_tagihan',
                    name: 'Total Tagihan'
                }, {
                    data: 'bayar',
                    name: 'Bayar'
                }, {
                    data: 'sisa_tagihan',
                    name: 'Sisa Tagihan'
                }, {
                    data: 'aksi',
                    name: 'Aksi'
                }
            ]
        });
    });

    //  Meta CSRF Ajax Global
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Tombol ajax Tagihan
    $('body').on('click', '.tambah-bayar', function(e) {
        e.preventDefault();
        $('#modalTagihan').modal('show');

        $('.tombol-simpanTagihan').click(function() {
            $.ajax({
                url: 'TotalTagihan',
                type: 'POST',
                data: {
                    nama: $('#nama1 option:selected').text(),
                    total_tagihan: $('#total_tagihan').val(),
                    bayar: $('#bayar').val(),
                    sisa_tagihan: $('#sisa_tagihan').val()
                },
                success: function(response) {
                    // console.log(response)

                    if (response.errors) {
                        $('.alert-danger').removeClass('d-none');
                        $('.alert-danger').html("<ul>");
                        $.each(response.errors, function(key, value) {
                            $('.alert-danger').find('ul').append("<li>" + value +
                                "</li>");
                        });
                        $('.alert-danger').append("</ul>");
                    } else {
                        $('.alert-success').removeClass('d-none');
                        $('.alert-success').html(response.success);
                    }
                    $('#tagihan').DataTable().ajax.reload();
                }
            });
        });
    });



    // validasi tagihan
    $('#modalTagihan').on('hidden.bs.modal', function() {
        $('#nama').val('');
        $('#total_tagihan').val('');
        $('#bayar').val('');
        $('#sisa_tagihan').val('');

        $('.alert-danger').addClass('d-none');
        $('.alert-danger').html('');

        $('.alert-success').addClass('d-none');
        $('.alert-success').html('');

    })
</script>


{{-- Ajax Pencatatan --}}
<script>
    $(document).ready(function() {
        $("#tanggal").datepicker({
            showAnim: "slideDown",
            dateFormat: "yy-mm-dd"
        });
        $('#pencatatan').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ url('Pencatatan') }}",
            columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            }, {
                data: 'nama',
                name: 'Nama'
            }, {
                data: 'tanggal',
                name: 'Tanggal'
            }, {
                data: 'total_transaksi',
                name: 'Total Transaksi'
            }, {
                data: 'aksi',
                name: 'Aksi'
            }]
        });
    });

    //  Meta CSRF Ajax Global
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    // Tombol ajax Pencatatan
    $('body').on('click', '.tambah-pencatatan', function(e) {
        e.preventDefault();
        $('#modalPencatatan').modal('show');

        $('.tombol-simpan').click(function() {
            $.ajax({
                url: 'Pencatatan',
                type: 'POST',
                data: {
                    nama: $('#nama').val(),
                    tanggal: $('#tanggal').val(),
                    total_transaksi: $('#total_transaksi').val()
                },
                success: function(response) {
                    // console.log(response)
                    if (response.errors) {
                        $('.alert-danger').removeClass('d-none');
                        $('.alert-danger').html("<ul>");
                        $.each(response.errors, function(key, value) {
                            $('.alert-danger').find('ul').append("<li>" + value +
                                "</li>");
                        });
                        $('.alert-danger').append("</ul>");
                    } else {
                        $('.alert-success').removeClass('d-none');
                        $('.alert-success').html(response.success);
                    }
                    $('#pencatatan').DataTable().ajax.reload();
                }
            });
        });
    });

    // validasi pencatatan
    $('#modalPencatatan').on('hidden.bs.modal', function() {
        $('#nama').val('');
        $('#tanggal').val('');
        $('#total_transaksi').val('');

        // $('.alert-danger').addClass('d-none');
        // $('.alert-danger').html('');

        $('.alert-success').addClass('d-none');
        $('.alert-success').html('');
    });
</script>
