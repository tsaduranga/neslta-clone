@extends('layouts.app')

@section('content')


     <div class="row">
                                                <div class="col-sm-12">



<div class="form-filter">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="tickets">All</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="tickets?status=open">Open</a>
        </li>
        <li class="nav-item">
            <a class="nav-link "
               href="tickets?status=answered">Answered</a>
        </li>
        <li class="nav-item">
            <a class="nav-link "
               href="tickets?status=closed">Closed</a>
        </li>
    </ul>
</div>
<hr/>


    <div class="table-responsive">
        <table class="table table-bordered dataTable">
            <thead>
            <tr>
                <th width="10%">Id</th>
                <th width="10%">Department</th>
                <th width="40%">Subject</th>
                <th width="10%">Status</th>
                <th width="15%">Last Updated</th>

            </tr>
            </thead>
            <tbody>

                @foreach ($tickets as $ticket)

                 <tr>
                    <td>
                       {{ $ticket['id'] }}
                    </td>
                    <td>
                        Technical
                    </td>
                    <td>
                        <a href="ticket/7e03-073-faf16">{{ $ticket['subject']}} </a>
                    </td>
                    <td>
                        <span class="text-success">
                            @if($ticket['status'] == 0)
                                Open
                            @else
                                Close
                            @endif
                        </span>
                    </td>
                    <td>16-Nov-2020 15:15:59</td>
                </tr>




                @endforeach


            </tbody>
        </table>
    </div>
    <div class="row pagination-footer">
    <div class="col-sm-3 text-left">
            </div>
    <div class="col-sm-6 text-center">
        <div style="margin: 0 auto; display: table"></div>
    </div>
    <div class="col-sm-3 text-right">
                                <span class="text-muted">Page <span class="text-bold">1</span>
                                                          of <span class="text-bold">1</span>,
                                                          of <span class="text-bold">1</span> entries
                                </span>
    </div>

</div>



            </div>
        </div>
        </div>





@endsection
