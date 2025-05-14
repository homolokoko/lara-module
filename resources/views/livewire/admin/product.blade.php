<div>
    <div x-data="{
        page:'table',
        active_class:'text-white bg-green-500',
        inactive_class:'text-neutral-700 bg-slate-50',
        pageChange(page){
            if(page==='table')
                this.$dispatch('open-table-component',this.page=page)
            if(page==='create')
                this.$dispatch('open-create-component',this.page=page)
            if(page==='edit')
                this.$dispatch('open-edit-component',this.page=page)
        },
    }"
    @show-more-info.window="alert('')"
    >

        <div class="flex w-full border-b">
            <label @click="pageChange('table')" :class="page==='table' ? active_class:inactive_class" class="px-5 py-4 text-sm font-semibold rounded-t-md">Table</label>
            <label @click="pageChange('create')" :class="page==='create' ? active_class:inactive_class" class="px-5 py-4 text-sm font-semibold bg-green-500 rounded-t-md">Create</label>
            <label @click="pageChange('edit')" :class="page==='edit' ? active_class:inactive_class" class="px-5 py-4 text-sm font-semibold bg-green-500 rounded-t-md">Edit</label>
        </div>
        <div class="p-5 border">
            <template x-if="page==='table'">@include('admin.product.table')</template>
            <template x-if="page==='create'">@include('admin.product.create')</template>
            <template x-if="page==='edit'">@include('admin.product.edit')</template>
        </div>
    </div>
</div>
