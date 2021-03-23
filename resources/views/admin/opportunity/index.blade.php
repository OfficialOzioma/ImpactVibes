@extends('layouts.sidebar') 
@section('pageContent')
<div class="row align-items-center justify-content-center">
    <div class="col-lg-12 col-md-12">
        <a href="/submitted_opportunities" class="btn btn-success">Submitted Opportunities</a>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12 col-md-12">
        @if(count($opportunities) > 0) 
        <div class="row">
        @foreach($opportunities as $opportunity)

        <div class="col-lg-4 col-md-6">
            <div class="single-blog mt-30"  style="height: 20rem;">
                <div class="blog-image">
                    <img style="height: 14rem;" src="{{ url('opportunity_images/'. $opportunity->image)}}" style="height:5rem;" alt="Blog">
                </div>
                <div class="blog-content">
                    <div class="content">
                        <h4 class="title"><a href="/showOpportunity/{{$opportunity->id}}">{{$opportunity->title}}</a></h4>
                        <span>{{ $opportunity->created_at ? $opportunity->created_at->toFormattedDateString() : 'Date Unavailable' }}</span>
                    </div>
                    <div class="meta d-flex justify-content-between align-items-center">
                        <div class="meta-admin d-flex align-items-center">
                            <div class="image">
                                <a href="/showOpportunity/{{$opportunity->id}}" src="{{ url('opportunity_images/'. $opportunity->image)}}" alt="opportunity"></a>
                            </div>
                            <div class="admin-title">
                                <h6 class="title"><a href="{{ route('dashboard.index') }}">Posted by {{ $opportunity->user_id ? $opportunity->user->name : 'Anonymous' }}</a></h6>
                            </div>
                        </div>  <!-- meta admin -->
                        
                    </div> <!-- meta -->
                </div>
            </div> <!-- single blog -->
        </div>
        @endforeach
        </div>
    </div>
    @else
    <div class="NoDataMessage">
        <h2><b>No Opportunity To Show!!</b></h2>
    </div>
    @endif
    
</div>

<div class="row align-items-center justify-content-center">
    <div class="col-lg-12 col-md-12">
        <a href="/createOpportunity" class="btn btn-danger">Create Opportunity</a>
    </div>
</div>

@endsection

