<div>
    <div x-data="{
        data:{
            name:'',
            price:'',
            promo:'',
            qty:'',
        },
        images:[],
        handleFilesChange(e){
            this.images = []
            _.each(e.target.files,(file, index)=>{
                this.fileToBase64(file)
                    .then((result)=>{
                        axios.post(
                            `http://localhost:8000/api/admin/product/save-one`,
                            {base64:result}
                        ).then((response)=>{ this.images.push(response.data) })
                    })
            })
        },
        fileToBase64(file){
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.onload = () => {
                    resolve(reader.result); // Resolve the promise with the Base64 string
                };
                reader.onerror = () => {
                    reject(new Error('Error reading file')); // Reject the promise on error
                };
                reader.readAsDataURL(file); // Start reading the file
            });
        },
        saveOne(){
            axios.post(
                    @js(route('admin.product.save-one')),
                    {data:this.data,images:this.images}
                ).then((response)=>{ console.log('response', response.data) })
        }
    }">
         <div class="flex">
            <div class="px-5">
                <div class="relative flex items-center justify-center border-2 border-dashed rounded-lg">
                    {{-- <div class="flex flex-col items-center justify-center p-10 space-y-3">
                        <label for="files" class="px-4 py-2 text-xs font-semibold tracking-wider text-white uppercase bg-red-400 rounded-md">Browse</label>
                        <h3 class="font-bold tracking-wider text-gray-700 uppercase text-md"> Drop files here </h3>
                    </div> --}}
                    <img src="/925072.png" alt="">
                    <input  @change="handleFilesChange" id="files" type="file" class="absolute top-0 left-0 w-full h-full p-10 bg-red-100 opacity-0" multiple />
                </div>

                <div class="grid grid-cols-3 gap-3">
                    <template x-for="(image, index) in images" :key="index">
                        <div class="relative w-auto h-auto">
                            <img :src="image.image_url" alt="" class="rounded-md">
                            <input type="radio" class="absolute w-8 h-8 top-3 right-3" x-model="image.active" x-bind:value="1" />
                        </div>
                    </template>
                </div>
            </div>
            <div class="px-5 py-4 rounded shadow-lg">
                <div class="flex flex-col gap-4">
                    <h3 class="text-sm font-bold">Create Form</h3>
                    <div class="space-y-3">
                        <label class="text-xs" for="">Name</label>
                        <x-jet-input type="text" x-model="data.name" />
                    </div>
                    <div class="space-y-3">
                        <label class="text-xs" for="">Price Tage</label>
                        <x-jet-input type="text" x-model="data.price" />
                    </div>
                    <div class="space-y-3">
                        <label class="text-xs" for="">Promotioin</label>
                        <x-jet-input type="text" x-model="data.promo" />
                    </div>
                    <div class="space-y-3">
                        <label class="text-xs" for="">Instock</label>
                        <x-jet-input type="text" x-model="data.qty" />
                    </div>
                </div>
            </div>
         </div>

         <div class="space-y-3">
            <x-jet-button @click="saveOne()">save</x-jet-button>
        </div>
    </div>
    In work, do what you enjoy.
</div>
