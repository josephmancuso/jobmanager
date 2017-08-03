<div class="right_col" role="main">
    <div class="row">
        <h1>Single House</h1>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <img src="<?=loadStatic('manager')?>/images/house.jpg" class='img-responsive'>
            <div class="row">
                <h1>250 Greenbelt Pkwy</h1>
                <h3>Holbrook, NY 11741</h3>
            </div>
            <div class="row">
                <h3>Status: <a class="waves-effect waves-light btn-large blue white-text dropdown-button bold" data-activates="status-dropdown" data-alignment="right">To Do</a>
               <ul id='status-dropdown' class='dropdown-content'>
                    <li class="blue"><a class="white-text" href="#!">To Do</a></li>
                    <li class="green"><a class="white-text" href="#!">Started</a></li>
                    <li class="red"><a class="white-text" href="#!">Done</a></li>
                </ul></h3>
            </div>
            <hr>
            <div class="profile-thumbnail row text-center bold">
                <span class="dropdown">
                    <div class="waves-effect waves-light btn-large blue white-text"
                    id="menu1" data-toggle="dropdown">Assign</div>
                    <div class="dropdown-menu menu-padding bold" role="menu" aria-labelledby="menu1">
                        <div class="col-xs-6" role="presentation">
                           <img src="<?=loadStatic('manager')?>/images/profile.jpg" class="img-circle img-responsive">
                           <div class="text-center">
                               John K.
                           </div>
                        </div>
                        <div class="col-xs-6">
                            <img src="<?=loadStatic('manager')?>/images/profile.jpg" class="img-circle img-responsive">
                           <div class="text-center">
                               John K.
                           </div>
                        </div>
                    </div>
                </span>
               <a class="waves-effect waves-light btn-large teal white-text dropdown-button" data-activates="invoice-dropdown">Invoice</a>
               <ul id='invoice-dropdown' class='dropdown-content'>
                    <li><a href="#!">View</a></li>
                    <li><a href="#!">Estimate</a></li>
                    <li><a href="#!">Create</a></li>
                </ul>
               
  
            </div>
            <hr>
            <h3>Assigned</h3>
            <div class="row">
                <div class="profile-thumbnail col-xs-4">
                    <div class="dropdown">
                    <img src="<?=loadStatic('manager')?>/images/profile.jpg" class="img-circle img-responsive dropdown-button" id="menu1" data-activates='profile-dropdown' data-alignment="bottom">
                    <ul id='profile-dropdown' class='dropdown-content mui-dropdown__menu--right'>
                        <li><a href="#!">Un-Assign</a></li>
                        <li><a href="#!">Call</a></li>
                    </ul>
                  </div>
                </div>
            </div>

            <div class="row">
                <h3 id="work-order"> Work Order 
                <a class="waves-effect waves-light btn indigo white-text dropdown-button" data-activates='workorder-dropdown'>...</a></h3>
                <ul id='workorder-dropdown' class='dropdown-content'>
                    <li data-toggle="modal" data-target="#exampleModalLong"><a data-remodal-target="modal">New</a></li>
                    <li><a href="#!">Export All</a></li>
                </ul>
                <br>
                <h4>Work Order #57892 <a class="waves-effect waves-light btn blue white-text dropdown-button" data-activates='work-order-individual-dropdown'>...</a></h3>
                <ul id='work-order-individual-dropdown' class='dropdown-content'>
                    <li><a href="#!">Export</a></li>
                    <li><a href="/invoice/">Create Invoice</a></li>
                </ul></h4>
                <table class="mui-table ui-table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Replace Kitchen Sink</td>
                      <td>1</td>
                      <td>$495.25</td>
                    </tr>
                    <tr>
                      <td>Remove Boiler</td>
                      <td>2</td>
                      <td>$597.95</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <i class='fa fa-plus'></i>
                        </td>
                        
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4">
            <h3>Past Activity</h3>
            <div class="activity-card">
                <div>
                    Got to job and handled the dish washer
                </div>
                <small>By John K. on July 2nd, 2017 @ 6:10pm</small>
            </div>
            <hr>
            <div class="activity-card">
                <div>
                    Vito Calderone assigned John K.
                </div>
                <small>By Vito Calderone on July 2nd, 2017 @ 6:10pm</small>
            </div>
            <hr>
            <div class="activity-card">
                <div>
                    Got to job and handled the dish washer
                </div>
                <small>By John K. on July 2nd, 2017 @ 6:10pm</small>
            </div>
            <hr>
            <div class="activity-card">
                <div>
                    Vito Calderone assigned John K.
                </div>
                <small>By Vito Calderone on July 2nd, 2017 @ 6:10pm</small>
            </div>
            <hr>
            <div class="activity-card">
                <div>
                    Got to job and handled the dish washer
                </div>
                <small>By John K. on July 2nd, 2017 @ 6:10pm</small>
            </div>
            <hr>
            <div class="activity-card">
                <div>
                    Vito Calderone assigned John K.
                </div>
                <small>By Vito Calderone on July 2nd, 2017 @ 6:10pm</small>
            </div>
            <hr>
            <div class="activity-card">
                <div>
                    Got to job and handled the dish washer
                </div>
                <small>By John K. on July 2nd, 2017 @ 6:10pm</small>
            </div>
            <hr>
            <div class="activity-card">
                <div>
                    Vito Calderone assigned John K.
                </div>
                <small>By Vito Calderone on July 2nd, 2017 @ 6:10pm</small>
            </div>
            <hr>
            <div class="activity-card">
                <div>
                    Got to job and handled the dish washer
                </div>
                <small>By John K. on July 2nd, 2017 @ 6:10pm</small>
            </div>
            <hr>
            <div class="activity-card">
                <div>
                    Vito Calderone assigned John K.
                </div>
                <small>By Vito Calderone on July 2nd, 2017 @ 6:10pm</small>
            </div>
            <hr>
            <div class="activity-card">
                <div>
                    Got to job and handled the dish washer
                </div>
                <small>By John K. on July 2nd, 2017 @ 6:10pm</small>
            </div>
            <hr>
            <div class="activity-card">
                <div>
                    Vito Calderone assigned John K.
                </div>
                <small>By Vito Calderone on July 2nd, 2017 @ 6:10pm</small>
            </div>
            <hr>

        </div>
        
    </div>
</div>