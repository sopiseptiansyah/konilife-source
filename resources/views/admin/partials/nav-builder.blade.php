<?php
/*
    $data = $menuel['elements']
*/

if(!function_exists('renderDropdown')){
    function renderDropdown($data){
        if(array_key_exists('slug', $data) && $data['slug'] === 'dropdown'){
            echo '<li class="c-sidebar-nav-dropdown">';
            echo '<a class="c-sidebar-nav-dropdown-toggle" href="#">';
            if($data['hasIcon'] === true && $data['iconType'] === 'coreui'){
                echo '<i class="' . $data['icon'] . ' c-sidebar-nav-icon"></i>';    
            }
            echo $data['name'] . '</a>';
            echo '<ul class="c-sidebar-nav-dropdown-items">';
            renderDropdown( $data['elements'] );
            echo '</ul></li>';
        }else{
            for($i = 0; $i < count($data); $i++){
                if( $data[$i]['slug'] === 'link' ){
                    echo '<li class="c-sidebar-nav-item">';
                    echo '<a class="c-sidebar-nav-link" href="' . env('APP_URL', '') . $data[$i]['href'] . '">';
                    echo '<span class="c-sidebar-nav-icon"></span>' . $data[$i]['name'] . '</a></li>';
                }elseif( $data[$i]['slug'] === 'dropdown' ){
                    renderDropdown( $data[$i] );
                }
            }
        }
    }
}
?>

<div class="c-sidebar-brand">
    <img class="c-sidebar-brand-full" src="{{asset('images/logo.png')}}" width="127"height="38" alt="Konilife Logo">

    <img class="c-sidebar-brand-minimized" src="{{asset('admin/konimex.png')}}" height="46" alt="Konilife Logo">
</div>

<ul class="c-sidebar-nav">
    {{-- <li class="c-sidebar-nav-item ">
        <a class="c-sidebar-nav-link" href="{{route('admin.dashboard')}}">
            <svg class="c-sidebar-nav-icon">
                <use xlink:href="{{asset('admin/assets/icons/coreui/free-symbol-defs.svg#cui-speedometer')}}"></use>
            </svg> 
            Dashboard
            <span class="badge badge-info">NEW</span>
        </a>
    </li> --}}
    <li class="c-sidebar-nav-dropdown">
        <a class="c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
                <use xlink:href="{{asset('admin/assets/icons/coreui/free-symbol-defs.svg#cui-newspaper')}}"></use>
            </svg> 
            Artikel
        </a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{route('admin.posts')}}">
                    Semua Artikel
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{route('admin.new-post')}}">
                    Tambah Artikel
                </a>
            </li>
        </ul>
    </li>
    <li class="c-sidebar-nav-item ">
        <a class="c-sidebar-nav-link" href="{{route('admin.contact')}}">
            <svg class="c-sidebar-nav-icon">
                <use xlink:href="{{asset('admin/assets/icons/coreui/free-symbol-defs.svg#cui-contact')}}"></use>
            </svg> 
            Kontak
            {{-- <span class="badge badge-info">NEW</span> --}}
        </a>
    </li>
    <li class="c-sidebar-nav-item ">
        <a class="c-sidebar-nav-link" href="{{route('admin.stores')}}">
            <svg class="c-sidebar-nav-icon">
                <use xlink:href="{{asset('admin/assets/icons/coreui/free-symbol-defs.svg#cui-basket')}}"></use>
            </svg> 
            Store
            {{-- <span class="badge badge-info">NEW</span> --}}
        </a>
    </li>



    @if(isset($appMenus['sidebar menu']))
    @foreach($appMenus['sidebar menu'] as $menuel)
    @if($menuel['slug'] === 'link')
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ env('APP_URL', '') . $menuel['href'] }}">
            @if($menuel['hasIcon'] === true)
            @if($menuel['iconType'] === 'coreui')
            <i class="{{ $menuel['icon'] }} c-sidebar-nav-icon"></i>
            @endif
            @endif
            {{ $menuel['name'] }}
        </a>
    </li>
    @elseif($menuel['slug'] === 'dropdown')
    <?php renderDropdown($menuel) ?>
    @elseif($menuel['slug'] === 'title')
    <li class="c-sidebar-nav-title">
        @if($menuel['hasIcon'] === true)
        @if($menuel['iconType'] === 'coreui')
        <i class="{{ $menuel['icon'] }} c-sidebar-nav-icon"></i>
        @endif
        @endif
        {{ $menuel['name'] }}
    </li>
    @endif
    @endforeach
    @endif
</ul>
{{-- <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
    data-class="c-sidebar-minimized"></button> --}}
</div>
