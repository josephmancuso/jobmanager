<div class="right_col" role="main">
<h1>Current Jobs</h1>
<div class="row flex-row">

    @foreach ($workorders->all() as $workorder)
        <div class="col-xs-12 col-sm-6 flex-col" style="border: 1px solid black">
            <div class="project-card">
                <div class="row">
                    <a href="/single/">
                        <img src="{{ loadStatic('manager').$workorder['picture'] }}" class='img-responsive'>
                    </a>
                </div>
                <div class="row">
                    <h1>
                        {{ $workorder['street_address'] }}
                    </h1>
                    <h3>
                        {{ $workorder['city'] }}, 
                        {{ $workorder['state'] }} 
                        {{ $workorder['zipcode'] }}
                    </h3>
                    <h5>
                    Reported By 
                       @{{ $workorder['creator'] }}
                    </h5>
                </div>

                <div class="collapse navbar-collapse js-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-large">
                            <a href="#" class="dropdown-toggle waves-effect waves-light btn-large blue white-text" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            
                            <ul class="dropdown-menu dropdown-menu-large row">
                                <li class="col-sm-12">
                                    @foreach ($workorders->getEmployees() as $employee)

                        <div class="col-xs-4 text-center" role="presentation">
                           <img 
                           src="{{ loadStatic('manager').$employee['profile'] }}" class="img-rounded" 
                           style="height: 50px">
                           <h4 class="text-center">
                               {{ $employee['firstname'] }} 
                               {{ $employee['lastname'] }}
                           </h4>
                        </div>

                    @endforeach
                                </li>
                            </ul>
                            
                        </li>
                    </ul>
                    
                </div><!-- /.nav-collapse -->

                <!--
                <div class="profile-thumbnail row text-center bold">
                        <div class="waves-effect waves-light btn-large blue white-text toggle-employees" >Assign</div>
                  
                   <a href="/single/" class="waves-effect waves-light btn-large deep-orange white-text">View</a>
                </div>
                -->

                <div class="dropdown-menu dropdown-menu-large row employees" id="employees">
                    @foreach ($workorders->getEmployees() as $employee)

                        <div class="col-xs-4 text-center" role="presentation">
                           <img 
                           src="{{ loadStatic('manager').$employee['profile'] }}" class="img-rounded" 
                           style="height: 50px">
                           <h4 class="text-center">
                               {{ $employee['firstname'] }} 
                               {{ $employee['lastname'] }}
                           </h4>
                        </div>

                    @endforeach
                </div>
                <hr>
                <h3>Assigned</h3>
                <div class="row flex-row-bottom">
                
                @unless ($workorders->getAssigned($workorder['id']))
                   <h3 class="text-center">Noone Assigned</h3>
                @endunless

                @foreach ($workorders->getAssigned($workorder['id']) as $assigned)
                
                @declare $employees = $workorders->getEmployeeInfo($assigned['name'])

                    @foreach ($employees as $employee)

                        <div class="profile-thumbnail col-xs-4">
                            <div class="dropdown">
                                <img src="{{ loadStatic('manager').$employee['profile'] }}" class="img-rounded img-responsive dropdown-toggle" id="menu1" data-toggle="dropdown">

                                <h3 class="text-center">
                                {{ $employee['firstname'] }}

                                {{ $employee['lastname'] }}
                                </h3>
                    
                                <ul class="dropdown-menu bold" role="menu" aria-labelledby="menu1">
                                    <li role="presentation">
                                       <div class='btn deep-orange form-control white-text'> Un-Assign </div> 
                                    </li>
                                    <li class='divider'></li>
                                    <li role="presentation">
                                        <div class='btn green form-control white-text'> Call </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    @endforeach

                @endforeach
                </div>
            </div>
        </div> <!-- ./col -->
    @endforeach


</div>
</div>


