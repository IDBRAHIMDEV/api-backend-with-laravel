<?php

namespace App\Http\Resources;


use App\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'code' => $this->id,
            'titre' => $this->title,
            'contenu' => $this->content,
            'category' => [
                'code' => $this->category_id,
                'libelle' => $this->category->label
            ],
            'user' => [
                'username' => $this->user->name,
                'code' => $this->user_id
            ],
            
            'date_modification' => $this->updated_at
        ];
    }
}
