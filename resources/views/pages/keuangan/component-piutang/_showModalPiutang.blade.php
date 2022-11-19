<form method="GET" action="{{route('setStatusPiutang',$sales_order->id)}}" >
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="row gy-4">
            <div class="col-xl-12">
                <label class="form-label" for="sales_order">Nomor Sales Order</label>
                <input class="form-control form-control" id="sales_order"
                       placeholder="Masukan Kategori Produk" name="no_transaction" disabled value="{{$sales_order->no_transaction}}">
            </div>
            <div class="col-xl-8">
                <label class="form-label" for="Supplier">Customer</label>
                <input class="form-control form-control" id="Supplier"
                       placeholder="Masukan Kategori Produk"  disabled value="{{$sales_order->Customer->name}}">
            </div>
            <div class="col-xl-4">
                <label class="form-label" for="Supplier">Nomor BPJS</label>
                <input class="form-control form-control" id="Supplier"
                       placeholder="Masukan Kategori Produk"  disabled value="{{$sales_order->no_bpjs}}">
            </div>
            <div class="col-xl-12">
                <label class="form-label" for="Kategori">Tanggal Pelunasan</label>
                <div class="input-group">
                    <input class="datepicker-here form-control digits" type="date" name="tanggal_pelunasan">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit">Lunas</button>
    </div>
</form>

