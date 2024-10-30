<style>
    .page-sidebar {}
    .page-sidebar {
        padding: 30px 0px 0px;
    }
    .page-sidebar ul {
        list-style: none;
        padding: 0px;
    }
    .page-sidebar ul li {
        padding: 10px;
        border-bottom: 1px solid grey;
        color: grey;
    }
    .page-sidebar .vp-heading {
        margin-bottom: 20px;
        font-size: 18px !important;
        font-weight: bolder;
    }
    .page-sidebar .fw-heading {
        margin: 55px 0px 20px 0px;
        font-size: 18px !important;
        font-weight: bolder;
    }
    .page-sidebar .sidebar-links li {
        padding: 8px 0px;
    }

    .page-sidebar .sidebar-links li a {
        text-decoration: none !important;
        color: grey !important;
    }
    .page-sidebar .image-container-1 {
        height: 90px !important;
    }

    .page-sidebar .image-title {
        padding: 0px;
        font-size: 14px;
    }
    .page-sidebar .heart-icon {
        font-size: 14px;
    }
</style>
<div class="row page-sidebar">
    <div class="col-12">
        <h3 class="vp-heading">VIEW OUR PROJECTS</h3>
        <ul class="sidebar-links">
            <li><a href="{{ url('/projects?type=3') }}">Commercial</a></li>
            <li><a href="{{ url('/projects?type=2') }}">Industrial</a></li>
            <li><a href="{{ url('/projects?type=1') }}">Residential</a></li>
        </ul>

        <h3 class="fw-heading">FEATURED WORK</h3>

        <div class="row g-3">

            @forelse ($projectList as $pl)
                <div class="col-6">
                    <a href="{{ url('/project-detail/' . $pl->id) }}">
                        <div class="image-container-1">
                            <img class="img-fluid" src="{{ $pl->getFirstMediaUrl('featureImage') }}" alt="Responsive Image">
                            <div class="image-title">{{ $pl->name ?? '' }}</div>
                            <i class="fas fa-heart heart-icon"></i>
                        </div>
                    </a>
                </div>
            @empty
                @for ($i = 1; $i<=8; $i++)
                    <div class="col-6">
                        <div class="image-container-1">
                            <img class="img-fluid" src="{{ asset('images/featured_images/img_'.$i.'.jpg') }}" alt="Responsive Image">
                            <div class="image-title">Image 1</div>
                            <i class="fas fa-heart heart-icon"></i>
                        </div>
                    </div>
                @endfor
            @endforelse

        </div>
    </div>
</div>
