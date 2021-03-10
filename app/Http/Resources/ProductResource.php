<?php

namespace App\Http\Resources;

use App\Catogery;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'product_id' =>$this->id,
            'product_slug' =>$this->slug,
            'product_link' =>$this->permalink,
            'product_name' =>$this->name,
            'product_description' =>$this->description,
            'product_price' =>$this->price,
            'product_havien'=>$this->stock_status,
            'product_catogries'=> new CatogeryResource($this->catogery),
            'product_tags'=> TagResource::collection($this->tags),
            'prodcut_coupon'=>CouponResource::collection($this->coupons),
            'prodcut_images'=> ImageResource::collection($this->images),
            'prodcut_dimension'=>ProductDimensionResource::collection($this->productDimension),
        ];
    }
}
