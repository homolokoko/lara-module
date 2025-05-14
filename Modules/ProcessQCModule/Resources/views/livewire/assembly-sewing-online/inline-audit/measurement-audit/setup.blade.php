<div>
    <div x-data="{
        filter:{
            sizes:[],
        },
        data:{
            sizes:[],
        },
        header:[],
        body:[],
        assignment:[],
        measurement_specs:null,
        submit(){
            let rows = _.split(this.measurement_specs,'\n');
            let header = ['pom','desc','tol_low','tol_hight'];
            _.each(this.filter.sizes,size=>header.push(size));
            let tbl_rows = _.map(_.dropRight(rows),item=>item);
            let tbl_cols = _.map(tbl_rows,row=>_.zipObject(header, _.split(row,'\t')));
            this.header = header;
            console.log('header', this.header);
            this.body = tbl_cols;
            console.log('body', this.body);
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
        <span class="p-5 border" x-text="JSON.stringify(body)"></span>
        <table>
            <thead>
                <tr>
                    <template x-for="(th, index) in header" :key="index">
                        <th scope="col" x-text="th" class="px-3 py-2 border"></th>
                    </template>
                </tr>
            </thead>
            <tbody>
                <template x-for="(rows, i) in body" :key="i">
                    <tr>
                        <td></td><span x-text="JSON.stringify(rows)"></span></td>
                    </tr>
                </template>
            </tbody>
        </table>

    </div>
    <h3>The <code>Setup</code> livewire component is loaded from the <code>ProcessQCModule</code> module.</h3>
</div>
