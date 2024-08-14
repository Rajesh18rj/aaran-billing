<button type="submit" wire:click.prevent="save"
    {{$attributes->merge(['class' => 'max-w-max bg-gradient-to-r from-green-600 to-green-500 hover:from-green-500 hover:to-green-600 focus:ring-2 focus:ring-offset-2
    focus:ring-green-700 text-white sm:px-4 sm:py-2 px-2 py-1 text-[12px] inline-flex items-center gap-x-2 rounded-md tracking-widest font-semibold
    transition-all linear duration-400 '])}}>
    <x-icons.icon :icon="'save'" class="sm:h-5 h-3 w-auto"/>
    <span>SAVE</span>
</button>