<div>

    <div x-data="{
        data:[],
        goFirstPage(){
            axios
                .get(this.data.first_page_url)
                .then((response)=>{ this.data=response.data })
        },
        golastPage(){
            axios
                .get(this.data.last_page_url)
                .then((response)=>{ this.data=response.data })
        },
        goPrevPage(){
            axios
                .get(this.data.prev_page_url)
                .then((response)=>{ this.data=response.data })},
        goNextPage(){
            axios
                .get(this.data.next_page_url)
                .then((response)=>{ this.data=response.data })
        },
        goParamPage(i){
            axios
                .get(`http://localhost:8000/api/admin/product/list-all?page=${i}`)
                .then((response)=>{ this.data=response.data })
        },
        init(){
            axios
                .get(`http://localhost:8000/api/admin/product/list-all`)
                .then((response)=>{ this.data=response.data })
        }
    }" class="space-y-4">

    <div class="grid grid-cols-3 gap-5">
        <template x-for="(item, index) in data.data" :key="item.id">
            <div class="overflow-hidden border divide-y rounded-lg shadow-lg">
                <img class="block" :src="item.image.img_url" alt="">
                <div class="flex-auto p-2 ">
                    <label class="w-full px-4 py-3 text-xs font-semibold uppercase" for=""><span x-text="item.name"></span></label>
                    <button class="px-3 py-1 text-white rounded-md bg-slate-700" @click="showMoreDetail(item.id)">show more <span x-text="item.id"></span></button>
                </div>
            </div>
        </template>
    </div>

    <div class="grid w-full grid-flow-col overflow-hidden divide-x rounded shadow">
        <label class="px-3 py-0.5 text-xs" for="">from: <span x-text="data.from"></span></label>
        <label class="px-3 py-0.5 text-xs"  for="">to: <span x-text="data.to"></span></label>
        <label class="px-3 py-0.5 text-xs"  for="">current: <span x-text="data.current_page"></span></label>
        <label class="px-3 py-0.5 text-xs"  for="">last: <span x-text="data.last_page"></span></label>
        <label class="px-3 py-0.5 text-xs"  for="">per: <span x-text="data.per_page"></span></label>
        <label class="px-3 py-0.5 text-xs"  for="">total: <span x-text="data.total"></span></label>
    </div>
    <div class="grid w-full grid-flow-col overflow-hidden divide-x rounded shadow">
        <button @click="goFirstPage()" class="px-3 py-0.5 text-xs font-semibold bg-slate-500 text-white">First Page</button>
        <button @click="goPrevPage()" class="px-3 py-0.5 text-xs font-semibold bg-slate-500 text-white">Prev Page</button>
        <template x-for="i in data.last_page"><button @click="goParamPage(i)" class="px-3 py-0.5 text-xs font-semibold bg-slate-500 text-white"><span x-text="i"></span></button></template>
        <button @click="goNextPage()" class="px-3 py-0.5 text-xs font-semibold bg-slate-500 text-white">Next Page</button>
        <button @click="golastPage()" class="px-3 py-0.5 text-xs font-semibold bg-slate-500 text-white">Last Page</button>
    </div>
</div>
