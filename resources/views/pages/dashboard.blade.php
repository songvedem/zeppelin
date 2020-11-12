@extends('../layout/side-menu')

@section('subhead')
    <title>Dashboard</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-3 gap-4">
            <div class="grid-cols-2">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Frequent Hosts
                    </h2>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5 frequent-path">
                    <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604544727687_1291125940?asIframe" height="350" width="300" ></iframe>
                </div>
            </div>
            <div class="grid-cols-8">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Browsers
                    </h2>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5 frequent-host">
                    <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1605080671072_1771042773?asIframe" height="350" width="400" ></iframe>
                </div>
            </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Number of Requests
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604931071619_933448088?asIframe" height="380" width="950" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Frequent Paths
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604545325628_390865869?asIframe" height="350" width="950" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Operating Systems
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604544262987_881318197?asIframe" height="450" width="950" ></iframe>
        </div>
    </div>

@endsection
