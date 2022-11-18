@php
    $i = 0;
@endphp
@foreach($detail_order as $item)
    <tr>
        <td>{{$i += 1}}</td>
        <td>{{$item->product->nama}}</td>
        <td>{{ \Carbon\Carbon::parse($item->expired_date)->format('d M y') }}</td>
        <td>{{$item->jumlah}}</td>
        <td>{{$item->diskon}}</td>
        <td>{{$item->harga}}</td>
    </tr>
@endforeach

