@props(['descs'])
<section id="carsCategory">
    <ul class="container">
        @foreach ($descs as $desc)
            <li class="card">
                <img src="{{asset('/'. $desc->path_banner)}}" alt="">
                <a href="">
                    <div class="desc">
                        <h2> {{$desc->title}} </h2>
                        <p>{{$desc->description}}</p>
                        <span class="bi-arrow-right-circle"></span>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</section>
