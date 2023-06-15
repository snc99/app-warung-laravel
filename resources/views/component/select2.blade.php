{{-- <label for="nama1" class="col-form-label">Nama
    <select style="width: 20%" id="nama1" name="state" data-placeholder="Pilih Nama">
        <option value="">Pilih Nama</option>
        @foreach (\App\Models\TotalTagihan::getPilihanNama() as $id => $nama)
            <option value="{{ $id }}">{{ $nama }}</option>
        @endforeach
    </select>
</label> --}}
