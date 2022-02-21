<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'nombre' => $this->nombre,
            'precio' => $this->precio,
            'author' => [
                'name' => $this->user->name,
                'email' => $this->user->email,
            ],
            'created_at' => $this->created_at,

        ];
    }
}
