<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Symmetric') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div x-data="{ tab:2 }"
                class="bg-white overflow shadow-xl sm:rounded-lg">
                <div class="tabs">
                    <a @click="tab=1" :class="{
                            'tab-active text-blue-500': tab===1,
                        }" class="tab tab-lifted">Table</a>
                    <a @click="tab=2" :class="{
                            'tab-active text-blue-500': tab===2,
                        }" class="tab tab-lifted">Create</a>
                </div>
                <div>
                    <div x-show="tab===1" class="p-5">@livewire('admin.symmetric.table', key('admin.symmetric.table'))</div>
                    <div x-show="tab===2" class="p-5">@livewire('admin.symmetric.create', key('admin.symmetric.create'))</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
