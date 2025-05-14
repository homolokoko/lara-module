<div id="inspection-photograph-review">

    <div x-data="{
        purchase_orders:[
            {value:1, text:'134235857 32'},
            {value:2, text:'121324545 64'},
        ],
        purchase_order:1,
        desc_index:null,
        popup:false,
        obj: null,
        collection:[],
        sortedItems:[],
        dataSource: {
            desc:[]
        },
        filter:{
            desc:''
        },
        selected:[],
        step:null,
        removeItem(index){
            _.pullAt(this.collection,index)
        },
        changeDesc(index){
            this.popup = !this.popup;
            this.desc_index = index
            this.selectedIndex = index

        },
        selectedIndex:null,
        addMoreItem(index){
            swal.fire({
                title:'How many item you add more ?',
                input: 'number',
                inputLabel: 'Please Enter your number',
                showCancelButton:true,
                confirmButtonText: 'Add'
            }).then((result)=>{
                if(result.isConfirmed){
                    _.times(result.value,(i)=>{
                        console.log('time : ',index+1+i)
                        this.collection.splice(index+1+i,0,{
                            text: '',
                            colspan: 1,
                            id: this.collection.length+1
                        })
                    })
                }
            })
            this.step=index
        },
        appendItem(){
           let step = this.collection[this.collection.length-1].id
            _.each(this.selected,(select)=>{
                let item = {}
                item.colspan = 1
                item.text = select
                item.id = ++step
                this.collection.push(item)
            })
        },
        save(){
            let overallResult = []
            console.log('sortedItems', this.sortedItems)
            if(this.sortedItems.length===0){
               overallResult =  _.merge({result:this.collection},{purchaser_orders:this.purchase_order})
            }else{
                _.each(this.sortedItems,(number)=>{
                    if(number){
                        console.log('Number', number)
                        newItem = _.find(this.collection,item=>item.id==number)
                        console.log('New Item', newItem)
                        overallResult.push(newItem)
                    }
                })
                overallResult = _.merge({result:overallResult},{purchaser_orders:this.purchase_order})
            }
            console.log('overallResult',overallResult)
            this.$wire.submit(overallResult)
        },
        clonePhotos(val){
            @this.clonePhotos(val)
        },
        loadTemplatePhotographs(){
            this.collection = []
            @this.loadTemplatePhotographs()
                .then((response) => { this.collection = response } )
        },
        init(){
            this.$wire.loadTemplates()
                    .then((response) => {
                        this.collection = response
                        console.log('kdsngglkeg',this.collection)
                    })
            this.$wire.loadDesc()
                .then((response)=>{ this.dataSource.desc = response; console.log('response', response) })
            {{-- @this.load()
                .then((response)=>{
                    this.dataSource = response
                    console.log('photograp.review', this.dataSource)
                    _.each(response,(item)=>{
                        this.selected.push(item.text)
                    })
                }) --}}

            {{-- @this.loadPurchaseOrder()
                .then((response)=>{
                        console.log('purchase_orders',response)
                        this.purchase_orders = response
                    }) --}}


            {{-- $watch('purchase_order',(val)=>{
                if(val)
                     @this.loadTemplates()
                        .then((response) => {
                            this.collection = response
                            console.log('kdsngglkeg',this.collection)
                        })
            }) --}}

            new Sortable.create($refs.app, {
                animation: 150,
                handle: '.dragicon',
                onEnd: (event) => {
                    console.log('event.target.children',event.target.children)
                    this.sortedItems = Array.from(event.target.children).map((item) => item.dataset.id);
                },
                ghostClass: 'sortable-ghost', // Class name for the drop placeholder
                chosenClass: 'sortable-chosen', // Class name for the chosen item
                dragClass: 'sortable-drag' // Class name for the dragging item
            });
        }
    }">

    <div class="h-screen overflow-auto border">
        <div x-ref="app" class="grid grid-cols-2">
            <template x-for="(item, index) in collection" :key="index">
                <div x-data="{
                    input:'',
                    changeImg(val){
                        item.file = val
                        item.img_url = `/storage/inspection/${val}`
                        this.input = ''
                    }
                }" :class="{
                        'col-span-1':item.colspan===1,
                        'col-span-2':item.colspan===2,
                        'border-red-400':step===index
                    }" class="block border-2 hover:border-blue-400" :data-id="item.id">
                    <div class="zaslepka"></div>
                    <div @click="addMoreItem(index)" class="relative">
                        <input type="text"
                            x-model="input"
                            @input="changeImg($event.target.value)"
                            class="absolute z-10 w-full h-full opacity-0">
                        <img :src="item.img_url ?? '/925072.png'" alt="" class="w-full">
                    </div>
                    <x-general.auto-complete>
                        <input type="hidden" x-modelable="model" x-model="item.text">
                        <input type="hidden" x-modelable="list" x-model="dataSource.desc">
                    </x-general.auto-complete>
                    <div class="flex w-full border insert-here">
                        <div class="flex">
                            <button class="flex justify-center p-2 text-black border shadow dragicon bg-gray-50">
                                <x-heroicon-o-menu-alt-4 class="w-5 h-5" />
                            </button>
                            <button class="flex justify-center p-2 text-black bg-blue-500 border dragicon">
                                <x-heroicon-o-pencil class="w-5 h-5" />
                            </button>
                            <button @click="removeItem(index)" class="flex justify-center p-2 text-black bg-red-500 border ">
                                    <x-heroicon-o-trash class="w-5 h-5" />
                            </button>

                            <button x-show="item.colspan===2" @click="item.colspan=1" class="flex justify-center p-2 text-black bg-green-500 border">
                                <x-heroicon-s-chevron-double-left class="w-5 h-5" />
                            </button>
                            <button x-show="item.colspan===1" @click="item.colspan=2" class="flex justify-center p-2 text-black bg-green-500 border">
                                <x-heroicon-s-chevron-double-right class="w-5 h-5" />
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

        <div x-show="collection.length > 0" class="flex w-full p-3 justify-evenly">
            <x-jet-button @click="save()">save</x-jet-button>
            <div x-show="purchase_order" x-data="{show:false}" class="relative ">
                <span @click="show=true"><x-jet-button>clone to other purchase order</x-jet-button></span>
                <div x-show="show" class="fixed top-0 left-0 z-10 w-screen h-screen">
                    <div class="flex items-center justify-center w-full h-full bg-gray-500 bg-opacity-50">
                        <div class="flex flex-col gap-4 p-5 bg-white rounded-lg">
                            <div class="flex justify-between">
                                <h3 class="text-lg font-bold">Clone To Other Purchase Order</h3>
                                <button @click="show=false"><x-heroicon-s-plus-circle /></button>
                            </div>
                            <ul class="overflow-auto max-h-48">
                                <template x-for="(item, index) in purchase_orders" :key="item.value">
                                    <button @click="clonePhotos(item.value);show=false"
                                        class="w-full px-5 py-4 text-sm font-bold tracking-wider uppercase border rounded-md"
                                        :disabled="item.value===purchase_order"
                                        :class="{'bg-gray-300' : item.value===purchase_order}"><span x-text="item.text"></span></button>

                                </template>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Knowing others is intelligence; knowing yourself is true wisdom.
</div>
