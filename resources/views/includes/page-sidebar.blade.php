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
</style>
<div class="row page-sidebar">
    <div class="col-12">
        <h3 class="vp-heading">VIEW OUR PROJECTS</h3>
        <ul>
            <li>Commercial</li>
            <li>Industrial</li>
            <li>Residential</li>
        </ul>

        <h3 class="fw-heading">FEATURED WORK</h3>

        <div class="row">
            @for ($i = 1; $i<=8; $i++)
                <div class="col-6">
                    <div class="image-container-1">
                        <img class="img-fluid" src="{{ asset('images/featured_images/img_'.$i.'.jpg') }}" alt="Responsive Image">
                        <div class="image-title">Image 1</div>
                        <i class="fas fa-heart heart-icon"></i>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
