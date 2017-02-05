
     <li class="header">MAIN NAVIGATION</li>
       <li >
               <a href="#">
                 <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                 <span class="pull-right-container">
                   <i class="fa fa-angle-left pull-right"></i>
                 </span>
               </a>
               <ul class="treeview-menu">
                 <li ><a href="{{url('adminpanel/siteSetting')}}"><i class="fa fa-circle-o"></i> site setting</a></li>
                 <li><a href="#"><i class="fa fa-circle-o"></i> anther setting </a></li>
               </ul>
             </li>

           </li>



   <li >
          <a href="#">
            <i class="fa fa-users"></i> <span>control users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="{{url('adminpanel/users/create')}}"><i class="fa fa-circle-o"></i> add user</a></li>
            <li><a href="{{url('adminpanel/users')}}"><i class="fa fa-circle-o"></i> all users </a></li>
          </ul>
        </li>

         <li >
          <a href="#">
            <i class="fa fa-home"></i> <span>control Real Estate</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="{{url('adminpanel/bu/create')}}"><i class="fa fa-circle-o"></i> add Real Estate</a></li>
            <li><a href="{{url('adminpanel/bu')}}"><i class="fa fa-circle-o"></i> all Real Estate </a></li>
          </ul>
        </li>