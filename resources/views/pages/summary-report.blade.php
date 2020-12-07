@extends('../layout/side-menu')

@section('subhead')
    <title>Summary report</title>
@endsection

@section('subcontent')

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Requests By Hour
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604653127275_2111536586?asIframe" height="450" width="1000" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Statuses By Hour
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604484639042_2132495673?asIframe" height="450" width="1000" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Traffic By Hour
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604543817336_644327879?asIframe" height="450" width="1000" ></iframe>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-4">
            <div class="grid-cols-2 box-frequent-path">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Top URL/Path By Status
                    </h2>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5 frequent-path">
                    <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604550993725_18861810?asIframe" height="500" width="550" ></iframe>       
                </div>
            </div>
            <div class="grid-cols-8 box-frequent-host">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Top Host By Status
                    </h2>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5 frequent-host">
                    <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604550933154_1838324234?asIframe" height="500" width="400" ></iframe>
                </div>
            </div>
    </div>
@endsection
