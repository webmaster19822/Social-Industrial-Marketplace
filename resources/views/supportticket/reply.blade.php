@extends('buyer.app')

@section('content')
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{url()}}/user-dashboard">Home</a>
            <i class="fa fa-circle"></i>  
        </li>
        <li>
            <span>Support Tickets</span>
        </li>
    </ul>
</div>
<div class="col-md-12 main_box">
    <div class="row">
        <div class="col-md-12 border2x_bottom">
            <div class="col-md-9 col-sm-9">
                <div class="row">
                    <h3 class="page-title uppercase">
                        <i class="fa fa-server color-black"></i>  Reply to Tickets
                    </h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 text-right">
                <div class="row">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet-body">
                @if (Session::has('message'))
                <div id="" class="custom-alerts alert alert-success fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>{{ Session::get('message') }}</div>
                @endif
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                    <tr>
                        <th> Sr. No. </th>
                        <th> Title </th>
                        <th> Status </th>
                        <th style="text-align:right"> Reply </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tickets as $index=>$ticket)
                    <tr class="odd gradeX">
                        <td>{{$index+1}}</td>
                        <td>{{ $ticket->title }}</td>
                        <td>
                            @if($ticket->status == 1)
                            <span class="font-red">Closed</span>
                            @else
                            Active
                            @endif
                        </td>
                        <td>
                            @if($ticket->status == 0)
                            <a href="{{ route('supporttickets.show', $ticket->id) }}" class="btn btn-circle btn-success btn-sm">
                                <i class="fa fa-edit"></i>  Request more Info </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <ul class="pager">
                    @if($previousPageUrl != '')
                    <li class="previous">
                        <a href="{{$previousPageUrl}}"> ← Prev </a>
                    </li>
                    @endif
                    @if($nextPageUrl != '')
                    <li class="next">
                        <a href="{{$nextPageUrl}}"> Next → </a>
                    </li>
                    @endif
                </ul>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>
<script>
    /* for show menu active */
    $("#support-tickets-main-menu").addClass("active");
    $('#support-tickets-main-menu' ).click();
    $('#support-tickets-menu-arrow').addClass('open');
    $('#reply-ticket-view-menu').addClass('active');
    /* end menu active */

</script>
@endsection
