      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="{{ asset('backend/img/logo/logo.png') }}">
            </div>
            <div class="sidebar-user-details">
                <div class="user-name">{{ Auth::user()->name }}</div>
                <div class="user-role">{{Auth::user()->roles->first()->name}}</div>
                <div class="sidebar-userpic-btn">
                    <a href="?language=en" data-toggle="tooltip" title="English">
                        <img src="https://img.icons8.com/emoji/32/000000/united-kingdom-emoji.png"/>
                    </a>
                    <a href="?language=ka" data-toggle="tooltip" title="ქართული">
                        <img src="https://img.icons8.com/emoji/32/000000/georgia-emoji.png"/>
                    </a>
                    <a href="?language=zh-CN" data-toggle="tooltip" title="中">
                        <img src="https://img.icons8.com/emoji/31/000000/china-emoji.png"/>
                    </a>
                </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header"></li>

            <li class="dropdown">
              <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>@lang('dashboard.Dashboard')</span></a>
            </li>
            @can('contact-list')
            <li class="dropdown">
                <a href="{{ route('messages.index') }}" class="nav-link"><i data-feather="bell"></i><span>@lang('dashboard.Notifications')</span></a>
            </li>
            @endcan
            @can('order-list')
            <li class="dropdown">
                <a href="{{ route('orders') }}" class="nav-link"><i data-feather="shopping-bag"></i><span>@lang('dashboard.Orders')</span></a>
            </li>
            @endcan

            <hr>
            @can('product-list')
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-cart"></i><span>@lang('dashboard.Products')</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('products.index') }}">@lang('dashboard.View')</a></li>
                <li><a class="nav-link" href="{{ route('products.create') }}">@lang('dashboard.Add')</a></li>
              </ul>
            </li>
            @endcan

            @can('category-list')
            <li class="dropdown">
              <a href="{{ route('categories.index') }}" class="nav-link"><i data-feather="align-left"></i><span>@lang('dashboard.Categories')</span></a>
            </li>
            @endcan

            @can('place-list')
            <li class="dropdown">
                <a href="{{ route('places.index') }}" class="nav-link"><i data-feather="layout"></i><span>@lang('dashboard.Places')</span></a>
            </li>
            @endcan

            @can('table-list')
            <li class="dropdown">
                <a href="{{ route('tables.index') }}" class="nav-link"><i data-feather="minimize"></i><span>@lang('dashboard.Tables')</span></a>
            </li>
            @endcan
            @can('table-list')
            <li class="dropdown">
                <a href="{{ route('reservations.index') }}" class="nav-link"><i data-feather="clipboard"></i><span>@lang('dashboard.Reservations')</span></a>
            </li>
            @endcan

            {{-- @can('post-list')
            <li class="dropdown">
              <a href="{{ route('posts.index') }}" class="nav-link"><i data-feather="file-text"></i><span>@lang('dashboard.Posts')</span></a>
            </li>
            @endcan
            @can('post-list')
            <li class="dropdown">
              <a href="{{ route('pages.index') }}" class="nav-link"><i data-feather="copy"></i><span>@lang('dashboard.Pages')</span></a>
            </li>
            @endcan --}}
            @can('client-list')
            <li class="dropdown">
              <a href="{{ route('clients.index') }}" class="nav-link"><i data-feather="briefcase"></i><span>@lang('dashboard.Clients')</span></a>
            </li>
            @endcan



            @can('user-list')
            <li class="menu-header"><hr></li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="users"></i><span>@lang('dashboard.Users')</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('users.index') }}">@lang('dashboard.User List')</a></li>
                    <li><a class="nav-link" href="{{ route('roles.index') }}">@lang('dashboard.Roles')</a></li>
                    <li><a class="nav-link" href="{{ route('permissions.index') }}">@lang('dashboard.Permissions')</a></li>
                </ul>
            </li>
            @endcan

            @can('setting-list')
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>@lang('dashboard.Settings')</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('setting.general') }}"><i data-feather="briefcase"></i>&nbsp;  @lang('dashboard.Settings')</a></li>
                    <li><a class="nav-link" href="{{ route('setting.networks') }}"><i data-feather="at-sign"></i>&nbsp;  @lang('dashboard.Soc Networks')</a></li>
                    <li><a class="nav-link" href="{{ url('languages') }}" target="_blank"><i data-feather="globe"></i>&nbsp;  @lang('dashboard.Languages')</a></li>
                    @can('token-list')
                    <li><a class="nav-link" href="{{ route('tokens') }}"><i data-feather="git-pull-request"></i>&nbsp;@lang('dashboard.Tokens')</a></li>
                    @endcan
                </ul>
            </li>
            @endcan

            {{-- @can('user-list') --}}

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="book"></i><span>@lang('dashboard.Documentation')</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#0">@lang('dashboard.Control Panel')</a></li>
                    <li><a class="nav-link" href="#0">@lang('dashboard.API')</a></li>
                </ul>
            </li>
            {{-- @endcan --}}

          </ul>
        </aside>
      </div>
