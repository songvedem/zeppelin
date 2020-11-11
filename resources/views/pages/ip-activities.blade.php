@extends('../layout/side-menu')

@section('subhead')
    <title>Ip activities</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-3 gap-4">
        <div class="grid-cols-2 ">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Frequent host
                </h2>
            </div>
            <div class="intro-y box p-5 mt-12 sm:mt-5 frequent-host">
                {{--     Thêm iframe  frequent-host --}}
            </div>
        </div>
        <div class="grid-cols-8">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Frequent host
                </h2>
            </div>
            <div class="intro-y box p-5 mt-12 sm:mt-5 frequent-path">
                {{--     Thêm iframe  frequent path--}}
            </div>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Operating system
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">

            {{--     Thêm iframe  operating-system --}}
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Requests per hour
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            {{--           // Thêm iframe  operating-system--}}
        </div>
    </div>
@endsection
