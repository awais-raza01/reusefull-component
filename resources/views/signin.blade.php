@extends('component.index')
@section('section')
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
            <div class="card rounded-3 text-black">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="130"  viewBox="0 0 48 48">
                                <linearGradient id="Q_pn21O5LDDqwJlze0Upoa_g9mmSxx3SwAI_gr1" x1="24" x2="24" y1="41" y2="7" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#643499"></stop><stop offset=".011" stop-color="#68369f"></stop><stop offset=".135" stop-color="#773db6"></stop><stop offset=".193" stop-color="#8042c3"></stop><stop offset=".248" stop-color="#8343c8"></stop><stop offset=".388" stop-color="#8444c9"></stop><stop offset=".732" stop-color="#9751d2"></stop><stop offset=".997" stop-color="#9c55d4"></stop><stop offset=".998" stop-color="#9c55d4"></stop><stop offset="1" stop-color="#9c55d4"></stop></linearGradient><path fill="url(#Q_pn21O5LDDqwJlze0Upoa_g9mmSxx3SwAI_gr1)" d="M7.373,11.443C7.293,9.132,9.094,7,11.529,7h24.946c2.435,0,4.236,2.132,4.155,4.443	c-0.077,2.221,0.023,5.097,0.747,7.443c0.681,2.207,1.801,3.652,3.593,3.981c0.206,0.038,0.363,0.205,0.363,0.415v1.438	c0,0.21-0.157,0.377-0.363,0.415c-1.792,0.328-2.912,1.773-3.593,3.981c-0.724,2.345-0.824,5.222-0.747,7.443	C40.71,38.868,38.909,41,36.475,41H11.529c-2.434,0-4.236-2.132-4.155-4.443c0.077-2.221-0.023-5.097-0.747-7.443	c-0.681-2.207-1.804-3.652-3.596-3.981c-0.206-0.038-0.363-0.205-0.363-0.415v-1.438c0-0.21,0.157-0.377,0.363-0.415	c1.792-0.328,2.915-1.773,3.596-3.981C7.35,16.54,7.451,13.664,7.373,11.443z"></path><path fill="#fff" d="M27.073,23.464v-0.028c1.853-0.32,3.299-2.057,3.299-3.97c0-1.352-0.52-2.498-1.504-3.312	c-0.981-0.812-2.357-1.241-3.981-1.241H17.45V33.08h7.475c1.942,0,3.555-0.474,4.663-1.372c1.109-0.899,1.696-2.207,1.696-3.783	C31.283,25.544,29.593,23.756,27.073,23.464z M23.59,22.608h-3.181V17.29h3.784c2.076,0,3.219,0.911,3.219,2.565	C27.413,21.63,26.055,22.608,23.59,22.608z M20.409,24.834h3.759c2.716,0,4.092,0.981,4.092,2.916c0,1.932-1.357,2.953-3.925,2.953	h-3.926V24.834z"></path>
                            </svg>
                            <h4 class="mt-1 mb-5 pb-1">Welcome</h4>
                        </div>

                        <form>
                            <p>Please login to your account</p>

                            {{-- To pass variable in component --}}
                            @php
                                // $variable = 8;
                                $variable = 'variable';
                            @endphp

                            <x-inputfield type="email" placeholder="Enter your email" name="Email Address" :number="$variable" />
                            {{-- other method --}}
                            {{-- <x-inputfield type="email" placeholder="Enter your email" name="{{$variable}}" /> --}}

                            <x-inputfield type="password" placeholder="Enter your Pasword" name="Password" />

                            <div class="text-center pt-1 mb-5 pb-1">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                                in</button>
                                <a class="text-muted" href="#">Forgot password?</a>
                            </div>

                            <div class="d-flex align-items-center justify-content-center pb-4">
                                <p class="mb-0 me-2">Don't have an account?</p>
                                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger"><a href="{{route('signup')}}" style="color:#B03D50">Create new</a></button>
                            </div>

                        </form>

                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">We are more than just a company</h4>
                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection

