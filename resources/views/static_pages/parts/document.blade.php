<div class="col-lg-4 col-md-4">
    <div class="h_blog_post_item blog_item">
        <a href="{{ asset('storage/documents/' . $dataDocument['resource']) }}">
            <h5 class="text-center">{{ $dataDocument['header'] }}</h5>
        </a>
        <a href="{{ asset('storage/documents/' . $dataDocument['resource']) }}" class="post_img">
            <img src="{{ asset('storage/documents/' . $dataDocument['image']) }}"
                 alt="{{ $dataDocument['header'] }}" {{--width="370"--}} height="218"/>
        </a>

        <div class="post_content">
            <a href="{{ asset('storage/documents/' . $dataDocument['resource']) }}" class="h_post_date">{{ $dataDocument['downloaded_at'] }}</a>
            {{--<div class="h_post_info">
                <a href="#"><i class="far fa-heart"></i>72</a>
                <a href="#"><i class="far fa-comment"></i>29</a>
            </div>--}}
        </div>
    </div>
</div>
