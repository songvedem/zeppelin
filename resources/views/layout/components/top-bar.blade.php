<!-- BEGIN: Top Bar -->
<div class="top-bar" style="position: relative">
    <!-- BEGIN: Breadcrumb -->
    <div class="-intro-x breadcrumb  hidden sm:flex">
        <a href="" class="" >Application</a>
        <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <a href="" class="breadcrumb--active">{{$name}}</a>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="btn-run">
            Rerun Dashboard
        </button>
    </div>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Search -->

    <div class="grid grid-cols-2 gap-4 user">
{{--    <div class="intro-x relative mr-3 sm:mr-6" >--}}
{{--        <div class="search hidden sm:block">--}}
{{--            <input type="text" class="search__input input placeholder-theme-13" placeholder="Search...">--}}
{{--            <i data-feather="search" class="search__icon dark:text-gray-300"></i>--}}
{{--        </div>--}}
{{--        <a class="notification sm:hidden" href="">--}}
{{--            <i data-feather="search" class="notification__icon dark:text-gray-300"></i>--}}
{{--        </a>--}}
{{--    </div>--}}


    <!-- END: Search -->
    <!-- BEGIN: Notifications -->

    <div class="intro-x dropdown mr-auto sm:mr-6">
        <div class="dropdown-toggle notification cursor-pointer">
            <div class="number_noti">
                <b><span style="margin:6px 6px">0</span></b>
            </div>
            <i data-feather="bell" class="notification__icon dark:text-gray-300"></i>
        </div>
        <div class="notification-content pt-2 dropdown-box">
            <div class="notification-content__box dropdown-box__content box dark:bg-dark-6">
                <div class="notification-content__title"><a href="/anomalies-detection" style="color: #1C3FAA">View detail</a></div>

                    <div class="cursor-pointer relative flex items-center mt-5">
{{--                        <div class="w-12 h-12 flex-none image-fit mr-1">--}}
{{--                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">--}}
{{--                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>--}}
{{--                        </div>--}}
                        <div class="ml-2 overflow-hidden notification_drop divide-y">



{{--                            <div class="w-full truncate text-gray-600">table changed</div>--}}
                        </div>
                    </div>

            </div>
        </div>
    </div>


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
                    <a href="/detection-threshold" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                        <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Detection Threshold
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
        cash(async function () {
            const READ = 1
            const IN_READ = 0
            var request = new XMLHttpRequest()
            var requestFinish = new XMLHttpRequest()
            // lấy update finish
             requestFinish.open('GET', 'http://namenode:50070/api/notebook/job/2FN966YVS/paragraph_1605006489651_1517903191', true)
             requestFinish.onload = function () {
                console.log(1)
                // Begin accessing JSON data here
                var data = JSON.parse(this.response)

                if (requestFinish.status === 200 ) {
                    console.log(data)
                    $('.breadcrumb').append(`<p class="bg-green-500 text-white font-bold py-2 px-4 rounded last_update" style="margin-left: 10px"><span> Last Updated : ${data.body.finished}</span></p>`)
                }
            }

            requestFinish.send()
            // lấy các notification
            request.open('GET', '/api/notifications', true)
            request.onload = function () {
                // Begin accessing JSON data here
                let data = JSON.parse(this.response)

                if (request.status === 200 ) {
                    $('.number_noti').html(`<b><span style="margin: 6px 6px">${data.count}</span>`)

                    if (data.data.length) {
                        $('.notification_drop').html(`<div></div>`)
                        data.data.forEach(content => {
                            $('.notification_drop').append(`<div class="flex items-center">
                                <div class="font-medium mr-5 ${content.id}" style="padding: 10px 0" value="1"><a class="${content.status === READ ? 'read' : ''}" href="/notifications/${content.id}">${content.updated_at}: ${content.content}</a></div></div>`)
                        })
                    }
                }
            }
            request.send()

            setInterval(function(){
                var request = new XMLHttpRequest()
                request.open('GET', '/api/notifications', true)
                request.onload = function () {
                // Begin accessing JSON data here
                let data = JSON.parse(this.response)

                if (request.status === 200 ) {
                    $('.number_noti').html(`<b><span style="margin: 6px 6px">${data.count}</span>`)

                    if (data.data.length) {
                        $('.notification_drop').html(`<div></div>`)
                        data.data.forEach(content => {
                            $('.notification_drop').append(`<div class="flex items-center">
                                <div class="font-medium mr-5 ${content.id}" style="padding: 10px 0" value="1"><a class="${content.status === READ ? 'read' : ''}" href="/notifications/${content.id}">${content.updated_at}: ${content.content}</a></div></div>`)
                        })
                    }
                }
            }
            request.send()

             }, 10000);

            Pusher.logToConsole = true;

            var pusher = new Pusher('97818d7aa99e7cca1f0f', {
                cluster: 'ap1',
                'useTLS' : true
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                // $('.number_noti').html(`<b><span style="margin: 6px 6px">${data.data['count']}</span>`)
                // console.log(data.data.data)
                // if (data.data.data.length) {
                //     $('.notification_drop').html(`<div></div>`)
                //     data.data.data.forEach(content => {
                //         console.log(content)
                //         $('.notification_drop').append(`<div class="flex items-center">
                //                 <div class="font-medium truncate mr-5 ${content.id}" style="padding: 10px 0" value="1"><a href="/notifications/${content.id}">${content.content}</a></div></div>`)
                //     })
                // }

                location.reload();
                return true;

            });
            cash('#btn-run').on('click', function() {
                runAllParagraphs()
            })
            async function runAllParagraphs() {
                Swal.fire({
                    title: 'WARNING !',
                    text: "This will take a bit of time, and you can't interact with data until the process is finished. Are you sure you want to continue ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                    }).then((result) => {
                    if (result.isConfirmed) {



                        var request = new XMLHttpRequest()

                            request.open('POST', 'http://namenode:50070/api/notebook/job/2FN966YVS', true)
                            request.onload = function () {
                              // Begin accessing JSON data here
                              var data = JSON.parse(this.response)

                              console.log(request)

                              if (request.status == 200 ) {
                                 Swal.fire(
                                    'Success!',
                                    'Start success, wait for Last Updated value to change.',
                                    'success'
                                )
                              } else if(request.status == 417){
                               Swal.fire({
                                icon: 'error',
                                title: 'EXPECTATION_FAILED',
                                text: 'Unable to run note:2FN966YVS because it is still in RUNNING state.!',
                            })
                              } else {

                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Something went wrong!',
                            })

                              }
                            }

                            request.send()

                        // axios.post('http://namenode:50070/api/notebook/job/2FN966YVS')
                        //     .then(res => {
                        //         Swal.fire(
                        //             'Success!',
                        //             'Run all paragraphs success.',
                        //             'success'
                        //         )
                        // }).catch(err => {
                        //     Swal.fire({
                        //         icon: 'error',
                        //         title: 'Error',
                        //         text: 'Something went wrong!',
                        //     })
                        // })
                    }
                })
            }
        })
    </script>
@endsection
<!-- END: Top Bar -->
