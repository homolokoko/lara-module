<div x-data="{
    isOpen: false,
    value:null,
    list:[],
    searchText:'',
    get filterData(){
        if(!this.searchText)
            return [];
        const fuse = new QMS.fuse(this.list, {
            keys: ['text'],
            includeScore: true
        })
        const results = fuse.search(this.search)
        return _.map(results, result => result.item)
    }
}">
    {{ @$modelable }}
    <div class="flex justify-between overflow-hidden rounded border shadow divide-x hover:shadow-md duration-200">
        <div class="px-4 py-2">
            <span class="font-semibold capitalize text-xs" x-show="!value">please select</span>
            <template x-for="(item, index) in list" :key="item.value">
                <span class="font-semibold capitalize text-xs" x-show="item.value=value" x-text="item.text"></span>
            </template>
        </div>
        <button class="p-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
              </svg>
        </button>
    </div>
    <div class="fixed top-0 left-0 w-screen h-screen">
        <div class="w-full h-full flex justify-center items-center bg-slate-500 bg-opacity-50 backdrop-blur-sm">
            <div class="rounded-lg shadow-lg bg-slate-700 text-white">

                <div class="px-5 py-4 text-sm font-bold uppercase">{{$title ?? 'Please Select Item'}}</div>
            </div>
        </div>
    </div>
</div>
