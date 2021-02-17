@extends('master.layout')
@section('content')
@include('sidebar.sidebar')
<main class="o-page__content" style="padding-bottom: 5%;"> 
@include('navbar.header')
    <div class="container-fluid" style="margin:1%; padding:1%; width:98%; margin-top: 2%; background-color: white;">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="c-table-responsive@desktop"> 
                    <table class="c-table">
                        <caption class="c-table__title">
                            Leaves   
                            <form action="" method="get"> 
                                 
                                <div class="c-form-field">
                                    <label class="c-field__label" for="input17">Search</label>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input class="c-input c-input--info" id="input17" type="text" required="" name="q">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="col u-mb-medium">
                                                <button class="c-btn c-btn--info">Search</button>
                                            </div>
                                        </div>
                                    </div> 
                                </div>  
                            </form> 
                        </caption>
                        <thead class="c-table__head c-table__head--slim">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head"></th>
                                <th class="c-table__cell c-table__cell--head">Employee ID</th>
                                <th class="c-table__cell c-table__cell--head">Leave Type</th> 
                                <th class="c-table__cell c-table__cell--head">Start</th> 
                                <th class="c-table__cell c-table__cell--head">End</th>   
                                <th class="c-table__cell c-table__cell--head">Status</th> 
                                <th class="c-table__cell c-table__cell--head">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($leave as $data)
                             <tr class="c-table__row">             
                            <td class="c-table__cell"><b>{{$data->id}}</b></td>  
                            <td class="c-table__cell">{{$data->name}}</td>  
                            <td class="c-table__cell">{{$data->description}}</td>
                            <td class="c-table__cell">{{$data->day}}</td>
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
                                </td>  
                            </tr> 
                        </tbody>
                    </table> 
                    
                    <br> 
                    <div class="row">
                        <div class="col-md-6"> 
                            <ul class="c-pagination__list"> 
                                <li class="c-pagination__item"><a class="c-pagination__link is-active"><b>1</b></a></li> 
                            </ul> 
                        </div>
                        
                        <div class="col-md-6" style="text-align: right;"> 
                            <small>
                                Page <b style="color: red;">1</b> 
                                of 1 |
                                Total of <b style="color: red">1</b> 
                                result/s
                            </small>
                        </div>
                    </div>
	 
                </div> 
            </div>
        </div> 
    </div>
</main>
@endsection

