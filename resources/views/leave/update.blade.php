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
                            Add Leave Types
                        </caption> 
                    </table>
                <span class="c-divider u-mv-medium"></span>
                </div> 
            </div> 
            <div class="col-lg-12 col-md-12" style="padding: 2%;"> 
                <form action="{{URL::route('leave.update',$data->id)}}" method="post">
                    @csrf 
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="col-sm-12 col-md-12 u-mb-medium">
                                <div class="c-form-field">
                                    <label class="c-field__label" for="input17">Leave Type</label>
                                    <input class="c-input c-input--info" id="input17" type="text" required="" name="name" value="{{$data->name}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="row"> 
                                    <div class="col-sm-4 col-md-4 u-mb-medium">
                                        <div class="c-form-field">
                                            <label class="c-field__label" for="input18">Allowed Days</label>
                                            <input class="c-input c-input--info" id="input18" type="number" required="" name="day" placeholder="0" value="{{$data->day}}">
                                        </div>
                                    </div> 
                                    <div class="col-sm-8 col-md-8 u-mb-medium">
                                        <div class="c-form-field">
                                            <label class="c-field__label" for="input19">Pay</label>
                                                <select class="c-select" name="pay" value="{{$data->pay}}">
                                                    <option value="1">With Pay</option> 
                                                    <option value="0" selected="" data-select2-id="2">Without Pay</option> 
                                                </select>                                       
                                            </div>
                                    </div>  
                                </div> 
                            </div> 
                        </div>
                        <div class="col-sm-8 col-md-8 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input20">Description</label>
                                <textarea class="c-input" rows="6" id="textarea5" required="" name="description" value="{{$data->description}}">{{$data->description}}</textarea>
                            </div>
                        </div> 

                        <div class="col-sm-12 col-md-12 u-mb-medium">
                            <span class="c-divider u-mv-medium"></span>
                        </div>

                       @include('button.button_save')
                    </div>
                </form> 
            </div> 
        </div> 
    </div>
</main>
@endsection


