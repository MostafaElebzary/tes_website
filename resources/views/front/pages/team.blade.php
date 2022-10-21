<!-- Start Team Area -->
<div class="team-area pt-100 pb-75">
    <div class="container">
        <div class="section-title section-style-two">
            <span>{{trans('lang.TEAM MEMBER')}}</span>
            <h2>{{settings_value('team_title_'.app()->getLocale())}} <span class="overlay"></span></h2>
            <p>{{settings_value('team_desc_'.app()->getLocale())}} </p>
        </div>

        <div class="partner-area ptb-100" style="background-color: #FFFFFF">
            <div class="container">
                <div class="partner-slides owl-carousel owl-theme">
                    @foreach($teams as $team)
                        <div class="partner-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                             data-aos-once="true">
                            <a href="#" style="text-align: center">
                                <img src="{{url('storage')}}/{{$team->image}}" alt="{{$team->name}}" width="600px" height="800px">
                                <h6>{{$team->name}}</h6>
                                <span>{{$team->position}}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
</div>
<!-- End Team Area -->
