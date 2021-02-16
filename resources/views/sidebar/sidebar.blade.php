<div class="o-page__sidebar js-page-sidebar">
    <div class="c-sidebar">
        <a class="c-sidebar__brand"> 
            <img class="c-sidebar__brand-img" src="http://xsodia.space/payroll/assets/logo.png" alt="Logo" style="width: 50%; margin-left: 15%;"> 
        </a>
        
        <h4 class="c-sidebar__title">Dashboard</h4>
        <ul class="c-sidebar__list">  
            <li class="c-sidebar__item active">
                <a class="c-sidebar__link" href="...">
                    <i class="fa fa-home u-mr-xsmall"></i>
                    Dashboard
                </a>
            </li>  

            <li class="c-sidebar__item">
                <a class="c-sidebar__link" href="...">
                    <i class="fa fa-home u-mr-xsmall"></i>
                    Audit Trail
                </a>
            </li>  
                
            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_2" aria-expanded="false" aria-controls="sidebar-submenu_2">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Departments
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_2">
                    <li><a class="c-sidebar__link" href="{{URL::route('department.index')}}">All Departments</a></li> 
                    <li><a class="c-sidebar__link" href="{{URL::route('department.add')}}">Add Departments</a></li>                                         
                </ul>
            </li>

            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_3" aria-expanded="false" aria-controls="sidebar-submenu_3">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Employees
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_3">
                    <li><a class="c-sidebar__link" href="...">Records</a></li> 
                    <li><a class="c-sidebar__link" href="...">Add New</a></li>                                         
                </ul>
            </li>

            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_4" aria-expanded="false" aria-controls="sidebar-submenu_4">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Loans
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_4">
                    <li><a class="c-sidebar__link" href="...">All loans</a></li> 
                    <li><a class="c-sidebar__link" href="{{URL::route('loan.index')}}">Loan Types</a></li>
                    <li><a class="c-sidebar__link" href="{{URL::route('loan.add')}}">Add Loan Types</a></li>                                          
                </ul>
            </li>

            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_5" aria-expanded="false" aria-controls="sidebar-submenu_5">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Leaves
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_5">
                    <li><a class="c-sidebar__link" href="...">All leaves</a></li> 
                    <li><a class="c-sidebar__link" href="{{URL::route('leave.index')}}">Leave Types</a></li>
                    <li><a class="c-sidebar__link" href="{{URL::route('leave.store_form')}}">Add Leave Types</a></li>                                          
                </ul>
            </li>

            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_6" aria-expanded="false" aria-controls="sidebar-submenu_6">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Mandatory Deductions
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_6">
                    <li><a class="c-sidebar__link" href="{{URL::route('deduction.add')}}">Add New</a></li> 
                    <li><a class="c-sidebar__link" href="{{URL::route('tax.index')}}">Tax Table</a></li>
                    <li><a class="c-sidebar__link" href="{{URL::route('sss.index')}}">SSS Table</a></li>
                    <li><a class="c-sidebar__link" href="{{URL::route('philhealth.index')}}">Philhealth Table</a></li>
                    <li><a class="c-sidebar__link" href="{{URL::route('pagibig.index')}}">Pagibig Table</a></li>                                          
                </ul>
            </li>

            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_7" aria-expanded="false" aria-controls="sidebar-submenu_7">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Timekeeping
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_7">
                    <li><a class="c-sidebar__link" href="...">Records</a></li> 
                    <li><a class="c-sidebar__link" href="...">Add New</a></li>                                     
                </ul>
            </li>

            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_8" aria-expanded="false" aria-controls="sidebar-submenu_8">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Payslips
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_8">
                    <li><a class="c-sidebar__link" href="...">Records</a></li> 
                    <li><a class="c-sidebar__link" href="...">Process Payroll</a></li>                                     
                </ul>
            </li>

            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_9" aria-expanded="false" aria-controls="sidebar-submenu_9">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Settings
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_9">
                    <li><a class="c-sidebar__link" href="...">Company Setups</a></li> 
                    <li><a class="c-sidebar__link" href="...">Account Settings</a></li>                                     
                </ul>
            </li>

            <li class="c-sidebar__item">
                <a class="c-sidebar__link" href="...">
                    <i class="fa fa-home u-mr-xsmall"></i>
                    Logout
                </a>
            </li>  

        </ul>  
    </div> 
</div> 