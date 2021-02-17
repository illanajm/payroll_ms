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
                            Attendance Records
                        </caption>
                        <thead class="c-table__head c-table__head--slim">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head"></th>
                                <th class="c-table__cell c-table__cell--head">Date</th> 
                                <th class="c-table__cell c-table__cell--head">Action</th> 
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="c-table__row"> 
          
                                <td class="c-table__cell">1</td>    
                                <td class="c-table__cell">May 07, 2018</td>   
                                <td class="c-table__cell">
                                    <div class="c-dropdown dropdown">
                                        <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>   
                                        <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton21">
                                            <a class="c-dropdown__item dropdown-item" href="{{URL::route('timekeeping.view')}}">View Record</a> 
                                            <a class="confirm c-dropdown__item dropdown-item" href="...">Delete</a>
                                        </div>
                                    </div>
                                </td>  
                            </tr>                   
                        </tbody>
                    </table>  
                </div> 
            </div>
        </div> 
    </div>
</main>
@endsection

