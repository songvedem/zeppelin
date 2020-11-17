@extends('../layout/side-menu')

@section('subhead')
    <title>Summary report</title>
@endsection

@section('subcontent')
    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Top 20 Requests With Most Traffic
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604546145013_1356562621?asIframe" height="420" width="1050" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Requests By Hour
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604653127275_2111536586?asIframe" height="450" width="1050" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Statuses By Hour
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604484639042_2132495673?asIframe" height="450" width="1050" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Traffic By Hour
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604543817336_644327879?asIframe" height="450" width="1050" ></iframe>
        </div>
    </div>
@endsection
