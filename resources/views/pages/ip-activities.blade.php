@extends('../layout/side-menu')

@section('subhead')
    <title>IP Activities</title>
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
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system" style="height: 400px">
            <form class="form-group" action="{{route('time-ip-activities.store')}}" method="post">
                @csrf
                <div class="form-group row">
                    <h4 class="col-md-1 col-form-label">Start time</h4>
                    <div class="col-md-4">
                        <input class="form-control" type="datetime-local" value="{{$start_time}}"
                               id="example-datetime-local-input" name="start_time">
                    </div>
                    <h4 class="col-md-1 col-form-label">End time</h4>
                    <div class="col-md-4">
                        <input class="form-control" type="datetime-local" value="{{$end_time}}"
                               id="example-datetime-local-input" name="end_time">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Apply</button>
            </form>
        </div>
    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Search For A Certain Request(s)
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1606895037904_1915352090?asIframe" height="900" width="1000" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                IP Lookup From Log File
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1605006489651_1517903191?asIframe" height="500" width="1000" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                IP Return Status Amount
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1603248460518_75151105?asIframe" height="600" width="1000" ></iframe>
        </div>
    </div>

    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                IP Request Amount For URL/Path
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1604737867569_529935447?asIframe" height="600" width="1000" ></iframe>
        </div>
    </div>
    <div class="grid">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                URL/Path Return Status Amount
            </h2>
        </div>
        <div class="intro-y box p-5 mt-12 sm:mt-5 operating-system">
            <iframe src="http://namenode:50070/#/notebook/2FN966YVS/paragraph/paragraph_1606963932693_1272049513?asIframe" height="600" width="1000" ></iframe>
        </div>
    </div>

@endsection
