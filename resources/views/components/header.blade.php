{{-- <section>
    <div class="d-flex justify-content-xl-start align-items-xl-center header-banner" style="background: url({{asset('img/abstract-blue-lines.jpg')}})">
        <img class="header-banner-logo" src="{{ asset('img/Logo.jpg')}}" />
        <h1 class="d-flex d-xl-flex align-items-end align-items-sm-end align-items-md-end align-items-lg-center align-items-xl-end header-banner-heading">தமிழ் பேசும் உறவுகளின் தனிக்குரல்<br /><br /></h1>
    </div>

    @component('components.navbar')


</section>

 --}}

 <section>
    <div class="d-flex justify-content-xl-start align-items-xl-center header-banner" style="background-image: url({{asset('img/abstract-blue-lines.jpg')}})">
        <img class="bounce animated header-banner-logo" src="{{asset('img/Logo.jpg')}}" style="border-radius: 25px;">
        <h1 class="d-flex d-xl-flex align-items-end align-items-sm-end align-items-md-end align-items-lg-center align-items-xl-end bounce animated header-banner-heading">உண்மையின் தேடல் மக்களின் குரல்<br></h1>
    </div>

    @component('components.navbar')
    @endcomponent

</section>
