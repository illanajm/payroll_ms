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
                            Attendance for <b>February 16, 2021</b>
                        </caption>
                        <thead class="c-table__head c-table__head--slim">
                            <tr class="c-table__row">
                                <th class="c-table__cell c-table__cell--head"></th>
                                <th class="c-table__cell c-table__cell--head">REG IN</th> 
                                <th class="c-table__cell c-table__cell--head">REG OUT</th> 
                                <th class="c-table__cell c-table__cell--head">REG HOURS</th> 
                                <th class="c-table__cell c-table__cell--head">OT HOURS</th> 
                                <th class="c-table__cell c-table__cell--head">NIGHT DIFF HOURS</th> 
                                <th class="c-table__cell c-table__cell--head">EARLY</th> 
                                <th class="c-table__cell c-table__cell--head">TARDY</th> 
                                <th class="c-table__cell c-table__cell--head">Double Pay</th>  
                                <th class="c-table__cell c-table__cell--head"></th> 
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="c-table__row"> 
                                        <form action="..." method="post"></form>
                                            <input type="hidden">
                                            <td class="c-table__cell c-table__cell--img o-media"> 
                                                <div class="o-media__img u-mr-xsmall"> 
                                                    <img src="" style="width:56px;"> 
                                                </div>

                                                <div class="o-media__body">
                                                    Paul
                                                    V
                                                    Patacsil
                                                    <span class="u-block u-text-mute u-text-xsmall">Junior Software Developer</span>
                                                </div>
                                            </td> 
                                            <td class="c-table__cell"> 
                                                <div class="input-group clockpicker">
                                                    <input type="text" class="c-input" value="09:00" name="time_in" required="">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-time"></span>
                                                    </span>
                                                </div>
                                            </td>   
                                            <td class="c-table__cell"> 
                                                <div class="input-group clockpicker">
                                                    <input type="text" class="c-input" value="01:30" name="time_out" required="">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-time"></span>
                                                    </span>
                                                </div>
                                            </td>   
                                            <td class="c-table__cell">
                                                -8 hr/s
                                            </td>  
                                            <td class="c-table__cell">
                                                0 hr/s
                                            </td>  
                                            <td class="c-table__cell">
                                                0 hr/s
                                            </td> 
                                            <td class="c-table__cell">
                                                0 hr/s
                                            </td>
                                            <td class="c-table__cell">
                                                1 hr/s
                                            </td>    
                                            <td class="c-table__cell">
                                                <input class="c-input" type="checkbox" name="doublepay" checked="">
                                                <input class="c-input" type="hidden" name="id" value="4">
                                            </td>   
                                            <td class="c-table__cell">  
                                                <button class="c-btn c-btn--info">Save</button> 
                                            </td>  
                                    </tr>                
                        </tbody>
                    </table>  
                </div> 
            </div>
        </div> 
    </div>
</main>
    <script src="http://xsodia.space/payroll/assets/js/jquery.js"></script>
    <script src="http://xsodia.space/payroll/assets/js/main.min3661.js?v=2.0"></script>
    <script src="http://xsodia.space/payroll/assets/js/clock.js"></script>
    <script type="text/javascript">
        $('body .confirm').click(function(){
            if(window.confirm("Are you sure you want to proceed ?")){
                return true;
            } 
            return false;
        });
    </script>
    <script type="text/javascript">
        $('.clockpicker').clockpicker({
            donetext: 'Done', 
        });
    </script>
    <style>
	    .alert-card{
		position: fixed;
		z-index: 100;
		width: 30%;
		top: 2%;
		right: 1%;
	    }
    </style>
    <div class="popover clockpicker-popover bottom clockpicker-align-left" style="display: none; top: 312.328px; left: 261.219px;">
    <div class="arrow"></div><div class="popover-title"><span class="clockpicker-span-hours text-primary">09</span> : <span class="clockpicker-span-minutes">00</span><span class="clockpicker-span-am-pm"></span></div><div class="popover-content"><div class="clockpicker-plate"><div class="clockpicker-canvas"><svg class="clockpicker-svg" width="200" height="200"><g transform="translate(100,100)"><line x1="0" y1="0" x2="-54" y2="9.91963907309356e-15"></line><circle class="clockpicker-canvas-fg" r="3.5" cx="-54" cy="9.91963907309356e-15"></circle><circle class="clockpicker-canvas-bg" r="13" cx="-54" cy="9.91963907309356e-15"></circle><circle class="clockpicker-canvas-bearing" cx="0" cy="0" r="2"></circle></g></svg></div><div class="clockpicker-dial clockpicker-hours" style="visibility: visible;"><div class="clockpicker-tick" style="left: 87px; top: 7px;">00</div><div class="clockpicker-tick" style="left: 114px; top: 40.2346px; font-size: 120%;">1</div><div class="clockpicker-tick" style="left: 133.765px; top: 60px; font-size: 120%;">2</div><div class="clockpicker-tick" style="left: 141px; top: 87px; font-size: 120%;">3</div><div class="clockpicker-tick" style="left: 133.765px; top: 114px; font-size: 120%;">4</div><div class="clockpicker-tick" style="left: 114px; top: 133.765px; font-size: 120%;">5</div><div class="clockpicker-tick" style="left: 87px; top: 141px; font-size: 120%;">6</div><div class="clockpicker-tick" style="left: 60px; top: 133.765px; font-size: 120%;">7</div><div class="clockpicker-tick" style="left: 40.2346px; top: 114px; font-size: 120%;">8</div><div class="clockpicker-tick" style="left: 33px; top: 87px; font-size: 120%;">9</div><div class="clockpicker-tick" style="left: 40.2346px; top: 60px; font-size: 120%;">10</div><div class="clockpicker-tick" style="left: 60px; top: 40.2346px; font-size: 120%;">11</div><div class="clockpicker-tick" style="left: 87px; top: 33px; font-size: 120%;">12</div><div class="clockpicker-tick" style="left: 127px; top: 17.718px;">13</div><div class="clockpicker-tick" style="left: 156.282px; top: 47px;">14</div><div class="clockpicker-tick" style="left: 167px; top: 87px;">15</div><div class="clockpicker-tick" style="left: 156.282px; top: 127px;">16</div><div class="clockpicker-tick" style="left: 127px; top: 156.282px;">17</div><div class="clockpicker-tick" style="left: 87px; top: 167px;">18</div><div class="clockpicker-tick" style="left: 47px; top: 156.282px;">19</div><div class="clockpicker-tick" style="left: 17.718px; top: 127px;">20</div><div class="clockpicker-tick" style="left: 7px; top: 87px;">21</div><div class="clockpicker-tick" style="left: 17.718px; top: 47px;">22</div><div class="clockpicker-tick" style="left: 47px; top: 17.718px;">23</div></div><div class="clockpicker-dial clockpicker-minutes clockpicker-dial-out" style="visibility: hidden;"><div class="clockpicker-tick" style="left: 87px; top: 7px; font-size: 120%;">00</div><div class="clockpicker-tick" style="left: 127px; top: 17.718px; font-size: 120%;">05</div><div class="clockpicker-tick" style="left: 156.282px; top: 47px; font-size: 120%;">10</div><div class="clockpicker-tick" style="left: 167px; top: 87px; font-size: 120%;">15</div><div class="clockpicker-tick" style="left: 156.282px; top: 127px; font-size: 120%;">20</div><div class="clockpicker-tick" style="left: 127px; top: 156.282px; font-size: 120%;">25</div><div class="clockpicker-tick" style="left: 87px; top: 167px; font-size: 120%;">30</div><div class="clockpicker-tick" style="left: 47px; top: 156.282px; font-size: 120%;">35</div><div class="clockpicker-tick" style="left: 17.718px; top: 127px; font-size: 120%;">40</div><div class="clockpicker-tick" style="left: 7px; top: 87px; font-size: 120%;">45</div><div class="clockpicker-tick" style="left: 17.718px; top: 47px; font-size: 120%;">50</div><div class="clockpicker-tick" style="left: 47px; top: 17.718px; font-size: 120%;">55</div></div></div><span class="clockpicker-am-pm-block"></span></div><button type="button" class="btn btn-sm btn-default btn-block clockpicker-button">Done</button></div>
@endsection

