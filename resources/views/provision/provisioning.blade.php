@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Provisioning...</div>

                    <div class="panel-body">
                        <h2>Running scripts on the fresh server...</h2>

                        <div style="height:400px;overflow:scroll;overflow-x:hidden;">
                            <div id="provisioningLog" data-id={{ $id }} data-uuid="{{ $uuid }}">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
