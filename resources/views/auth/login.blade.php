@extends('layouts.auth')

@section('content')
<!-- Main Container -->
<main id="main-container">
     <!-- Page Content -->
     <div class="content">
          <div class="row justify-content-center mt-5">
               <span>
                    <img src="{{asset('media/favicons/laravel.svg')}}" alt="logo" width="75" height="75">
               </span>
          </div>

          <div class="row justify-content-center mt-5">
               <div class="col-sm-8 col-md-6 col-lg-4">
                    <div class="block block-rounded block-fx-shadow">
                         <div class="block-content py-sm-2 py-md-4">
                              <div class="text-center">
                                   <h3>
                                        Login
                                   </h3>     
                              </div>
                              <div class="form-group">
                                   <div class="input-group">
                                        <div class="input-group-prepend">
                                             <span class="input-group-text">
                                                  <i class="si si-user"></i>
                                             </span>
                                        </div>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <div class="input-group">
                                        <div class="input-group-prepend">
                                             <span class="input-group-text">
                                                  <i class="si si-lock-open"></i>
                                             </span>
                                        </div>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                                   </div>
                              </div>
                              <div class="form-group">
                                   <button type="submit" class="btn btn-outline-danger btn-lg btn-block">SUBMIT</button>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- END Page Content -->
</main>
<!-- END Main Container -->
@endsection