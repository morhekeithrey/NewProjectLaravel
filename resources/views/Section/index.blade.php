@extends('Templates.default')


@section('body')

       
        
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    @foreach ($png as $item)
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                                <img class="img-fluid" src="{{$item}}" alt="..." />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Category</div>
                                    <div class="project-name">Project Name</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
      
      
       
       
@endsection