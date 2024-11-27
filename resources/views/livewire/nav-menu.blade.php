<div class="navbar bg-base-100">
    <div class="grid grid-cols-1 justify-items-center	 ">
        <a class="" href="{{ route('welcome') }}">
            <img src="{{asset('logo_wb.png')}}" alt="" class="img-responsive w-48 ">
        </a>
        <label for="my-drawer" class="drawer-button hover:cursor-pointer flex gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd"
                      d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm10.72 4.72a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06l1.72-1.72H9a.75.75 0 0 1 0-1.5h10.94l-1.72-1.72a.75.75 0 0 1 0-1.06Z"
                      clip-rule="evenodd"/>
            </svg>
            menu
        </label>
    </div>

    <div class="drawer z-10">
        <input id="my-drawer" type="checkbox" class="drawer-toggle"/>
        <div class="drawer-side">
            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4 gap-2">
                <a class="" href="{{ route('welcome') }}">
                    <img src="{{asset('logo_wb.png')}}" alt="" class="img-responsive w-48 ">
                </a>
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('category-docs-list', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
                @auth()
                    <li>
                        <a href="{{ route('filament.admin.pages.dashboard') }}">
                            Admin
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('filament.admin.auth.login') }}">
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</div>
