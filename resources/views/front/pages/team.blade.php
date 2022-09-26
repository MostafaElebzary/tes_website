<!-- Start Team Area -->
<div class="team-area pt-100 pb-75">
    <div class="container">
        <div class="section-title section-style-two">
            <span>{{trans('lang.TEAM MEMBER')}}</span>
            <h2>{{settings_value('team_title_'.app()->getLocale())}} <span class="overlay"></span></h2>
            <p>{{settings_value('team_desc_'.app()->getLocale())}} </p>
        </div>

        <div class="row justify-content-center">
            @foreach($teams as $team)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card">
                        <div class="team-image">
                            <img src="{{url('storage')}}/{{$team->image}}" alt="{{$team->name}}" width="600px" height="800px">
                        </div>
                        <div class="team-content">
                            <h3>{{$team->name}}</h3>
                            <span>{{$team->position}}</span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- End Team Area -->
