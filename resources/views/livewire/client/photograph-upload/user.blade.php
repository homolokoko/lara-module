<div id="inspection-photograph-upload">

    <div x-data="{
        files:[],
        photographs:[],
        loadPhotograph(){
            this.$wire.loadPhotograph()
                .then((response)=>{ this.photographs = response;console.log('laksdlkefe',response) })
        },
        handleFilesChange(e){
            this.photographs = []
            _.each(e.target.files,(file, index)=>{
                console.log('upload')
                this.fileToBase64(file)
                    .then((result)=>{
                        this.$wire.uploadBase64(result)
                            .then((response)=>{
                                this.photographs.push(response)
                            })
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
        copyClipboard(text){
            if(!text){
                toastIcon = 'error'
                toastTitle = 'Copy fail!'
            }else{
                toastIcon = 'success'
                toastTitle = 'Copied'
                navigator.clipboard.writeText(text)
            }
            swal.fire({
                toast: true,
                timer: 1500,
                icon: toastIcon,
                title: toastTitle,
                position: 'bottom-left',
                showConfirmButton: false,
            })
        },
        removePhotograph(index){
            _.pullAt(this.photographs,index)
            const photo = _.nth(this.photographs,index)
            this.$wire.removePhotograph(photo.id)
        },
        init(){ this.loadPhotograph() }
    }" class="space-y-5">

        <div class="relative flex items-center justify-center border-2 border-dashed rounded-lg">
            <div class="flex flex-col items-center justify-center p-10 space-y-3">
                <label for="files" class="px-4 py-2 text-xs font-semibold tracking-wider text-white uppercase bg-red-400 rounded-md">Browse</label>
                <h3 class="font-bold tracking-wider text-gray-700 uppercase text-md"> Drop files here </h3>
            </div>
            <input @change="handleFilesChange;$nextTick(()=>{ loadPhotograph() })" id="files" type="file" class="absolute top-0 left-0 w-full h-full p-10 bg-red-100 opacity-0" multiple />
        </div>

        <div class="grid h-screen grid-cols-3 gap-4 overflow-auto ">
            <template x-for="(photo, index) in photographs" :key="index">
                <div class="relative">
                    <div class="absolute flex flex-col gap-2 p-2 bg-gray-700 rounded-lg top-1 right-1">
                        {{-- <button
                                @click="copyClipboard(photo.file_path)"
                        ><x-heroicon-o-clipboard class="w-6 h-6 text-white hover:text-blue-500"></x-heroicon-o-clipboard></button> --}}
                        <button
                                @click="removePhotograph(index)"
                        ><x-heroicon-o-trash class="w-6 h-6 text-white hover:text-red-500"></x-heroicon-o-trash></button>
                        <button
                                @click="swal.fire({
                                    imageUrl: photo.image_lcl,
                                    showConfirmButton: false,
                                })"
                        > <x-heroicon-o-zoom-in class="w-6 h-6 text-white hover:text-green-500"></x-heroicon-o-zoom-in> </button>
                    </div>
                    <img
                        draggable="true"
                        @dragstart="$event.dataTransfer.setData('text/plain',photo.file_path)"
                        :src="photo.image_lcl" class="w-full border" />
                </div>
            </template>
        </div>


    </div>

</div>
