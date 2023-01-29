@php
    $i = 0;
@endphp
@foreach($stockProduct as $item)
    <tr>
        <td>{{$i += 1}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->stock_last_month ?? '0'}}</td>
        <td>{{$item->stok_masuk ?? '0'}}</td>
        <td>{{$item->stok_keluar ?? '0'}}</td>
        <td style="text-align:right;" >{{$item->stock_last_month + $item->stok_masuk - $item->stok_keluar }}</td>
        <input type="hidden" name="stok_akhir[{{$item->product_id}}]" value="{{$item->stock_last_month + $item->stok_masuk - $item->stok_keluar}}">

    </tr>
@endforeach
