@extends('Dashboard/a/includes/topbar') 

@section('content')
@include('Dashboard/a/includes/leftbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li ><a  href="{{route('faq')}}">General</a></li>
            <li class="active"><a  href="{{route('chat_questions')}}">Chat</a></li>
            <li ><a  href="{{route('referral_question')}}">Referral</a></li>
            <li ><a  href="{{route('payclick_question')}}">Pay clicks</a></li>
            <li ><a  href="{{route('package_question')}}">Package</a></li>
          </ul>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
           <!-- /.card -->
           <div class="row">
            
            <div class="col-md-11">
            <div class="card card-info ">
              <div class="card-header">
                <h5 class="m-0">Live Chat Questions</h5>
              </div>
              <div class="card-body">
                 <b>Q) What does live chat do, what is live chat for?</b>                     <br>
                A) Our live chat is there to offer technical support to all of our member when faced with an issue.
                <br>
                 
                
                <b>Q) Are the Appi travels support agents there to teach me the functions of our compensation plans?</b>
                <br>
                A) No this is the main responsibility of your sponsor. He is there to help you fully understand the way the compensation plans work. You may also refer to our Appi Tools where you will find presentations, training and other tools.
                <br>
                 
                
                  <b>Q) What are the operating hours of our live Chat.</b> 
                <br>
                A) Our live chat is live to speak with an agent from 9 Am to 5 Pm (eastern time) Monday through Friday and 10 AM to 4 PM (eastern time) on Saturdays and Closed on Sundays.
                <br>
                
                   <b>Q) What is a Ticket?</b>
                <br>
                A) A ticket is like an email. A ticket is created by a member who comes on our live chat when offline. You are able to leave a detailed message explaining your issue that you may have with your account. Tickets are answered within 12-24 hours.  
                <br><br>
                
          <b>     Live Chat Rules: </b>
          <ul> 
                
                <li>
                    The member must fill out the basic information asked when starting a chat.</li>
                    <li>To insure the fastest and best service possible.</li>
                    <li>An agent may ask a lot of question regarding your account or possible transaction information.</li>
                    <li> The member must cooperate with the agents and answer any questions they may have in order to insure the best quality service possible.
                    </li>
                    <li>No foul language is tolerated nor threats on our live chat.
                    </li>
                    <li>If you wish to speak with a Supervisor of our Support Team you must send us a detailed email regarding your issue or complaint to ( support@appitravels.com) and a supervisor will contact you shortly in regards of your issue.
                    </li>
                    <li>Avoid creating multiple requests for the same issue as this will only crowd the ticket cue and slow down response time.
                    </li>
            </ul>  
            </div>
            </div>
           
          </div>
           <!-- END OF cl -->
        </div>
       
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.row -->
  </div>
@endsection