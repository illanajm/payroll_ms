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
                            Employees   
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
                                <th class="c-table__cell c-table__cell--head">Gender</th> 
                                <th class="c-table__cell c-table__cell--head">Department</th> 
                                <th class="c-table__cell c-table__cell--head">Contact</th> 
                                <th class="c-table__cell c-table__cell--head">Total Earnings</th> 
                                <th class="c-table__cell c-table__cell--head">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                                    <tr class="c-table__row">
                                        <td class="c-table__cell c-table__cell--img o-media">

                                            <div class="o-media__img u-mr-xsmall"> 
                                                <img src="" style="width:56px;"> 
                                            </div>

                                            <div class="o-media__body">
                                                Juan Tamad Tamad
                                                <span class="u-block u-text-mute u-text-xsmall">Qwert</span>
                                            </div>
                                        </td>
          
                                        <td class="c-table__cell">CYAN2021000006</td>  
                                        <td class="c-table__cell">Male</td>  
                                        <td class="c-table__cell">Billing Department</td>  
                                        <td class="c-table__cell">1234</td>  
                                        <td class="c-table__cell" style="color:red;">P -780.00</td>  
                                        <td class="c-table__cell">
                                            <div class="c-dropdown dropdown">
                                                <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                
                                                <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton21">
                                                    <a class="c-dropdown__item dropdown-item" href="">Update</a> 
                                                    <a class="c-dropdown__item dropdown-item" href="">Apply Loan</a> 
                                                    <a class="c-dropdown__item dropdown-item" href="">Apply Leave</a> 
                                                    <a class="confirm c-dropdown__item dropdown-item" href="">Delete</a>
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
                                Total of <b style="color: red">6</b> 
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


