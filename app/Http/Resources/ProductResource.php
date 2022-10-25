<?php

namespace App\Http\Resources;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Product */
class ProductResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'diskon' => $this->diskon,
            'type' => $this->type,
            'category' => $this->category,
            'uom' => $this->uom,
            'harga' => $this->harga,
            'pelanggan' => CustomerResource::collection(Customer::all()),
        ];
    }
}
