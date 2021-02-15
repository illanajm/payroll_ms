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
                            Add Loan Types
                        </caption> 
                    </table>
                <span class="c-divider u-mv-medium"></span>
                </div> 
            </div> 
            <div class="col-lg-12 col-md-12" style="padding: 2%;"> 
                <form action="{{URL::route('loan.update',$data->id)}}" method="post">
                    @csrf 
                    <div class="row">
                        <div class="col-sm-4 col-md-4 u-mb-medium">
                            <div class="c-form-field">
                                <label class="c-field__label" for="input17">Loan Type</label>
                                <input class="c-input c-input--info" id="input17" type="text" value="{{$data->loan_type}}" name="loan_type">
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-8 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">Description</label>
                                <textarea class="c-input" rows="5" id="textarea5" value="{{$data->description}}" name="description">{{$data->description}}</textarea>
                            </div>
                        </div> 

                        <div class="col-sm-12 col-md-12 u-mb-medium">
                            <span class="c-divider u-mv-medium"></span>
                        </div>

                        <div class="col-sm-2 col-md-2 u-mb-medium">
                            <div class="c-field">
                                <div class="col u-mb-medium">
                                    <button class="c-btn c-btn--info">Save</button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </form> 
            </div> 
        </div> 
    </div>
</main>
@endsection


