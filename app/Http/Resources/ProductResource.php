<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'name'=> $this->name,
          'catid'=> $this->catid,
          'unit'=> $this->unit,
          'quantity'=> $this->quantity,
          'buy_price'=> $this->buy_price,
          'sale_price'=> $this->sale_price
        ];
    }
}
