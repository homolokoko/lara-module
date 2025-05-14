<?php

namespace App\Http\Livewire\Client\PhotographUpload;

use App\Library\GetValueTextList;
use Livewire\Component;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\Client\PhotographUpload;
use Illuminate\Support\Facades\Storage;

class Report extends Component
{
    public function render()
    {
        return view('livewire.client.photograph-upload.report');
    }

    public function loadDesc()
    {
        return GetValueTextList::convert(PhotographUpload\Desc::get());
    }

    public function loadTemplates()
    {
        $header =  PhotographUpload\ReportEntity::query()
        ->orderBy('sort')->get()
        ->map(function($item){
            return [
                'id'=>$item->id,
                "colspan" => $item->colspan,
                "text" => $item->desc->name,
                'file' =>$item->img,
                'img_url' => Storage::disk('inspection')->url($item->img),
            ];
        });
        return $header ? $header->toArray() : [['id'=>1,'colspan'=>1,'text'=>'']];
    }

    public function submit($data){
        $dataList = Arr::get($data,'result');
        $purchaseOrder = Arr::get($data,'purchaser_orders');
        // dd(['dataList'=>$dataList,'purchase_order'=>$purchaseOrder]);
        $this->removeOldBeforeSumitNew($purchaseOrder);
        foreach($dataList as $key=> $item){
            Arr::set($dataSubmit,'sort',++$key);
            Arr::set($dataSubmit,'colspan',Arr::get($item,'colspan',null));
            // Arr::set($dataSubmit,'header_id',$this->headerId);
            // Arr::set($dataSubmit,'purchase_order_id',$purchaseOrder);
            Arr::set($dataSubmit,'title_id',$this->collectTitleId(Arr::get($item,'text')));
            Arr::set($dataSubmit,'description',Arr::get($item,'text'));
            // Arr::set($dataSubmit,'is_rotate',Arr::get($item,'is_rotate',0));
            // Arr::set($dataSubmit,'buyer_id',Arr::get($item,'buyer_id',8));
            Arr::set($dataSubmit,'img',Arr::get($item,'file',null));
            // Arr::set($dataSubmit,'header_id', $this->submitToHeader($dataSubmit)->id);
            $this->submitToDetail($dataSubmit);
        }
    }

    protected function removeOldBeforeSumitNew($purchase_order)
    {
        PhotographUpload\ReportEntity::truncate();
    }

    protected function submitToDetail($data)
    {
        // Arr::set($data_where,'header_id',Arr::get($data, 'header_id'));
        // Arr::set($data_where,'purchase_order_id',Arr::get($data, 'purchase_order_id'));
        // Arr::set($data_where,'title_id',Arr::get($data, 'title_id'));
        // Arr::set($data_submit,'header_id',Arr::get($data, 'header_id'));
        Arr::set($data_submit,'desc_id',Arr::get($data, 'title_id'));
        Arr::set($data_submit,'description',Arr::get($data, 'description'));
        Arr::set($data_submit,'colspan',Arr::get($data, 'colspan'));
        // Arr::set($data_submit,'is_rotate',Arr::get($data, 'is_rotate'));
        Arr::set($data_submit,'sort',Arr::get($data, 'sort'));
        Arr::set($data_submit,'img',Arr::get($data, 'img'));
        // Arr::set($data_submit,'purchase_order_id',Arr::get($data, 'purchase_order_id'));
        return PhotographUpload\ReportEntity::create($data_submit);
    }

    protected function collectTitleId($text)
    {
        $name = preg_replace('/\s+/', ' ', $text);
        $unique = Str::of($name)->trim()->lower()->snake();
        $phototitle = PhotographUpload\Desc::updateOrCreate(
            [ 'name'=> $unique ],
            [ 'name'=> $unique ]
        );
        return $phototitle->id;
    }
}
