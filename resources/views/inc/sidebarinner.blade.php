
						
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">	
                     <!-- Profile Sidebar -->
                     
                     @if (auth()->user()->role == 'Pharmacist')
                     <div class="profile-sidebar">
                         <div class="widget-profile pro-widget-content">
                             <div class="profile-info-widget">
                                 <a href="#" class="booking-doc-img">
                                     <img src="../img/profile/{{auth()->user()->img}}" alt="User Image">
                                 </a>
                                 <div class="profile-det-info">
                         <h4><b>{{auth()->user()->name}}</b></h4>
                                     <div class="patient-details">
                                         <h5 class="mb-0">{{auth()->user()->role}}/{{auth()->user()->expertise}}</h5>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="dashboard-widget">
                             <nav class="dashboard-menu">
                                 <ul>
                                     <li class="active">
                                         <a href="../dashboard">
                                             <i class="fas fa-columns"></i>
                                             <span>Dashboard</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="../appointments">
                                             <i class="fas fa-calendar-check"></i>
                                             <span>Appointments</span>
                                         </a>
                                     </li> 
                                     <li>
                                         <a href="../schedule">
                                             <i class="fas fa-hourglass-start"></i>
                                             <span>Schedule Timings</span>
                                         </a>
                                     </li>
                          <!--
                                     <li>
                                         <a href="invoices.html">
                                             <i class="fas fa-file-invoice"></i>
                                             <span>Invoices</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="reviews.html">
                                             <i class="fas fa-star"></i>
                                             <span>Reviews</span>
                                         </a>
                                     </li>---->
                          @php
                          $hospital = App\hospitals::where('id',auth()->user()->h_id)->first();
                              //$hospital = App\HospitalDoctors::orderBy('created_at', 'desc')->where('doctor_pin', auth()->user()->pin)->first(); 
                          @endphp
                          @if (!empty($hospital))
                          <li><a href="../hospitals/{{$hospital->id}}"><i class="fas fa-archway"></i><span>My Hospital</span></a></li>
                         @else
                         <li><a href="../hospitals/create"><i class="fas fa-boxes"></i><span>Add Hospital</span></a></li>
                          @endif 
                          <li><a href="../questions"><i class="fas fa-bezier-curve"></i><span>Forum</span></a></li>
                          <li><a href="../pharmacist_shop"><i class="fas fa-briefcase-medical"></i><span>Buy Drugs</span></a></li>
                          <li>
                             @php
                                 
                          $new_messages = App\Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
                             @endphp
                                         <a href="../chat">
                                             <i class="fas fa-comments"></i>
                                             <span>Messages</span>
                                             <small class="unread-msg">{{App\Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->count()}}</small>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="../patients/{{auth()->user()->id}}/edit">
                                             <i class="fas fa-user-cog"></i>
                                             <span>Profile Settings</span>
                                         </a>
                                     </li>
             
                          <li>
                              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-file-export"></i>Sign out</a>
                             
                               
      
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                         </li>
                                 </ul>
                             </nav>
                         </div>
              </div>
              @endif
                     @if (auth()->user()->role == 'Doctor')
                     <div class="profile-sidebar">
                         <div class="widget-profile pro-widget-content">
                             <div class="profile-info-widget">
                                 <a href="#" class="booking-doc-img">
                                     <img src="../img/profile/{{auth()->user()->img}}" alt="User Image">
                                 </a>
                                 <div class="profile-det-info">
                         <h4><b>{{auth()->user()->name}}</b></h4>
                                     <div class="patient-details">
                                         <h5 class="mb-0">{{auth()->user()->role}}/{{auth()->user()->expertise}}</h5>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="dashboard-widget">
                             <nav class="dashboard-menu">
                                 <ul>
                                     <li class="active">
                                         <a href="../dashboard">
                                             <i class="fas fa-columns"></i>
                                             <span>Dashboard</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="../appointments">
                                             <i class="fas fa-calendar-check"></i>
                                             <span>Appointments</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="../patients">
                                             <i class="fas fa-user-injured"></i>
                                             <span>My Patients</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="../schedule">
                                             <i class="fas fa-hourglass-start"></i>
                                             <span>Schedule Timings</span>
                                         </a>
                          </li>
                          <!--
                                     <li>
                                         <a href="invoices.html">
                                             <i class="fas fa-file-invoice"></i>
                                             <span>Invoices</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="reviews.html">
                                             <i class="fas fa-star"></i>
                                             <span>Reviews</span>
                                         </a>
                                     </li>---->
                          @php
                          $hospital = App\hospitals::where('id',auth()->user()->h_id)->first();
                              //$hospital = App\HospitalDoctors::orderBy('created_at', 'desc')->where('doctor_pin', auth()->user()->pin)->first(); 
                          @endphp
                          @if (!empty($hospital))
                          <li><a href="../hospitals/{{$hospital->id}}"><i class="fas fa-archway"></i><span>My Hospital</span></a></li>
                         @else
                         <li><a href="../hospitals/create"><i class="fas fa-boxes"></i><span>Add Hospital</span></a></li>
                          @endif
                          @php
                          $lab = App\Laboratories::where('created_by',auth()->user()->pin)->first();
                              //$hospital = App\HospitalDoctors::orderBy('created_at', 'desc')->where('doctor_pin', auth()->user()->pin)->first(); 
                          @endphp
                          @if (!empty($lab))
                          <li><a href="../my_lab"><i class="fas fa-building"></i><span>My Laboratory</span></a></li>
                         @else
                         <li><a href="../create_lab"><i class="far fa-building"></i><span>Create Laboratory</span></a></li>
                           @endif
                          <li><a href="../add_op"><i class="fas fa-box-open"></i><span>Add Operation Record</span></a></li>
                          
                          <li><a href="../questions"><i class="fas fa-bezier-curve"></i><span>Forum</span></a></li>
                          <li><a href="../pharmacist_shop"><i class="fas fa-briefcase-medical"></i><span>Buy Drugs</span></a></li>
                                     <li>
                             @php
                                 
                          $new_messages = App\Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
                             @endphp
                                         <a href="../chat">
                                             <i class="fas fa-comments"></i>
                                             <span>Messages</span>
                                             <small class="unread-msg">{{App\Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->count()}}</small>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="../patients/{{auth()->user()->id}}/edit">
                                             <i class="fas fa-user-cog"></i>
                                             <span>Profile Settings</span>
                                         </a>
                                     </li>
             
                          <li>
                              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-file-export"></i>Sign out</a>
                             
                               
      
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                         </li>
                                 </ul>
                             </nav>
                         </div>
              </div>
              @endif

              
              @if (auth()->user()->role == 'HMO')
              <div class="profile-sidebar">
                  <div class="widget-profile pro-widget-content">
                      <div class="profile-info-widget">
                          <a href="#" class="booking-doc-img">
                              <img src="../img/profile/{{auth()->user()->img}}" alt="User Image">
                          </a>
                          <div class="profile-det-info">
                           <h4><b>{{auth()->user()->name}}</b></h4>
                              <div class="patient-details">
                                  <h5 class="mb-0">{{auth()->user()->role}}/{{auth()->user()->expertise}}</h5>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="dashboard-widget">
                      <nav class="dashboard-menu">
                          <ul>
                              <li class="active">
                                  <a href="../dashboard">
                                      
                                      <span>Dashboard</span>
                                  </a>
                              </li>
                             
                    <li><a href="../packages/create"><span>Add new package </span></a></li>
                    <li><a href="../questions"><span>Forum</span></a></li>
                    <li><a href="../pharmacist_shop"><span>Buy Drugs</span></a></li>
                     
                   <li>
                      @php
                          
                   $new_messages = App\Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
                      @endphp
                                  <a href="../chat">
                                      
                                      <span>Messages</span>
                                      <small class="unread-msg">{{App\Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->count()}}</small>
                                  </a>
                              </li>
                              <li>
                                  <a href="../patients/{{auth()->user()->id}}/edit">
                                      
                                      <span>Profile Settings</span>
                                  </a>
                              </li>
      
                   <li>
                       <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                      
                        

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </li>
                          </ul>
                      </nav>
                  </div>
       </div>
       @endif
              @if (auth()->user()->role == 'Nurse')
              <div class="profile-sidebar">
                  <div class="widget-profile pro-widget-content">
                      <div class="profile-info-widget">
                          <a href="#" class="booking-doc-img">
                              <img src="../img/profile/{{auth()->user()->img}}" alt="User Image">
                          </a>
                          <div class="profile-det-info">
                  <h4><b>{{auth()->user()->name}}</b></h4>
                              <div class="patient-details">
                                  <h5 class="mb-0">{{auth()->user()->role}}/{{auth()->user()->expertise}}</h5>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="dashboard-widget">
                      <nav class="dashboard-menu">
                          <ul>
                              <li class="active">
                                  <a href="../dashboard">
                                      <i class="fas fa-columns"></i>
                                      <span>Dashboard</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="../appointments">
                                      <i class="fas fa-calendar-check"></i>
                                      <span>Appointments</span>
                                  </a>
                              </li> 
                              <li>
                                  <a href="../schedule">
                                      <i class="fas fa-hourglass-start"></i>
                                      <span>Schedule Timings</span>
                                  </a>
                              </li> 
                   @php
                   $hospital = App\hospitals::where('id',auth()->user()->h_id)->first();
                       //$hospital = App\HospitalDoctors::orderBy('created_at', 'desc')->where('doctor_pin', auth()->user()->pin)->first(); 
                   @endphp
                   @if (!empty($hospital))
                   <li><a href="../hospitals/{{$hospital->id}}"><i class="fas fa-archway"></i><span>My Hospital</span></a></li>
                  @else
                  <li><a href="../hospitals/create"><i class="fas fa-boxes"></i><span>Add Hospital</span></a></li>
                   @endif 
                   <li><a href="../questions"><i class="fas fa-bezier-curve"></i><span>Forum</span></a></li>
                   <li><a href="../pharmacist_shop"><i class="fas fa-briefcase-medical"></i><span>Buy Drugs</span></a></li>
                   <li>
                      @php
                          
                   $new_messages = App\Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
                      @endphp
                                  <a href="../chat">
                                      <i class="fas fa-comments"></i>
                                      <span>Messages</span>
                                      <small class="unread-msg">{{App\Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->count()}}</small>
                                  </a>
                              </li>
                              <li>
                                  <a href="../patients/{{auth()->user()->id}}/edit">
                                      <i class="fas fa-user-cog"></i>
                                      <span>Profile Settings</span>
                                  </a>
                              </li>
      
                   <li>
                       <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-file-export"></i>Sign out</a>
                      
                        

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </li>
                          </ul>
                      </nav>
                  </div>
       </div>
       @endif
       @if (auth()->user()->role == 'Admin')
       <div class="profile-sidebar">
           <div class="widget-profile pro-widget-content">
               <div class="profile-info-widget">
                   <a href="#" class="booking-doc-img">
                       <img src="../img/profile/{{auth()->user()->img}}" alt="User Image">
                   </a>
                   <div class="profile-det-info">
                    <h4><b>{{auth()->user()->name}}</b></h4>
                       <div class="patient-details">
                           <h5 class="mb-0">{{auth()->user()->role}}/{{auth()->user()->expertise}}</h5>
                       </div>
                   </div>
               </div>
           </div>
           <div class="dashboard-widget">
               <nav class="dashboard-menu">
                   <ul>
                       <li class="active">
                           <a href="../dashboard">
                               
                               <span>Dashboard</span>
                           </a>
                       </li> 
             <li><a href="../questions"><span>Forum</span></a></li>
             <li><a href="../pharmacist_shop"><span>Buy Drugs</span></a></li>
              
            <li>
               @php
                   
            $new_messages = App\Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
               @endphp
                           <a href="../chat">
                               
                               <span>Messages</span>
                               <small class="unread-msg">{{App\Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->count()}}</small>
                           </a>
                       </li>
                       <li>
                           <a href="../patients/{{auth()->user()->id}}/edit">
                               
                               <span>Profile Settings</span>
                           </a>
                       </li>

            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
               
                 

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
           </li>
                   </ul>
               </nav>
           </div>
</div>
@endif
@if (auth()->user()->role == 'Ward Maid')
<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="#" class="booking-doc-img">
                <img src="../img/profile/{{auth()->user()->img}}" alt="User Image">
            </a>
            <div class="profile-det-info">
             <h4><b>{{auth()->user()->name}}</b></h4>
                <div class="patient-details">
                    <h5 class="mb-0">{{auth()->user()->role}}/{{auth()->user()->expertise}}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li class="active">
                    <a href="../dashboard">
                        
                        <span>Dashboard</span>
                    </a>
                </li>
                <li><a href="../wards">Wards & Availability</a></li>
      <li><a href="../questions"><span>Forum</span></a></li>
      <li><a href="../pharmacist_shop"><span>Buy Drugs</span></a></li>
       
     <li>
        @php
            
     $new_messages = App\Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        @endphp
                    <a href="../chat">
                        
                        <span>Messages</span>
                        <small class="unread-msg">{{App\Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->count()}}</small>
                    </a>
                </li>
                <li>
                    <a href="../patients/{{auth()->user()->id}}/edit">
                        
                        <span>Profile Settings</span>
                    </a>
                </li>

     <li>
         <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
        
          

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
            </ul>
        </nav>
    </div>
</div>
@endif
       @if (auth()->user()->role == 'Biochemist/Microbiologist')
       
       <div class="profile-sidebar">
         <div class="widget-profile pro-widget-content">
             <div class="profile-info-widget">
                 <a href="#" class="booking-doc-img">
                     <img src="../img/profile/{{auth()->user()->img}}" alt="User Image">
                 </a>
                 <div class="profile-det-info">
         <h4><b>{{auth()->user()->name}}</b></h4>
                     <div class="patient-details">
                         <h5 class="mb-0">{{auth()->user()->role}}/{{auth()->user()->expertise}}</h5>
                     </div>
                 </div>
             </div>
         </div>
         <div class="dashboard-widget">
             <nav class="dashboard-menu">
                 <ul>
                     <li class="active">
                         <a href="../dashboard">
                             <i class="fas fa-columns"></i>
                             <span>Dashboard</span>
                         </a>
                     </li>
                     <li>
                         <a href="../appointments">
                             <i class="fas fa-calendar-check"></i>
                             <span>Appointments</span>
                         </a>
                     </li> 
                     <li>
                         <a href="../schedule">
                             <i class="fas fa-hourglass-start"></i>
                             <span>Schedule Timings</span>
                         </a>
                     </li> 
          @php
          $hospital = App\hospitals::where('id',auth()->user()->h_id)->first();
              //$hospital = App\HospitalDoctors::orderBy('created_at', 'desc')->where('doctor_pin', auth()->user()->pin)->first(); 
          @endphp
          @if (!empty($hospital))
          <li><a href="../hospitals/{{$hospital->id}}"><i class="fas fa-archway"></i><span>My Hospital</span></a></li>
         @else 
         @endif 
          <li><a href="../questions"><i class="fas fa-bezier-curve"></i><span>Forum</span></a></li>
          <li><a href="../pharmacist_shop"><i class="fas fa-briefcase-medical"></i><span>Buy Drugs</span></a></li>
          <li>
             @php
                 
          $new_messages = App\Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
             @endphp
                         <a href="../chat">
                             <i class="fas fa-comments"></i>
                             <span>Messages</span>
                             <small class="unread-msg">{{App\Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->count()}}</small>
                         </a>
                     </li>
                     <li>
                         <a href="../patients/{{auth()->user()->id}}/edit">
                             <i class="fas fa-user-cog"></i>
                             <span>Profile Settings</span>
                         </a>
                     </li>

          <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-file-export"></i>Sign out</a>
             
               

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
         </li>
                 </ul>
             </nav>
         </div>
  </div>
@endif
                     <!-- /Profile Sidebar -->
                     
						</div>