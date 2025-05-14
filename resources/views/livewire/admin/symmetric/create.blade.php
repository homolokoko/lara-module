<div>

    <div x-data="{
        data:{
            single:[],
            multiple:[]
        },
        filter:{
            single:{},
            multiple:[]
        },
        save(){
            console.log(this.filter);
        },
        init(){
            this.$wire.getProductDesc()
                .then((response)=>{
                    this.data.single=response;
                    this.data.multiple=response;
                })
        }
    }" class="flex flex-col space-y-3 p-3 border">
        <input type="text" class="input border">
        <fieldset>
            <legend for="">Single Select</legend>
            <x-fuse-select>
                <input type="hidden" x-model="list" x-modelable="data.single">
                <input type="hidden" x-model="param" x-modelable="filter.single">
            </x-fuse-select>
        </fieldset>
        <fieldset>
            <legend for="">Multiple Select</legend>
            <x-select-multiple>
                <input type="hidden" x-model="list" x-modelable="data.multiple">
                <input type="hidden" x-model="param" x-modelable="filter.multiple">
            </x-select-multiple>
        </fieldset>
        <button @click="save" class="btn">save</button>
    </div>
</div>
