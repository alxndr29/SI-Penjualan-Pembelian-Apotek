<div class="p-3">
    <div class="row gy-4">
        <div class="col-4">
            <span >Purchase Order</span>
            <h3 class="mt-2">PO-{{$purchase_order->no_transaction}}</h3>
        </div>
        <div class="col-4">
            <div class="mb-2">Supplier</div>
            <div class="badge badge-info">{{$purchase_order->Supplier->name}}</div>
        </div>
        <div class="col-4">
            <span class="mb-2">Metode Pembayaran</span>
            <h3>{{$purchase_order->payment_method}}</h3>
        </div>
        <div class="col-4">
            <span >Tanggal Transaksi</span>
            <h6 class="mt-2 text-primary">{{ \Carbon\Carbon::parse($purchase_order->transaction_date)->format('d-M-y h:m:s') }}</h6>
        </div>
        <div class="col-4">
            <div class="mb-2">Tanggal Di Tambahkan</div>
            <div class="badge badge-info">{{$purchase_order->created_at}}</div>
        </div>
    </div>
</div>

