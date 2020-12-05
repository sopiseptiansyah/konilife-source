<div class="c-wrapper">
    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar"
            data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button>
            <a class="c-header-brand d-sm-none" href="#">
              <img class="c-header-brand"
                src="{{ env('APP_URL', '') }}/images/logo.png" 
                alt="Konilife Logo"
                  style="
                    width: 120px;
                    height: auto;
                    min-height: unset;
                ">
            </a>
        <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar"
            data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>
        <?php
              use App\MenuBuilder\FreelyPositionedMenus;
              if(isset($appMenus['top menu'])){
                  FreelyPositionedMenus::render( $appMenus['top menu'] , 'c-header-', 'd-md-down-none');
              }
          ?>
        <ul class="c-header-nav ml-auto mr-4">
            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="c-avatar"><img class="c-avatar-img"
                            src="{{ env('APP_URL', '') }}/admin/assets/img/avatars/avatar.png" alt="Admin"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ env('APP_URL', '') }}/admin/icons/sprites/free.svg#cil-user"></use>
                        </svg>
                        <strong>
                            {{Auth::user()->name}}
                        </strong>
                    </div>
                    <div class="dropdown-header bg-light py-2">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ env('APP_URL', '') }}/admin/icons/sprites/free.svg#cil-envelope-closed">
                            </use>
                        </svg>
                        <strong>
                            {{Auth::user()->email}}
                        </strong>
                    </div>
                    <a class="dropdown-item" href="javascript:void(0)" onclick="document.getElementById('logout').submit()">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ env('APP_URL', '') }}/admin/icons/sprites/free.svg#cil-account-logout">
                            </use>
                        </svg>
                        <form id="logout" action="/logout" method="POST"> @csrf <button type="submit"
                                class="btn btn-block">Logout</button></form>
                    </a>
                </div>
            </li>
        </ul>
    </header>
