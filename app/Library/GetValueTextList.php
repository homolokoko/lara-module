<?php
namespace App\Library;

class GetValueTextList
{
    public static function convert($list)
    {
        return $list->map(fn($item)=>['value'=>$item->id,'text'=>$item->name])->toArray();
    }
}
