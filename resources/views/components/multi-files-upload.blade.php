
@props(['modelabel'])
<div x-data="{
handleFilesChange(e){
            this.photographs = []
            _.each(e.target.files,(file, index)=>{
                console.log('upload')
                this.fileToBase64(file)
                    .then((result)=>{
                        @this.uploadBase64(result)
                            .then((response)=>{
                                this.photographs.push(response)
                            })
                    })
            })
        },
}">
    <div class="relative flex items-center justify-center border-2 border-dashed rounded-lg">
        <div class="flex flex-col items-center justify-center p-10 space-y-3">
            <label for="files" class="px-4 py-2 text-xs font-semibold tracking-wider text-white uppercase bg-red-400 rounded-md">Browse</label>
            <h3 class="font-bold tracking-wider text-gray-700 uppercase text-md"> Drop files here </h3>
        </div>{{ $modelable }}
        <input @change="handleFilesChange" id="files" type="file" class="absolute top-0 left-0 w-full h-full p-10 bg-red-100 opacity-0" multiple />
    </div>
</div>
