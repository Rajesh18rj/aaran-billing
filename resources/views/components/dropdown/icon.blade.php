<div x-data="{ isOpen: false, openedWithKeyboard: false }" @keydown.esc.prevent="isOpen = false, openedWithKeyboard = false" class="relative">
    <!-- Toggle Button -->
    <button type="button" aria-label="context menu" @click="isOpen = ! isOpen" @contextmenu.prevent="isOpen = true" @keydown.space.prevent="openedWithKeyboard = true" @keydown.enter.prevent="openedWithKeyboard = true" @keydown.down.prevent="openedWithKeyboard = true" class="inline-flex cursor-pointer items-center bg-transparent transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-800 active:opacity-100 dark:focus-visible:outline-slate-300" :class="isOpen || openedWithKeyboard ? 'text-black dark:text-white' : 'text-slate-700 dark:text-slate-300'" :aria-expanded="isOpen || openedWithKeyboard" aria-haspopup="true">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="w-8 h-8">
            <path fill-rule="evenodd" d="M4.5 12a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm6 0a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm6 0a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" clip-rule="evenodd"/>
        </svg>
    </button>
    <!-- Dropdown Menu -->
    <div x-cloak x-show="isOpen || openedWithKeyboard" x-transition x-trap="openedWithKeyboard" @click.outside="isOpen = false, openedWithKeyboard = false" @keydown.down.prevent="$focus.wrap().next()" @keydown.up.prevent="$focus.wrap().previous()" class="absolute top-8 flex w-full min-w-[14rem] flex-col divide-y divide-slate-300 overflow-hidden rounded-xl border border-slate-300 bg-slate-100 dark:divide-slate-700 dark:border-slate-700 dark:bg-slate-800" role="menu">
        <!-- Dropdown Section -->
        <ul class="flex flex-col py-1.5" role="none">
            <li class="flex cursor-pointer items-center gap-2 bg-slate-100 px-4 py-2 text-sm text-slate-700 hover:bg-slate-800/5 hover:text-black focus-visible:bg-slate-800/10 focus-visible:text-black focus-visible:outline-none dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-100/5 dark:hover:text-white dark:focus-visible:bg-slate-100/10 dark:focus-visible:text-white" role="menuitem" tabindex="0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="w-4 h-4">
                    <path fill-rule="evenodd" d="M9.53 2.47a.75.75 0 010 1.06L4.81 8.25H15a6.75 6.75 0 010 13.5h-3a.75.75 0 010-1.5h3a5.25 5.25 0 100-10.5H4.81l4.72 4.72a.75.75 0 11-1.06 1.06l-6-6a.75.75 0 010-1.06l6-6a.75.75 0 011.06 0z" clip-rule="evenodd"/>
                </svg>
                Undo
                <div class="ml-auto flex items-center gap-1 font-semibold opacity-60" aria-hidden="true">Ctrl + Z
                </div>
            </li>
        </ul>
        <!-- Dropdown Section -->
        <ul class="flex flex-col py-1.5" role="none">
            <li class="flex cursor-pointer items-center gap-2 bg-slate-100 px-4 py-2 text-sm text-slate-700 hover:bg-slate-800/5 hover:text-black focus-visible:bg-slate-800/10 focus-visible:text-black focus-visible:outline-none dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-100/5 dark:hover:text-white dark:focus-visible:bg-slate-100/10 dark:focus-visible:text-white" role="menuitem" tabindex="0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="w-4 h-4">
                    <path fill-rule="evenodd" d="M8.128 9.155a3.751 3.751 0 11.713-1.321l1.136.656a.75.75 0 01.222 1.104l-.006.007a.75.75 0 01-1.032.157 1.421 1.421 0 00-.113-.072l-.92-.531zm-4.827-3.53a2.25 2.25 0 013.994 2.063.756.756 0 00-.122.23 2.25 2.25 0 01-3.872-2.293zM13.348 8.272a5.073 5.073 0 00-3.428 3.57c-.101.387-.158.79-.165 1.202a1.415 1.415 0 01-.707 1.201l-.96.554a3.751 3.751 0 10.734 1.309l13.729-7.926a.75.75 0 00-.181-1.374l-.803-.215a5.25 5.25 0 00-2.894.05l-5.325 1.629zm-9.223 7.03a2.25 2.25 0 102.25 3.897 2.25 2.25 0 00-2.25-3.897zM12 12.75a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd"/>
                    <path d="M16.372 12.615a.75.75 0 01.75 0l5.43 3.135a.75.75 0 01-.182 1.374l-.802.215a5.25 5.25 0 01-2.894-.051l-5.147-1.574a.75.75 0 01-.156-1.367l3-1.732z"/>
                </svg>
                Cut
                <div class="ml-auto flex items-center gap-1 font-semibold opacity-60" aria-hidden="true">Ctrl + X
                </div>
            </li>
            <li class="flex cursor-pointer items-center gap-2 bg-slate-100 px-4 py-2 text-sm text-slate-700 hover:bg-slate-800/5 hover:text-black focus-visible:bg-slate-800/10 focus-visible:text-black focus-visible:outline-none dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-100/5 dark:hover:text-white dark:focus-visible:bg-slate-100/10 dark:focus-visible:text-white" role="menuitem" tabindex="0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="w-4 h-4">
                    <path d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 013.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0121 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 017.5 16.125V3.375z"/>
                    <path d="M15 5.25a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963A5.23 5.23 0 0017.25 7.5h-1.875A.375.375 0 0115 7.125V5.25zM4.875 6H6v10.125A3.375 3.375 0 009.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V7.875C3 6.839 3.84 6 4.875 6z"/>
                </svg>
                Copy
                <div class="ml-auto flex items-center gap-1 font-semibold opacity-60" aria-hidden="true">Ctrl + C
                </div>
            </li>
            <li class="flex cursor-pointer items-center gap-2 bg-slate-100 px-4 py-2 text-sm text-slate-700 hover:bg-slate-800/5 hover:text-black focus-visible:bg-slate-800/10 focus-visible:text-black focus-visible:outline-none dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-100/5 dark:hover:text-white dark:focus-visible:bg-slate-100/10 dark:focus-visible:text-white" role="menuitem" tabindex="0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="w-4 h-4">
                    <path fill-rule="evenodd" d="M10.5 3A1.501 1.501 0 009 4.5h6A1.5 1.5 0 0013.5 3h-3zm-2.693.178A3 3 0 0110.5 1.5h3a3 3 0 012.694 1.678c.497.042.992.092 1.486.15 1.497.173 2.57 1.46 2.57 2.929V19.5a3 3 0 01-3 3H6.75a3 3 0 01-3-3V6.257c0-1.47 1.073-2.756 2.57-2.93.493-.057.989-.107 1.487-.15z" clip-rule="evenodd"/>
                </svg>
                Paste
                <div class="ml-auto flex items-center gap-1 font-semibold opacity-60" aria-hidden="true">Ctrl + V
                </div>
            </li>
        </ul>
        <!-- Dropdown Section -->
        <ul class="flex flex-col py-1.5" role="none">
            <li class="flex cursor-pointer items-center gap-2 bg-slate-100 px-4 py-2 text-sm text-slate-700 hover:bg-slate-800/5 hover:text-black focus-visible:bg-slate-800/10 focus-visible:text-black focus-visible:outline-none dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-100/5 dark:hover:text-white dark:focus-visible:bg-slate-100/10 dark:focus-visible:text-white" role="menuitem" tabindex="0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="w-4 h-4">
                    <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z" clip-rule="evenodd"/>
                </svg>
                Print
                <div class="ml-auto flex items-center gap-1 font-semibold opacity-60" aria-hidden="true">Ctrl + P
                </div>
            </li>
        </ul>
    </div>
</div>