<div x-data="{
    list:[],
    param:[],
    search:'',
    open: false,
    get filterItems(){
        const fuseOptions = {
            // isCaseSensitive: true,
            // includeScore: true,
            // ignoreDiacritics: true,
            // shouldSort: true,
            // includeMatches: false,
            // findAllMatches: true,
            // minMatchCharLength: 1,
            // location: 0,
            // threshold: 0.6,
            // distance: 100,
            // useExtendedSearch: false,
            // ignoreLocation: false,
            // ignoreFieldNorm: false,
            // fieldNormWeight: 1,
            keys: ['text']
        };
        const fuse = new Fuse(this.list, fuseOptions);
        let fuseFilter = fuse.search(this.search);
        if(!this.search) return this.list;
        else return _.map(fuseFilter,obj => obj.item);
    }
}" @click.away="open=false" class="relative w-full border divide-y rounded">
{{ $slot  }}

    <button
        @click="open=!open;$nextTick(()=>{ $refs.input.focus() })"
        class="w-full flex justify-between px-3 py-0.5 capitalize items-center w-48">
        <div class="flex flex-wrap gap-2">
            <span x-show="param.length===0">Select</span>
            <template x-for="(item, index) in list" :key="item.value">
                <span class="text-xs px-2 py-0.5 rounded-md bg-blue-500 text-white" x-show="param.includes(item.value.toString())" x-text="item.text"></span>
            </template>
        </div>
        <label :class="{'rotate-180':open}"><x-heroicon-o-chevron-down class="w-5 h-5" /></label>
    </button>
    <div x-show="open" class="absolute left-0 z-20 w-full border divide-y bg-gray-50 top-10">
        <div class="p-2">
            <input
                x-ref="input"
                type="text"
                x-model="search"
                placeholder="search"
                class="border px-3 py-0.5 w-full text-sm">
        </div>
        <ul class="overflow-auto divide-y  max-h-48 min-h-16">
            <template x-for="(item, index) in filterItems" :key="item.value">
                <li>
                    <label :class="{
                            'bg-blue-400':param.includes(item.value.toString()),
                            'hover:bg-gray-200':!param.includes(item.value.toString()),
                        }" x-text="item.text"
                        :for="item.value" class="px-3 py-0.5 cursor-default flex items-center gap-2">
                    </label>
                    <input type="checkbox" :id="item.value" :value="item.value" x-model="param" class="hidden">
                </li>
            </template>
        </ul>
        <div class="p-3"></div>
    </div>

</div>
