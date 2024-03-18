<section class="causes-area gray-bg pt-120 pb-110">
    <div class="container">
        <div class="row">
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6">
                <div style="height: 700px" class="causes-single mb-30" data-aos="fade-up" data-aos-delay="100">
                    <div style="height:50vh; overflow:hidden"  class="causes-thumb">
                        <img src="{{ asset($project->image) }}" alt="image">
                    </div>
                    <div style="height:50vh" class="card-body causes-content">
                        <div class="causes-head clearfix mb-10">
                            <h4 style="height:5vh; overflow:hidden" ><a href="causes-details.html">{{ $project->title }}</a></h4>
                            <span><i class="ti-location-pin"> </i> Bestory,Feni</span>
                        </div>
                        <div class="causes-text mb-25">
                            <a href="{{ route('details', $project) }}">
                                <p style="height: 75px; overflow :hidden">{{$project->description}}</p>
                            </a>
                        </div>
                        {{-- <div class="all-skill-bar">
                            <div class="skill-bar" data-percentage="73%">
                                <h4 class="progress-title-holder">
                                            <span class="progress-number-mark">
                                                <span class="percent">73%</span>
                                            </span>
                                </h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content" style="width: 73%;"></div>
                                </div>
                            </div>
                        </div> --}}
                        <ul class="d-flex justify-content-between mx-3 raised">
                            <li>
                                <h5>Start Date</h5>
                                <span class="rate">{{ $project->start_date }}</span>
                            </li>
                            <li>
                                <h5>End Date</h5>
                                <span class="rate">{{ $project->end_date }}</span>
                            </li>
                        </ul>
                        <div class="pt-3 all-skill-bar all-skill-bar-3">
                            <div class="skill-bar" data-percentage="54%">
                                <h4 class="progress-title-holder">
                                            <span class="progress-number-mark">
                                                <span class="percent">54%</span>
                                            </span>
                                </h4>
                                <div class="progress-content-outter">
                                    <div class="progress-content" style="width: 54%;"></div>
                                </div>
                            </div>
                        </div>
                        <ul class="d-flex justify-content-between m-3 raised">
                            <li>
                                <h5>Goal</h5>
                                <span class="rate">{{$project->financial_goal." "}} CFA</span>
                            </li>
                            <li>
                                <h5>Fonds collectés</h5>
                                <span class="rate">{{ $project->fund_collected." " }}CFA</span>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('details', $project) }}" class="btn btn-primary text-left">Plus de détails</a>
                            <a href="{{ route('details', $project) }}" class="btn btn-danger text-right">Faire un don</a>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-12">
                <div class="pagination-wrapper text-center mt-35" data-aos="fade-up" data-aos-delay="100">
                    <div>
                       {{  $projects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
