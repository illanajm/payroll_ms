@extends('master.layout')
@section('content')
@include('sidebar.sidebar')
<main class="o-page__content" style="padding-bottom: 5%;"> 
    <header class="c-navbar">
        <button class="c-sidebar-toggle u-mr-small">
            <span class="c-sidebar-toggle__bar"></span>
            <span class="c-sidebar-toggle__bar"></span>
            <span class="c-sidebar-toggle__bar"></span>
        </button> 

        <h2 class="c-navbar__title u-mr-auto">PAYROLL MANAGEMENT SYSTEM</h2> 
    </header> 
    <div class="container-fluid" style="margin:1%; padding:1%; width:98%; margin-top: 2%; background-color: white;">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="c-table-responsive@desktop"> 
                    <table class="c-table">
                        <caption class="c-table__title">
                            Leave Types
                        </caption>
                        <thead class="c-table__head c-table__head--slim">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head"></th>
                                <th class="c-table__cell c-table__cell--head">Type</th> 
                                <th class="c-table__cell c-table__cell--head">Description</th> 
                                <th class="c-table__cell c-table__cell--head">Days</th> 
                                <th class="c-table__cell c-table__cell--head">Pay</th> 
                                <th class="c-table__cell c-table__cell--head">Created</th> 
                                <th class="c-table__cell c-table__cell--head">Updated</th> 
                                <th class="c-table__cell c-table__cell--head">Action</th> 
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($leave as $data)
                             <tr class="c-table__row">             
                            <td class="c-table__cell"><b>{{$data->id}}</b></td>  
                            <td class="c-table__cell">{{$data->name}}</td>  
                            <td class="c-table__cell">{{$data->description}}</td>
                            <td class="c-table__cell">{{$data->days}}</td>
                            <td class="c-table__cell">{{$data->pay}}</td>   
                            <td class="c-table__cell">2 days ago</td>  
                            <td class="c-table__cell">2 days ago</td>  
                            <td class="c-table__cell">
                            <div class="c-dropdown dropdown">
                                    <button class="c-btn c-btn--info has-dropdown dropdown-toggle" id="dropdownMenuButton21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                    <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton21" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -155px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="c-dropdown__item dropdown-item" href="{{URL::route('leave.update_form',$data->id)}}">Update</a>  
                                        <a class="c-dropdown__item dropdown-item" href="{{URL::route('leave.delete',$data->id)}}" onclick="return confirm('Are you sure?')">Delete</a>  
                                    </div>
                                </div>
                            </td>
                            @endforeach  
                            </tr>       
                        </tbody>
                    </table> 
                </div> 
            </div>
        </div> 
    </div>
</main>
@endsection

