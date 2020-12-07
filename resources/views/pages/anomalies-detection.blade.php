@extends('../layout/side-menu')

@section('subhead')
    <title>Anomalies Detection</title>
@endsection

@section('subcontent')
    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Paths Surpassed Access Threshold Amount
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1607306917072_536098956?asIframe" height="400" width="1000" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Hosts Surpassed Request Amount For A Certain Path
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1607308069755_1402461390?asIframe" height="400" width="1000" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Hosts Surpassed Bandwidth Threshold
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1606118950530_1110623502?asIframe" height="400" width="1000" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Hosts Surpassed Status Threshold
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1606118702782_1120695788?asIframe" height="400" width="1000" ></iframe>
        </div>
    </div>

@endsection
