<div class="sm:w-4/12 w-auto bg-white  rounded-lg flex-col flex h-[28rem] hover:shadow-md">
    <div class="w-full h-[4rem] py-3 border-b border-gray-200 inline-flex items-center justify-between px-8">
                         <span class="inline-flex items-center gap-2">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-cyan-500">
                          <path fill-rule="evenodd" d="M3.75 3.375c0-1.036.84-1.875 1.875-1.875H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375Zm10.5 1.875a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Zm-4.5 5.25a.75.75 0 0 0 0 1.5h.375c.769 0 1.43.463 1.719 1.125H9.75a.75.75 0 0 0 0 1.5h2.094a1.875 1.875 0 0 1-1.719 1.125H9.75a.75.75 0 0 0-.53 1.28l2.25 2.25a.75.75 0 0 0 1.06-1.06l-1.193-1.194a3.382 3.382 0 0 0 2.08-2.401h.833a.75.75 0 0 0 0-1.5h-.834A3.357 3.357 0 0 0 12.932 12h1.318a.75.75 0 0 0 0-1.5H10.5c-.04 0-.08.003-.12.01a3.425 3.425 0 0 0-.255-.01H9.75Z" clip-rule="evenodd" />
                        </svg>
                            <span class="font-semibold text-lg font-roboto">Entries</span>
                        </span>
        <a class="inline-flex items-center gap-1 text-gray-500 font-semibold hover:bg-cyan-50 hover:text-cyan-600 px-2 py-1 rounded-md transition-colors duration-300 ease-out">
            <span class="text-xs ">View All </span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5"
                 stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
            </svg>
        </a>
    </div>
    <div class="flex-col flex h-[24rem] px-2 overflow-y-auto">
        <x-web.dashboard.entries_list entry="Sales" invoice="INV A5-005" amount="₹ 40000" color="text-[#23B7E5]">
            <x-icons.sales />
        </x-web.dashboard.entries_list>
        <x-web.dashboard.entries_list entry="Purchase" invoice="INV A5-005" amount="₹ 30000" color="text-[#845ADF]">
            <x-icons.purchase />
        </x-web.dashboard.entries_list>
        <x-web.dashboard.entries_list entry="Payment" invoice="INV A5-005" amount="₹ 20000" color="text-[#E6533C]">
            <x-icons.payment />
        </x-web.dashboard.entries_list>
        <x-web.dashboard.entries_list entry="Receipt" invoice="INV A5-005" amount="₹ 21000" color="text-[#F5B849]">
            <x-icons.receipt />
        </x-web.dashboard.entries_list>
    </div>

</div>