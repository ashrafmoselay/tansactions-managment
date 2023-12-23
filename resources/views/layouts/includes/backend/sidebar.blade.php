<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow menu-bordered">
    <div class="main-menu-content ps-container ps-theme-dark ps-active-y">
        <form style="border-radius: 3px; border: 1px solid #b0bec5; margin: 10px 10px;" action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input autocomplete="off" type="text" name="q" class="form-control" placeholder="كلمة البحث">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <ul class="navigation navigation-main mb-5 pb-5" id="main-menu-navigation">

            @foreach ($list_menus as $row)
                @include('layouts.includes.backend.sections.list-menu', ['menu' => $row])
            @endforeach

        </ul>
    </div>
</div>
