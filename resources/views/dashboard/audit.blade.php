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
                            Audit Trail <small>total of <b style="color: red">1</b> result/s</small>
                        </caption>
                        <thead class="c-table__head c-table__head--slim">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head"></th>
                                <th class="c-table__cell c-table__cell--head">Module</th>
                                <th class="c-table__cell c-table__cell--head">Action</th>
                                <th class="c-table__cell c-table__cell--head">Date</th> 
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="c-table__row">
                                <td class="c-table__cell c-table__cell--img o-media">

                                    <div class="o-media__img u-mr-xsmall">
                                        <img src="" style="width:56px;">
                                    </div>

                                    <div class="o-media__body">
                                        Paul Errol Patacsil
                                        <span class="u-block u-text-mute u-text-xsmall">Admin</span>
                                    </div>
                                </td>
         
                                <td class="c-table__cell">Deductions</td>  
                                <td class="c-table__cell">Added new table</td>  
                                <td class="c-table__cell">1 hour ago</td>  
                            </tr> 
                                                                    
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>  
    </div>
</main>

@endsection
