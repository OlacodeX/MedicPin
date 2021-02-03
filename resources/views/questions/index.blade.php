@extends('layouts.main')

@section('content')
@include('inc.navmain')
@if (auth()->user()->status == 'Active')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12 col-12">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./dashboard">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Forum</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Forum</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
  <div class="col-md-12" style="margin-bottom:15px;">
    <div class="card card-table mb-0">
      <div class="card-header">
         <h4 class="card-title"><b> Questions From Forum</b></h4>
      </div>
    </div>
    <div class="">
      
      <div>
      
        <!-- questions Tab -->
        <div>

          <div class="card card-table mb-0">
            <div class="card-header">
               <h4 class="card-title"><b> Recent Questions From Patients</b></h4>
            </div>
            <div class="card-body">
              @if (auth()->user()->role == 'Doctor')
                @if (count($questions_all) > 0)
              <div class="table-responsive">
                <table class="table table-hover table-center mb-0">
                  <tbody>
                    @foreach ($questions_all as $question_all)
                    @php
                        //$patient = App\patients::where('pin', $upcoming->patient)->first();
                        //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                    @endphp
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="questions/{{$question_all->id}}">{!!$question_all->question!!} <span class="d-block text-info">{!!$question_all->created_at!!}</span></a>
                        </h2>
                                        </td>
                      <td class="text-right">
                        <div class="table-action">
                            
                            @if (auth()->user()->id == $question_all->asker_id)
                            <a class="btn btn-sm" href="questions/{{$question_all->id}}/edit">
                              <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit question"><i class="ri-pencil-fill mr-2"></i> Edit</button>
                            </a>
                            
                            <a class="btn btn-sm">
                                {!!Form::open(['action' => ['QuestionsController@destroy', $question_all->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                
                                {{Form::hidden('_method', 'DELETE')}}
                                <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete question"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                              
                                {!!Form::close()!!}
                            </a>
                            @endif
                            <a href="questions/{{$question_all->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="far fa-comments"></i>({{App\Answers::where('question_id', $question_all->id)->count()}})</a>
                        </div>
                      </td>
                    </tr>
                      @endforeach
                  </tbody>
                </table>
                   
              </div>
                  @else
                  <p style="padding-left: 8px;">
                    No Questions From Patients in Forum Yet...
                  </p>
                @endif	
            </div>
          </div>
            <style>
             div.card.card-table.mb-0{
               margin-top: 20px;
             } 
            </style>
                <div class="card card-table mb-0">
                  <div class="card-header">
                     <h4 class="card-title"><b> Questions From Your Fellow Doctors.</b></h4>
                  </div>
                @php
                    $doc_questions = App\Questions::/*where('question_cat', auth()->user()->expertise)*/where('question_cat', 'All Doctors')->paginate(10);
                @endphp	
            <div class="card-body">
                @if (count($doc_questions) > 0)
              <div class="table-responsive">
                <table class="table table-hover table-center mb-0">
                  <tbody>
                    @foreach ($doc_questions as $question)
                    @php
                        //$patient = App\patients::where('pin', $upcoming->patient)->first();
                        //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                    @endphp
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="questions/{{$question->id}}">{!!$question->question!!} <span class="d-block text-info">{!!$question->created_at!!}</span></a>
                        </h2>
                                        </td>
                      <td class="text-right">
                        <div class="table-action">
                            
                            @if (auth()->user()->id == $question->asker_id)
                            <a class="btn btn-sm" href="questions/{{$question->id}}/edit">
                              <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit question"><i class="ri-pencil-fill mr-2"></i> Edit</button>
                            </a>
                            
                            <a class="btn btn-sm">
                                {!!Form::open(['action' => ['QuestionsController@destroy', $question->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                
                                {{Form::hidden('_method', 'DELETE')}}
                                <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete question"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                              
                                {!!Form::close()!!}
                            </a>
                            @endif
                            <a href="questions/{{$question->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="far fa-comments"></i>({{App\Answers::where('question_id', $question->id)->count()}})</a>
                        </div>
                      </td>
                    </tr>
                      @endforeach
                  </tbody>
                </table>
                   
              </div>
                  @else
                  <p style="padding-left: 8px;">
                    
                    No Questions From Your Fellow Doctors Yet.....
                  </p>
                @endif
              </div>
                </div>
                <div class="card card-table mb-0" style="margin-top: 20px;">
                  <div class="card-header">
                     <h4 class="card-title"><b> Questions For {{auth()->user()->expertise}}.</b></h4>
                  </div>
                @php
                    $doctor_questions = App\Questions::where('question_cat', auth()->user()->expertise)/*->where('question_cat', 'All Doctors')*/->paginate(10);
                @endphp	
              <div class="card-body">
                @if (count($doctor_questions) > 0)
              <div class="table-responsive">
                <table class="table table-hover table-center mb-0">
                  <tbody>
                    @foreach ($doctor_questions as $question)
                    @php
                        //$patient = App\patients::where('pin', $upcoming->patient)->first();
                        //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                    @endphp
                    <tr>
                      <td>
                        <h2 class="table-avatar">
                          <a href="questions/{{$question->id}}">{!!$question->question!!} <span class="d-block text-info">{!!$question->created_at!!}</span></a>
                        </h2>
                                        </td>
                      <td class="text-right">
                        <div class="table-action">
                            
                            @if (auth()->user()->id == $question->asker_id)
                            <a class="btn btn-sm" href="questions/{{$question->id}}/edit">
                              <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit question"><i class="ri-pencil-fill mr-2"></i> Edit</button>
                            </a>
                            
                            <a class="btn btn-sm">
                                {!!Form::open(['action' => ['QuestionsController@destroy', $question->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                
                                {{Form::hidden('_method', 'DELETE')}}
                                <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete question"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                              
                                {!!Form::close()!!}
                            </a>
                            @endif
                            <a href="questions/{{$question->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="far fa-comments"></i>({{App\Answers::where('question_id', $question->id)->count()}})</a>
                        </div>
                      </td>
                    </tr>
                      @endforeach
                  </tbody>
                </table>
                   
              </div>
                  @else
                  <p style="padding-left: 8px;">
                    
                    No Questions For {{auth()->user()->expertise}} Yet.....
                  </p>
                @endif	
              </div>
              </div>
                @endif
                @if (auth()->user()->role == 'Patient')
                <div class="card card-table mb-0" style="margin-top: 20px;">
                  <div class="card-header">
                     <h4 class="card-title"><b> Questions Asked by You.</b></h4>
                  </div>
                  <div class="card-body">
                  @if (count($questions) > 0)
                <div class="table-responsive">
                  <table class="table table-hover table-center mb-0">
                    <tbody>
                      @foreach ($questions as $question)
                      @php
                          //$patient = App\patients::where('pin', $upcoming->patient)->first();
                          //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                      @endphp
                      <tr>
                        <td>
                          <h2 class="table-avatar">
                            <a href="questions/{{$question->id}}">{!!$question->question!!} <span class="d-block text-info">{!!$question->created_at!!}</span></a>
                          </h2>
                                          </td>
                        <td class="text-right">
                          <div class="table-action">
                              
                              @if (auth()->user()->id == $question->asker_id)
                              <a class="btn btn-sm" href="questions/{{$question->id}}/edit">
                                <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit question"><i class="ri-pencil-fill mr-2"></i> Edit</button>
                              </a>
                              
                              <a class="btn btn-sm">
                                  {!!Form::open(['action' => ['QuestionsController@destroy', $question->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                  
                                  {{Form::hidden('_method', 'DELETE')}}
                                  <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete question"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                                
                                  {!!Form::close()!!}
                              </a>
                              @endif
                              <a href="questions/{{$question->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="far fa-comments"></i>({{App\Answers::where('question_id', $question->id)->count()}})</a>
                          </div>
                        </td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
                     
                </div>
                    @else
                    <p style="padding-left: 8px;">
                      No Questions From Patients in Forum Yet...
                    </p>
                  @endif	
              </div>
            </div>
            <div class="card card-table mb-0" style="margin-top: 20px;">
              <div class="card-header">
                 <h4 class="card-title"><b>Other Questions in Forum.</b></h4>
              </div>
              <div class="card-body">
              @if (count($questions_al) > 0)
            <div class="table-responsive">
              <table class="table table-hover table-center mb-0">
                <tbody>
                  @foreach ($questions_al as $question_al)
                  @php
                      //$patient = App\patients::where('pin', $upcoming->patient)->first();
                      //$patient_profile = App\User::where('pin', $upcoming->patient)->first();
                  @endphp
                  <tr>
                    <td>
                      <h2 class="table-avatar">
                        <a href="questions/{{$question_al->id}}">{!!$question_al->question!!} <span class="d-block text-info">{!!$question_al->created_at!!}</span></a>
                      </h2>
                                      </td>
                    <td class="text-right">
                      <div class="table-action">
                          
                          @if (auth()->user()->id == $question_al->asker_id)
                          <a class="btn btn-sm" href="questions/{{$question_al->id}}/edit">
                            <button class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit question"><i class="ri-pencil-fill mr-2"></i> Edit</button>
                          </a>
                          
                          <a class="btn btn-sm">
                              {!!Form::open(['action' => ['QuestionsController@destroy', $question_al->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                              
                              {{Form::hidden('_method', 'DELETE')}}
                              <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete question"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                            
                              {!!Form::close()!!}
                          </a>
                          @endif
                          <a href="questions/{{$question_al->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="far fa-comments"></i>({{App\Answers::where('question_id', $question_al->id)->count()}})</a>
                      </div>
                    </td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
                 
            </div>
                @else
                <p style="padding-left: 8px;">
                  No Questions From Patients in Forum Yet...
                </p>
              @endif	
          </div>
        </div>
            @endif	
            </div>
          </div>
        </div>


</div>
</div>
</div>
</div>
</div>

</div>


@else
<div class="text-center" style="background: #ffffff; padding-top:30px; padding-bottom:100px; margin-bottom:30px; border-radius:50px;">
   <img src="{{ URL::to('img/oop.jpg')}}" alt="" class="img-fluid" />
   <h5 class="text-center">Your account has been suspended, kindly contact the administrators to restore account access.</h5>

</div>
@endif   

<!-- Footer 
<footer class="bg-white iq-footer">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <ul class="list-inline mb-0">
               <li class="list-inline-item"><a href="./privacy">Privacy Policy</a></li>
               <li class="list-inline-item"><a href="./terms">Terms of Use</a></li>
              </ul>
           </div>
           <div class="col-lg-6 text-right">
              Copyright 2020 <a href="./">Medicpin</a> All Rights Reserved.
         </div>
      </div>
   </div>
</footer>
Footer END -->
@endsection