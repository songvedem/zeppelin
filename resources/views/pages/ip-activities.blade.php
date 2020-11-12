@extends('../layout/side-menu')

@section('subhead')
    <title>Ip activities</title>
@endsection

@section('subcontent')
    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                IP Lookup from log file
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604046405346_1291191690?asIframe" height="600" width="980" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Check IP Return Statuses
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1603248460518_75151105?asIframe" height="600" width="980" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Check IP Download Traffic
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604737867569_529935447?asIframe" height="600" width="980" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Check IP Requested Paths
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604974383108_267316964?asIframe" height="600" width="980" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Search 404 Requests By Hour
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604547915103_326324353?asIframe" height="400" width="980" ></iframe>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-4">
            <div class="grid-cols-2 box-frequent-path">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Top 404 Paths
                    </h2>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5 frequent-path">
                    <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604550933154_1838324234?asIframe" height="350" width="300" ></iframe>
                </div>
            </div>
            <div class="grid-cols-8 box-frequent-host">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Top 404 Hosts
                    </h2>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5 frequent-host">
                    <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604550993725_18861810?asIframe" height="350" width="400" ></iframe>
                </div>
            </div>
    </div>

@endsection
