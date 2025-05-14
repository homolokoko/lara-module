<?php

namespace Modules\Leather\Transformers\leature-audit;

use Illuminate\Http\Resources\Json\JsonResource;

class page extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
