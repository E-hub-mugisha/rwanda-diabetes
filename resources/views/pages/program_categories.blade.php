@extends('layouts.base')
@section('title', 'Programs')
@section('content')

<div class="multicolumn multicolumn-page mt-100">
    <div class="container">
        <div class="section-headings section-headings-horizontal align-items-start overflow-hidden">
            <div class="section-headings-left">
                <h2 class="heading text-30 aos-init aos-animate" data-aos="fade-right">
                    Learn about {{ $category->name }}
                </h2>
            </div>
            
        </div>
        <div class="multicolumn-inner mt-3">
            <div class="row product-grid">
                @foreach( $programs as $program)
                <div class="col-xl-4 col-md-6 col-12 aos-init aos-animate" data-aos="fade-up">
                    <div class="multicolumn-card">
                        <div class="card-icon">
                             <img src="{{asset('image/programs')}}/{{ $program->image }}" alt="{{ $program->title }}" width="1000" height="742" loading="lazy">
                        </div>
                        <h2 class="heading text-20">{{ $program->title }}</h2>
                        <div class="text text-16">
                            {{ $program->short_description }}.
                        </div>
                        <a href="{{ route('programs.show', $program->slug) }}" class="button button--primary mt-4" aria-label="More About Us">
                            Learn More
                            <span class="svg-wrapper">
                                <svg class="icon-20" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.3365 7.84518L6.16435 15.0173L4.98584 13.8388L12.158 6.66667H5.83652V5H15.0032V14.1667H13.3365V7.84518Z" fill="CurrentColor"></path>
                                </svg>
                            </span>
                            <span class="visually-hidden">To learn more about diabetes & awareness, click this
                                button.</span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection