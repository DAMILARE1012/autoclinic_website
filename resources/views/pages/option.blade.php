@extends('master')
@section('title', '| Training_hub')

@section('content')
<!-- Breadcrumbs -->
    <div class="breadcrumbs overlay"  style="background-image:url('img/trc_2.jpg')">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Training Hub </h2>
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }} ">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li><a href="{{ route('training') }} ">Our Training Hub</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">{{ $option_data->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <!-- Start Why choose -->
    <section class="why-choose section">
        <div class="container">
            <div class="col-md-12 col-12">
                <style type="text/css">
                    body{margin-top:10px;}
                    .section_padding_130 {
                        padding-top: 2px;
                        padding-bottom: 3px;
                    }
                    .faq_area {
                        position: relative;
                        z-index: 1;
                        background-color: #f5f5ff;
                    }
                    .faq-accordian {
                        position: relative;
                        z-index: 1;
                    }
                    .faq-accordian .card {
                        position: relative;
                        z-index: 1;
                        margin-bottom: 1.5rem;
                    }
                    .faq-accordian .card:last-child {
                        margin-bottom: 0;
                    }
                    .faq-accordian .card .card-header {
                        background-color: #ffffff;
                        padding: 0;
                        border-bottom-color: #ebebeb;
                    }
                    .faq-accordian .card .card-header h6 {
                        cursor: pointer;
                        padding: 1.75rem 2rem;
                        color: #adf802;
                        display: -webkit-box;
                        display: -ms-flexbox;
                        display: flex;
                        -webkit-box-align: center;
                        -ms-flex-align: center;
                        -ms-grid-row-align: center;
                        align-items: center;
                        -webkit-box-pack: justify;
                        -ms-flex-pack: justify;
                        justify-content: space-between;
                    }
                    .faq-accordian .card .card-header h6 span {
                        font-size: 1.5rem;
                    }
                    .faq-accordian .card .card-header h6.collapsed {
                        color: #52565e;
                    }
                    .faq-accordian .card .card-header h6.collapsed span {
                        -webkit-transform: rotate(-180deg);
                        transform: rotate(-180deg);
                    }
                    .faq-accordian .card .card-body {
                        padding: 1.75rem 2rem;
                    }
                    .faq-accordian .card .card-body p:last-child {
                        margin-bottom: 0;
                    }
                    
                    @media only screen and (max-width: 575px) {
                        .support-button p {
                            font-size: 14px;
                        }
                    }
                    
                    .support-button i {
                        color: #adf802;
                        font-size: 1.25rem;
                    }
                    @media only screen and (max-width: 575px) {
                        .support-button i {
                            font-size: 1rem;
                        }
                    }
                    
                    .support-button a {
                        text-transform: capitalize;
                        color: #adf802;
                    }
                    @media only screen and (max-width: 575px) {
                        .support-button a {
                            font-size: 13px;
                        }
                    }
                </style>
                <div class="choose-left">
                    <div class="col-md-12 col-12 py-3">
                        <h5>{{ $option_data->title }}</h5>
                    </div>

                    <a href="{{ strpos($option_data->reg_link, 'http') === 0 ? $option_data->reg_link : 'https://' . $option_data->reg_link }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-xs blinking-button" style="padding: 3px 5px; color:white;">
                        APPLY NOW!
                      </a>

                    <div class="col-md-12 pb-1" align="center">
                        <img src="{{ asset('img/options/'.$option_data->img) }}" class="img-fluid">
                        <hr>
                    </div>
                    <p><em>Click on each header to view!</em></p>

                    <div class="faq_area section_padding_130" id="faq">
                        <div class="container">
                            <div class="row justify-content-center">
                                
                                <div class="col-md-6 py-4">
                                    <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                      <div class="card-header" id="heading1">
                                        <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Introduciton<span class="float-right"><i class="fa fa-plus" aria-hidden="true"></i></span></h6>
                                      </div>
                                      <div class="collapse" id="collapse1" aria-labelledby="heading1" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            <p>
                                                {!! $option_data->introduction !!}
                                            </p>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-md-6 py-4">
                                    <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                      <div class="card-header" id="headingThree">
                                        <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Requirements<span class="float-right"><i class="fa fa-plus" aria-hidden="true"></i></span></h6>
                                      </div>
                                      <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            <p>
                                                {!! $option_data->requirements !!}
                                            </p>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-md-6 py-4">
                                    <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                      <div class="card-header" id="heading2">
                                        <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Eligibility<span class="float-right"><i class="fa fa-plus" aria-hidden="true"></i></span></h6>
                                      </div>
                                      <div class="collapse" id="collapse2" aria-labelledby="heading2" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            <p>
                                                {!! $option_data->eligibility !!}
                                            </p>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-md-6 py-4">
                                    <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                      <div class="card-header" id="heading3">
                                        <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">Routine<span class="float-right"><i class="fa fa-plus" aria-hidden="true"></i></span></h6>
                                      </div>
                                      <div class="collapse" id="collapse3" aria-labelledby="heading3" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            <p>
                                                {!! $option_data->routine !!}
                                            </p>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-md-6 py-4">
                                    <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                      <div class="card-header" id="heading2">
                                        <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">Course Content<span class="float-right"><i class="fa fa-plus" aria-hidden="true"></i></span></h6>
                                      </div>
                                      <div class="collapse" id="collapse4" aria-labelledby="heading4" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            <p>
                                                {!! $option_data->course_content !!}
                                            </p>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-md-6 py-4">
                                    <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                      <div class="card-header" id="heading5">
                                        <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">Duration<span class="float-right"><i class="fa fa-plus" aria-hidden="true"></i></span></h6>
                                      </div>
                                      <div class="collapse" id="collapse5" aria-labelledby="heading5" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            <p>
                                                {!! $option_data->duration !!}
                                            </p>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-md-6 py-4">
                                    <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                      <div class="card-header" id="heading1">
                                        <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">Cost<span class="float-right"><i class="fa fa-plus" aria-hidden="true"></i></span></h6>
                                      </div>
                                      <div class="collapse" id="collapse6" aria-labelledby="heading6" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            <p>
                                                {!! $option_data->cost !!}
                                            </p>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-md-6 py-4">
                                    <div class="card rounded-3" data-wow-delay="0.2s" style="visibility: visible;">
                                      <div class="card-header" id="heading1">
                                        <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">Expected Outcomes<span class="float-right"><i class="fa fa-plus" aria-hidden="true"></i></span></h6>
                                      </div>
                                      <div class="collapse" id="collapse7" aria-labelledby="heading7" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            <p>
                                                {!! $option_data->expected_outcomes !!}
                                            </p>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="{{ strpos($option_data->reg_link, 'http') === 0 ? $option_data->reg_link : 'https://' . $option_data->reg_link }}" target="_blank" rel="noopener noreferrer">
                            <button class="btn btn-primary blinking-button">APPLY NOW!</button>
                          </a>
                    </div>
                    
                    <br>
                </div>
                
            </div>
        </div>
    </section>

@endsection
