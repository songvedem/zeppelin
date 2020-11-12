<!-- BEGIN: Top Bar -->
<div class="top-bar" style="position: relative">
    <!-- BEGIN: Breadcrumb -->
    <div class="-intro-x breadcrumb  hidden sm:flex">
        <a href="" class="">Application</a>
        <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <a href="" class="breadcrumb--active">{{$name}}</a>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="btn-run">
            Rerun Dashboard
        </button>
    </div>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Search -->

    <div class="grid grid-cols-2 gap-4 user">
    <div class="intro-x relative mr-3 sm:mr-6" >
        <div class="search hidden sm:block">
            <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">
            <i data-feather="search" class="search__icon dark:text-gray-300"></i>
        </div>
        <a class="notification sm:hidden" href="">
            <i data-feather="search" class="notification__icon dark:text-gray-300"></i>
        </a>
    </div>


    <!-- END: Search -->
    <!-- BEGIN: Notifications -->

{{--    <div class="intro-x dropdown mr-auto sm:mr-6">--}}
{{--        <div class="dropdown-toggle notification notification--bullet cursor-pointer">--}}
{{--            <i data-feather="bell" class="notification__icon dark:text-gray-300"></i>--}}
{{--        </div>--}}
{{--        <div class="notification-content pt-2 dropdown-box">--}}
{{--            <div class="notification-content__box dropdown-box__content box dark:bg-dark-6">--}}
{{--                <div class="notification-content__title">Notifications</div>--}}
{{--                @foreach (array_slice($fakers, 0, 5) as $key => $faker)--}}
{{--                    <div class="cursor-pointer relative flex items-center {{ $key ? 'mt-5' : '' }}">--}}
{{--                        <div class="w-12 h-12 flex-none image-fit mr-1">--}}
{{--                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">--}}
{{--                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>--}}
{{--                        </div>--}}
{{--                        <div class="ml-2 overflow-hidden">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <a href="javascript:;" class="font-medium truncate mr-5">{{ $faker['users'][0]['name'] }}</a>--}}
{{--                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">{{ $faker['times'][0] }}</div>--}}
{{--                            </div>--}}
{{--                            <div class="w-full truncate text-gray-600">{{ $faker['news'][0]['short_content'] }}</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <!-- END: Notifications -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" style="width: 8rem; text-align: center; padding-top: 3px">
            <p>{{ \Illuminate\Support\Facades\Auth::user() ? \Illuminate\Support\Facades\Auth::user()->name : ""}}</p>
        </div>
        <div class="dropdown-box w-56">
            <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
                <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                    <div class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                    <div class="text-xs text-theme-41 dark:text-gray-600">{{ $fakers[0]['jobs'][0] }}</div>
                </div>
                <div class="p-2">
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                        <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile
                    </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                        <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account
                    </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password
                    </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                        <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help
                    </a>
                </div>
                <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                    <a href="{{ route('logout') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                        <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- END: Account Menu -->
</div>

@section('script')
    <script>
        cash(function () {

            cash('#btn-run').on('click', function() {
                runAllParagraphs()
            })
            async function runAllParagraphs() {
                Swal.fire({
                    title: 'WARNING !',
                    text: "This will take quite a long time, are you sure you want to continue ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        axios.post(`http://namenode:50070/api/notebook/job/2FN966YVS`)
                            .then(res => {
                                Swal.fire(
                                    'Success!',
                                    'Run all paragraphs success.',
                                    'success'
                                )
                        }).catch(err => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Something went wrong!',
                            })
                        })
                    }
                })
            }
        })
    </script>
@endsection
<!-- END: Top Bar -->
