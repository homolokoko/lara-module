<div>
    <div
        x-data="{
            filter:{
                buyer:'',
                style:'',
                location:'',
                serial_number:'',
                status:false,
                time:{given:'',actual:''},
                pressure:{given:'',actual:''},
                temperature:{given:'',actual:''},
            },
            data:{
                buyers:@entangle('buyers'),
                styles:@entangle('styles'),
                locations:@entangle('locations'),
            },
            eraseFilter(){
                this.filter = {
                    buyer:'',
                    style:'',
                    location:'',
                    serial_number:'',
                    status:false,
                    time:{given:'',actual:''},
                    pressure:{given:'',actual:''},
                    temperature:{given:'',actual:''},
                }
            },
            submit(){
                console.log('result', this.filter);
                this.$wire.submit(this.filter)
                    .then(()=>{
                        swal.fire({
                            toast: true,
                            icon: 'success',
                            title: 'Done!',
                            timer: 1500,
                            position: 'top-end',
                            timerProgressBar: true,
                            showConfirmButton: false,
                        }).then(()=>{ this.eraseFilter(); })
                    });
            },
        }"
        class="flex flex-col gap-4 p-5 border rounded-md">

        <div class="">
            <label class="block label" for="">Buyer</label>
            <x-fuse-select>
                <input x-model="filter.buyer" x-modelable="param" hidden />
                <input x-model="data.buyers" x-modelable="list" hidden />
            </x-fuse-select>
        </div>

        <div class="">
            <label class="block label" for="">Style</label>
            <x-fuse-select>
                <input x-model="filter.style" x-modelable="param" hidden />
                <input x-model="data.styles" x-modelable="list" hidden />
            </x-fuse-select>
        </div>

        <div class="">
            <label class="block label" for="">Line</label>
            <x-radio-button>
                <input x-model="filter.location" x-modelable="param" hidden />
                <input x-model="data.locations" x-modelable="list" hidden />
            </x-radio-button>
        </div>

        <div class="">
            <label class="block label">Serial Number</label>
            <input type="text" x-model="filter.serial_number" class="w-full input input-bordered" />
        </div>

        <div class="space-y-3">
            <label class="block label">Temperature</label>
            <label class="input-group">
                <span> SUPPLIESR'S PARAMETER </span>
                <input type="number" x-model="filter.temperature.given" class="w-full input input-bordered">
            </label>
            <label class="input-group">
                <span> PRODUCTION SETTING </span>
                <input type="number" x-model="filter.temperature.actual" class="w-full input input-bordered">
            </label>
        </div>

        <div class="space-y-3">
            <label class="block label">Pressure</label>
            <label class="input-group">
                <span> SUPPLIESR'S PARAMETER </span>
                <input type="number" x-model="filter.pressure.given" class="w-full input input-bordered">
            </label>
            <label class="input-group">
                <span> PRODUCTION SETTING </span>
                <input type="number" x-model="filter.pressure.actual" class="w-full input input-bordered">
            </label>
        </div>

        <div class="space-y-3">
            <label class="block label"> Dwell Time </label>
            <label class="input-group">
                <span> SUPPLIESR'S PARAMETER </span>
                <input type="number" x-model="filter.time.given" class="w-full input input-bordered">
            </label>
            <label class="input-group">
                <span> PRODUCTION SETTING </span>
                <input type="number" x-model="filter.time.actual" class="w-full input input-bordered">
            </label>
        </div>

        <div class="">
            <label class="block label">Status</label>
            <button :class="{'btn-outline':!filter.status}" @click="filter.status=true" class="btn btn-primary" >Good</button>
            <button :class="{'btn-outline':filter.status}" @click="filter.status=false" class="btn btn-primary" >Not Good</button>
        </div>

        <div class="">
            <label class="block label">Comment</label>
            <textarea type="text" x-model="filter.comment" class="w-full textarea textarea-bordered" ></textarea>
        </div>

        <div>
            <button @click="submit()" class="btn">Submit</button>
        </div>


    </div>
</div>
