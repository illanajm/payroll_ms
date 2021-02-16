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
                            Add Employee
                        </caption> 
                    </table>
                <span class="c-divider u-mv-medium"></span>
                </div> 
            </div> 
            <div class="col-lg-12 col-md-12" style="padding: 2%;"> 
                <form method="post" action=""> 
                    <input type="hidden">
                    <div class="row">
                        <div class="col-lg-12 col-md-12"> 
                            <div class="col-lg-4 col-md-4 u-mb-medium">
                                <div class="c-field">
                                    <label class="c-field__label" for="input18">Photo</label>
                                    <input class="c-input c-input--info" id="input17" type="file" required="" name="file">
                                </div>
                            </div>   
                        </div>   
                        <div class="col-lg-4 col-md-4 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">First name</label>
                                <input class="c-input c-input--info" id="input17" type="text" required="" name="fname">
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-4 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">Middle name</label>
                                <input class="c-input c-input--info" id="input17" type="text" required="" name="mname">
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-4 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">Last name</label>
                                <input class="c-input c-input--info" id="input17" type="text" required="" name="lname">
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-4">
                            <div class="col-lg-12 col-md-12 u-mb-medium">
                                <div class="c-form-field">
                                    <label class="c-field__label" for="input17">Contact</label>
                                    <input class="c-input c-input--info" id="input17" type="number" required="" name="contact">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="row"> 
                                    <div class="col-lg-6 col-md-6 u-mb-medium">
                                        <div class="c-form-field">
                                            <label class="c-field__label" for="input17">Birthday</label>
                                            <input class="c-input c-input--info" id="input17" type="date" required="" name="birthday" value="10">
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6 u-mb-medium">
                                        <div class="c-form-field">
                                            <label class="c-field__label" for="input17">Gender</label>
                                                <select class="c-select select2-hidden-accessible" id="select1" name="gender" data-select2-id="select1" tabindex="-1" aria-hidden="true">
                                                    <option value="Male" selected="" data-select2-id="2">Male</option> 
                                                    <option value="Female">Female</option> 
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select1-container"><span class="select2-selection__rendered" id="select2-select1-container" role="textbox" aria-readonly="true" title="Male">Male</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>                                        
                                            </div>
                                        <!-- </div> -->
                                    </div>  
                                </div> 
                            </div> 
                        </div>
                        <div class="col-lg-8 col-md-8 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">Address</label>
                                <textarea class="c-input" rows="6" id="textarea5" required="" name="address"></textarea>
                            </div>
                        </div>  
                        <div class="col-lg-4 col-md-4 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">Department</label>
                                <select class="c-select select2-hidden-accessible" id="select2" name="department" data-select2-id="select2" tabindex="-1" aria-hidden="true">
                                    <option value="1" data-select2-id="4">IT Departments</option>
                                </select>
                            </div>
                        </div>   
                        <div class="col-lg-4 col-md-4 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">Designation</label>
                                <input class="c-input c-input--info" id="input17" type="text" required="" name="designation">
                            </div>
                        </div>    
                        <div class="col-lg-4 col-md-4 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">Basic Rate Per Day</label>
                                <input class="c-input c-input--info" id="input17" type="number" required="" name="basic">
                            </div>
                        </div>    

                        <div class="col-lg-6 col-md-6 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">PhilHealth Contribution Table</label>
                                <select class="c-select select2-hidden-accessible" id="select3" name="philhealth" data-select2-id="select3" tabindex="-1" aria-hidden="true">
                                    <option value="3" data-select2-id="6">1. P 10,000.00 - below - (P 275.00 monthly)</option>
                                    <option value="6">2. P 10,000.00 - above - (P 575.00 monthly)</option>
                                    <option value="14">3. P Exempted123 - (P 012 monthly)</option>
                                </select>
                            </div>
                        </div> 

                        <div class="col-lg-6 col-md-6 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">SSS Contribution Table</label>
                                <select class="c-select select2-hidden-accessible" id="select4" name="sss" data-select2-id="select4" tabindex="-1" aria-hidden="true">
                                    <option value="2" data-select2-id="8">1. P 8,999.99 - below - (P 990.00 monthly)</option>
                                    <option value="5">2. P 8,999.99 - 12,999 - (P 1490.00 monthly)</option>
                                    <option value="13">3. P Exempted - (P 0 monthly)</option>
                                    <option value="16">4. P asdffadf - (P 45435 monthly)</option>
                                    <option value="18">5. P 123123 - (P 123123 monthly)</option>
                                    <option value="19">6. P okay - (P 20 monthly)</option>
                                    <option value="23">7. P 30000 - (P 2000 monthly)</option>
                                    <option value="24">8. P 5000 - (P 300 monthly)</option>
                                    <option value="25">9. P 1 - (P 1 monthly)</option>
                                    <option value="26">10. P dfad - (P 435 monthly)</option>
                                </select>
                            </div>
                        </div> 

                        <div class="col-lg-6 col-md-6 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">PAGIBIG Contribution Table</label>
                                <select class="c-select select2-hidden-accessible" id="select5" name="pagibig" data-select2-id="select5" tabindex="-1" aria-hidden="true">
                                    <option value="1" data-select2-id="10">1. P 8,999.99 - below - (P 200.00 monthly)</option>
                                    <option value="4">2. P 8,999.99 - 15,999 - (P 400.00 monthly)</option>
                                    <option value="15">3. P Exempted - (P 0 monthly)</option>
                                    <option value="20">4. P 789 - (P 789 monthly)</option>
                                </select>
                            </div>
                        </div> 

                        <div class="col-lg-6 col-md-6 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label" for="input18">Income Tax Table</label>
                                <select class="c-select select2-hidden-accessible" id="select6" name="tax" data-select2-id="select6" tabindex="-1" aria-hidden="true">
                                    <option value="7" data-select2-id="12">1. P 8,999 - below - (P 5% monthly)</option>
                                    <option value="8">2. P 12,999 - above - (P 5% monthly)</option>
                                    <option value="12">3. P ok - (P -5% monthly)</option>
                                    <option value="21">4. P ok - (P 12% monthly)</option>
                                    <option value="22">5. P dasdasd - (P 123123% monthly)</option>
                                </select>
                            </div>
                        </div> 


                        <div class="col-lg-12 col-md-12 u-mb-medium">
                            <span class="c-divider u-mv-medium"></span>
                        </div>

                        <div class="col-lg-2 col-md-2 u-mb-medium">
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


