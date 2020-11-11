@extends('../layout/side-menu')

@section('subhead')
    <title>Dashboard</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-3 gap-4">
            <div class="grid-cols-2 frequent-host">
                <h1>frequent host</h1>
            </div>
            <div class="grid-cols-8 frequent-path">
                <h1>frequent path</h1>
            </div>
    </div>

    <div class="grid operating-system">
        <h1>operating system</h1>
    </div>

    <div class="grid operating-system">
        <h1>Requests per hour</h1>
    </div>
@endsection
