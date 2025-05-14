<x-app-layout>
    <x-slot name="header">Defect Translation</x-slot>
    <div class="p-12">
        <div class="py-5 rounded-lg shadow-lg px-7 md:max-w-7xl">
            <div x-data="{
                data:[],
                init(){
                    axios.get(`http://localhost:8000/api/admin/defects/translations`)
                        .then((response)=>{ this.data = response.data;console.log('response', response.data) })
                }
            }" class="">
                <table class="w-full">
                    <thead>
                        <tr class="border-b-2 divide-x">
                            <th scope="col" class="px-4 py-3 text-sm font-semibold text-white bg-slate-500">EN</th>
                            <th scope="col" class="px-4 py-3 text-sm font-semibold text-white bg-slate-500">CN</th>
                            <th scope="col" class="px-4 py-3 text-sm font-semibold text-white bg-slate-500">KH</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <template x-for="(item, index) in data" :key="item.id">
                            <tr class="divide-x">
                                <template x-for="(lang, i) in item.translations" :key="lang.id"><td class="px-4 py-1 text-xs"><span x-text="lang.name">en</span></td></template>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>
