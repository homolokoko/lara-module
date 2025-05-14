{{-- @extends('layouts.base')
@section('content')
    @livewire('admin.product',key('admin.product'))
@endsection --}}

<x-app-layout>
    <x-slot name="header">Example</x-slot>
    <div class="px-12 py-8">
        {{-- @livewire('admin.product',key('admin.product')) --}}
        <div class="shadow-lg p-11 rounded-xl">
            <div x-data="{
                page:'table',
                param:null,
                active_class:'text-white bg-green-500',
                inactive_class:'text-neutral-700 bg-slate-50',
                showMoreDetail(id){
                    this.page = 'edit'
                    this.param = id
                },
            }"
            @ShowMoreDetail.window="console.log('Heelo')"
            >

                <div class="flex w-full border-b">
                    <label @click="page='table'" :class="page==='table' ? active_class:inactive_class" class="px-5 py-4 text-sm font-semibold rounded-t-md">Table</label>
                    <label @click="page='create'" :class="page==='create' ? active_class:inactive_class" class="px-5 py-4 text-sm font-semibold bg-green-500 rounded-t-md">Create</label>
                    <label @click="page='edit'" :class="page==='edit' ? active_class:inactive_class" class="px-5 py-4 text-sm font-semibold bg-green-500 rounded-t-md">Edit</label>
                </div>
                <div class="p-5 border">
                    <template x-if="page==='table'">@include('admin.product.table')</template>
                    <template x-if="page==='create'">@include('admin.product.create')</template>
                    <template x-if="page==='edit'">@include('admin.product.edit')</template>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
