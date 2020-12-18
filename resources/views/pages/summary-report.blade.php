@extends('../layout/side-menu')

@section('subhead')
    <title>Summary report</title>
@endsection

@section('subcontent')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Choose Your Timeframe (Format: YYYY-MM-DD HH:MM:SS)
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1608033845284_2081161116?asIframe" height="200" width="1000" ></iframe>
        </div>
    </div>
    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Choose Your Timeframe (Format: YYYY-MM-DD HH:MM:SS)
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system" style="height: 400px">
            <form class="form-group">
            <div class="form-group row">
                <h4 class="col-md-1 col-form-label">Start time</h4>
                <div class="col-md-4">
                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00"
                           id="example-datetime-local-input">
                </div>
                <h4 class="col-md-1 col-form-label">End time</h4>
                <div class="col-md-4">
                    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00"
                           id="example-datetime-local-input">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Apply</button>
        </form>
    </div>
    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Requests By Time
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604653127275_2111536586?asIframe" height="450" width="1000" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Statuses By Time
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604484639042_2132495673?asIframe" height="450" width="1000" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Traffic By Time
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
