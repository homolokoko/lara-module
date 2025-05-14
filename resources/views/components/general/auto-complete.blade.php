<div x-data="{
    value:null,
    model:'',
    list:[],
    search:'',
    active:false,
    focusIndex:0,
    placeholder:'',
    hadleKeyDown(event){
        switch(event.key){
            case 'ArrowUp':
                if(this.focusIndex===0)
                    this.focusIndex=this.filterData.length-1
                else this.focusIndex--
                break;
            case 'ArrowDown':
                if(this.focusIndex===this.filterData.length-1)
                    this.focusIndex = 0
                else this.focusIndex++
                break;
            case 'Enter':
                this.selectItem(this.filterData[this.focusIndex])
                break;
            case 'Escape':
                this.active = false
                break;
        }
    },
    selectItem(item){
        this.model=item.text
        this.value=item.value
        this.active = !this.active
        this.$refs.focusInput.blur()
    },
    get filterData(){
        if(!this.model){
            return this.list;
        }else{
            const fuse = new Fuse(this.list, {
                keys: ['text'],
                includeScore: true
            });
            const results = fuse.search(this.model);
            return _.map(results, result => result.item);
        }
    }

}"
@keyup.up="hadleKeyDown"
@keyup.down="hadleKeyDown"
@keyup.enter="hadleKeyDown"
@keyup.escape="hadleKeyDown"
class="relative w-full" @click.away="active=false">
    {{@$slot}}
    <input @focus="active=true" x-ref="focusInput" type="text" class="w-full px-4 py-2 text-xs border border-gray-500" x-model="model">
    <template  x-if="active" x-cloak="active">
        <ul class="absolute z-20 w-full bg-white border border-blue-500 shadow">
            <template x-for="(item, index) in filterData" :key="item.value">
                <li
                    class="w-full px-3 py-1"
                    @click="selectItem(item)"
                    :class="{
                        'bg-blue-400 text-white':item.value===value,
                        'bg-yellow-300':focusIndex===index && item.value!==value,
                        }"
                    ><label x-text="item.text"></label></li>
            </template>
        </ul>
    </template>

</div>
