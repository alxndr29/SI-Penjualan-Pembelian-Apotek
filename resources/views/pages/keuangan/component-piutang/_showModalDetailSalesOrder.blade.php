@php
$i = 0;
@endphp
@foreach($detail_order as $item)
<tr>
    <td>{{$i += 1}}</td>
    <td>{{$item->product->nama}}</td>
    <td>{{$item->jumlah}}</td>
    <td>{{$item->diskon}}</td>
    <td style="text-align:right;">{{number_format($item->harga,0,',','.') }}</td>
    <td style="text-align:right;">{{number_format($item->harga * $item->jumlah,0,',','.') }}</td>
</tr>
@endforeach