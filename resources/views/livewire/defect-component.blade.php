<div>
    <div x-data="{
        name:'',
        save(){
            return swal.fire('Hello');
            this.$wire.save(this.name).then(()=>{ this.name = ''; })
        }
    }" class="flex divide-x">
        <div class="px-5">
            <div class="p-3 rounded border shadow space-y-4 divide-y">
                <h3 class="block font-bold text-lg capitalize">Add</h3>
                <div class="space-y-3">
                    <label class="block" for="">Name</label>
                    <x-jet-input x-model="name"></x-jet-input>
                    <x-drop-down></x-drop-down>
                </div>
                <x-jet-button @click="save">save</x-jet-button>
            </div>
        </div>
    </div>

    Nothing in the world is as soft and yielding as water.
</div>
