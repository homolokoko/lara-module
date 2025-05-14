<div>
    <div x-data="{
        filter:{
            sizes:[],
        },
        data:{
            sizes:[],
        },
        assignment:[],
        measurement_specs:null,
        submit(){
            let rows = _.split(this.measurement_specs,'\n');
            let header = ['pom','desc','tol_low','tol_hight'];

            _.each(this.filter.sizes,(size)=>{ header.push(size) })

            let tbl_rows = _.map(_.dropRight(rows),item=>item)
            let tbl_cols = _.map(tbl_rows);
            console.log('header', header);
            console.log('tbl_rows', tbl_rows);
            console.log('sizes', this.filter.sizes);
        },
        init(){
            this.$wire.getData()
                .then((response)=>{
                    this.data.sizes = response.sizes
                    console.log('response',response);
                })
        }
    }" class="p-5 border rounded-md">

        <x-select-multiple>
            <input x-model="list" x-modelable="data.sizes" hidden>
            <input x-model="param" x-modelable="filter.sizes" hidden>
        </x-select-multiple>
        <textarea x-model="measurement_specs" class="w-full textarea input-bordered"></textarea>
        <button class="btn" @click="submit()">console</button>

    </div>
    <h3>The <code>Setup</code> livewire component is loaded from the <code>ProcessQCModule</code> module.</h3>
</div>
