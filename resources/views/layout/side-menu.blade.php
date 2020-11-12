@extends('../layout/main')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    @include('../layout/components/mobile-menu')
    <div class="flex">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="" class="intro-x flex items-center pl-5 pt-4">
                <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                <span class="hidden xl:block text-white text-lg ml-3">
                    Mid<span class="font-medium">one</span>
                </span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <a href="/"
                       class="side-menu side-menu--active' : 'side-menu'">
                        <div class="side-menu__icon">
{{--                            <i data-feather="{{ $menu['icon'] }}"></i>--}}
                        </div>
                        <div class="side-menu__title">
                            Overview
{{--                            @if (isset($menu['sub_menu']))--}}
{{--                                <i data-feather="chevron-down" class="side-menu__sub-icon"></i>--}}
{{--                            @endif--}}
                        </div>
                    </a>
                </li>

                <li>
                    <a href="/summary-report"
                       class="side-menu side-menu--active' : 'side-menu'">
                        <div class="side-menu__icon">
{{--                            <i data-feather="{{ $menu['icon'] }}"></i>--}}
                        </div>
                        <div class="side-menu__title">
                            Summary Report
                            {{--                            @if (isset($menu['sub_menu']))--}}
                            {{--                                <i data-feather="chevron-down" class="side-menu__sub-icon"></i>--}}
                            {{--                            @endif--}}
                        </div>
                    </a>
                </li>

                <li>
                    <a href="/ip-activities"
                       class="side-menu side-menu--active' : 'side-menu'">
                        <div class="side-menu__icon">
{{--                            <i data-feather="{{ $menu['icon'] }}"></i>--}}
                        </div>
                        <div class="side-menu__title">
                            IP Activities
                            {{--                            @if (isset($menu['sub_menu']))--}}
                            {{--                                <i data-feather="chevron-down" class="side-menu__sub-icon"></i>--}}
                            {{--                            @endif--}}
                        </div>
                    </a>
                </li>

                {{--                            @if (isset($menu['sub_menu']))--}}
                {{--                                <ul class="{{ $first_page_name == $menu['page_name'] ? 'side-menu__sub-open' : '' }}">--}}
                {{--                                    @foreach ($menu['sub_menu'] as $subMenu)--}}
                {{--                                        <li>--}}
                {{--                                            <a href="{{ isset($subMenu['layout']) ? route('page', ['layout' => $subMenu['layout'], 'theme' => $theme, 'pageName' => $subMenu['page_name']]) : 'javascript:;' }}" class="{{ $second_page_name == $subMenu['page_name'] ? 'side-menu side-menu--active' : 'side-menu' }}">--}}
                {{--                                                <div class="side-menu__icon">--}}
                {{--                                                    <i data-feather="activity"></i>--}}
                {{--                                                </div>--}}
                {{--                                                <div class="side-menu__title">--}}
                {{--                                                    {{ $subMenu['title'] }}--}}
                {{--                                                    @if (isset($subMenu['sub_menu']))--}}
                {{--                                                        <i data-feather="chevron-down" class="side-menu__sub-icon"></i>--}}
                {{--                                                    @endif--}}
                {{--                                                </div>--}}
                {{--                                            </a>--}}
                {{--                                            @if (isset($subMenu['sub_menu']))--}}
                {{--                                                <ul class="{{ $second_page_name == $subMenu['page_name'] ? 'side-menu__sub-open' : '' }}">--}}
                {{--                                                    @foreach ($subMenu['sub_menu'] as $lastSubMenu)--}}
                {{--                                                        <li>--}}
                {{--                                                            <a href="{{ isset($lastSubMenu['layout']) ? route('page', ['layout' => $lastSubMenu['layout'], 'theme' => $theme, 'pageName' => $lastSubMenu['page_name']]) : 'javascript:;' }}" class="{{ $third_page_name == $lastSubMenu['page_name'] ? 'side-menu side-menu--active' : 'side-menu' }}">--}}
                {{--                                                                <div class="side-menu__icon">--}}
                {{--                                                                    <i data-feather="zap"></i>--}}
                {{--                                                                </div>--}}
                {{--                                                                <div class="side-menu__title">{{ $lastSubMenu['title'] }}</div>--}}
                {{--                                                            </a>--}}
                {{--                                                        </li>--}}
                {{--                                                    @endforeach--}}
                {{--                                                </ul>--}}
                {{--                                            @endif--}}
                {{--                                        </li>--}}
                {{--                                    @endforeach--}}
                {{--                                </ul>--}}
                {{--                            @endif--}}
            </ul>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            @include('../layout/components/top-bar')
            @yield('subcontent')
        </div>
        <!-- END: Content -->
    </div>
@endsection
