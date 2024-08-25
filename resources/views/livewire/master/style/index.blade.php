<div>
    <x-slot name="header">Styles</x-slot>

    <x-forms.m-panel>

        <x-forms.top-controls :show-filters="$showFilters"/>

        <x-table.caption :caption="'Styles'">
            {{$list->count()}}
        </x-table.caption>

        <x-table.form>

            <x-slot:table_header name="table_header" class="bg-green-600">
                <x-table.header-serial width="20%"/>
                <x-table.header-text wire:click.prevent="sortBy('vname')" sortIcon="{{$getListForm->sortAsc}}">
                    Name
                </x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('vname')" sortIcon="{{$getListForm->sortAsc}}">
                    Description
                </x-table.header-text>
                <x-table.header-action/>
            </x-slot:table_header>

            <x-slot:table_body name="table_body">

                @foreach($list as $index=>$row)

                    <x-table.row>
                        <x-table.cell-text>{{$index+1}}</x-table.cell-text>
                        <x-table.cell-text>{{$row->vname}}</x-table.cell-text>
                        <x-table.cell-text>{{$row->desc}}</x-table.cell-text>
                        <x-table.cell-action id="{{$row->id}}"/>
                    </x-table.row>

                @endforeach

            </x-slot:table_body>

        </x-table.form>

        <x-modal.delete/>

        <x-forms.create :id="$common->vid">
            <div class="flex flex-col  gap-3">
                <x-input.model-text wire:model="common.vname" :label="'Name'"/>
                <x-input.model-text wire:model="desc" :label="'Order Name'"/>
                <!-- Image -------------------------------------------------------------------------------------------->
                <div class="flex flex-row gap-2 mt-4">

                    <div class="flex">

                        <label for="logo_in"
                               class="w-[10rem] text-zinc-500 tracking-wide py-2">Image</label>

                        <div class="flex-shrink-0">

                            <div>
                                @if($image)
                                    <div class="flex-shrink-0 ">
                                        <img class="h-24 w-full" src="{{ $image->temporaryUrl() }}"
                                             alt="{{$image?:''}}"/>
                                    </div>
                                @endif

                                @if(!$image && isset($old_image))
                                    <img class="h-24 w-full"
                                         src="{{URL(\Illuminate\Support\Facades\Storage::url('images/'.$old_image))}}"
                                         alt="">

                                @else
                                    <x-icons.icon :icon="'logo'" class="w-auto h-auto block "/>
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="relative">

                        <div>
                            <label for="club_image"
                                   class="text-gray-500 font-semibold text-base rounded flex flex-col items-center
                                   justify-center cursor-pointer border-2 border-gray-300 border-dashed p-2
                                   mx-auto font-[sans-serif]">
                                <x-icons.icon icon="cloud-upload"
                                              class="w-8 h-auto block text-gray-400"/>
                                Upload file

                                <input type="file" id='club_image' wire:model="image" class="hidden"/>
                                <p class="text-xs font-light text-gray-400 mt-2">PNG, JPG SVG, WEBP, and
                                    GIF
                                    are
                                    Allowed.</p>
                            </label>
                        </div>

                        <div wire:loading wire:target="image" class="z-10 absolute top-6 left-12">
                            <div class="w-14 h-14 rounded-full animate-spin
                                                        border-y-4 border-dashed border-green-500 border-t-transparent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </x-forms.create>

    </x-forms.m-panel>
</div>