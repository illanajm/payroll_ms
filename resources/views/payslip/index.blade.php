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
                            Payroll Records 
                        </caption>
                        <thead class="c-table__head c-table__head--slim">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head"></th>
                                <th class="c-table__cell c-table__cell--head">Processed</th>
                                <th class="c-table__cell c-table__cell--head">Cut off Start</th>
                                <th class="c-table__cell c-table__cell--head">Cut off End</th>
                                <th class="c-table__cell c-table__cell--head">Action</th> 
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="c-table__row"> 
                                <td class="c-table__cell">1</td>  
                                <td class="c-table__cell">4 days ago</td>  
                                <td class="c-table__cell">Feb 12, 2021</td>  
                                <td class="c-table__cell">Feb 13, 2021</td> 
                                <td class="c-table__cell">
                                    <div class="c-dropdown dropdown">
                                        <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>

                                        <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton21">
                                            <a class="c-dropdown__item dropdown-item" href="...">View</a>  
                                            <a class="confirm c-dropdown__item dropdown-item" href="...">Delete</a>
                                        </div>
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

