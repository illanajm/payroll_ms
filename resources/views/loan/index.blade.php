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
                            Loans   
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
                                <th class="c-table__cell c-table__cell--head">Loan Type</th> 
                                <th class="c-table__cell c-table__cell--head">Amount</th> 
                                <th class="c-table__cell c-table__cell--head">Months Payable</th> 
                                <th class="c-table__cell c-table__cell--head">Total</th>  
                                <th class="c-table__cell c-table__cell--head">Balance</th>  
                                <th class="c-table__cell c-table__cell--head">Status</th> 
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
                                        f_name 
                                        m_name
                                        l_name
                                        <span class="u-block u-text-mute u-text-xsmall">Comp Programmer</span>
                                    </div>
                                </td>
           
                                <td class="c-table__cell">CYAN2021000005</td>  
                                <td class="c-table__cell">Car Loan</td>  
                                <td class="c-table__cell">P 10,000.00</td>  
                                <td class="c-table__cell">6 months</td>  
                                <td class="c-table__cell">P 10,700.00</td>   
                                <td class="c-table__cell">P 10,700.00</td>
                                <td class="c-table__cell">
                                    <span class="c-badge c-badge--danger">Unpaid</span>
                                </td>  

                                <td class="c-table__cell">
                                    <div class="c-dropdown dropdown">
                                        <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                
                                        <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton21">
                                            <a class="c-dropdown__item dropdown-item" href="">Update</a>  
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
                                        </ul> 
                        </div>
                        <div class="col-md-6" style="text-align: right;"> 
                            <small>
                                Page <b style="color: red;">1</b> 
                                of 0 |
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

