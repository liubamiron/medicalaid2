@extends('layouts.main')

@section('content')
<body>
<div class="container">

    <div class="row">
        <img src="https://www.freewebheaders.com/wp-content/gallery/healthcare_1/medical-doctor-stethoscope-and-office-sign-web-header.jpg" class="img-fluid" alt="medical care" width="804" height="236">
    </div>
<br>
    <div class="row">
        <h2 class="text-center">Serviciile noastre</h2>
    </div>
<br>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{asset('assets/images/medblog_1.avif')}}" class="col rounded" alt="Paris" width="100%" height="236">


                <div class="card-body">
                    <p class="card-text">
                    <h5><a href = "/ingrijiri-comunitare">Îngrijiri comunitare la domiciliu</a></h5>
                    <hr>
                    Prin îngrijire medicală la domiciliu se subînțelege orice activitate de îngrijire medicală prestată la domiciliul pacientul de către lucrătorul medical
                </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{ asset('assets/images/old_pacient.avif') }}" class="col rounded" alt="Paris" width="100%" height="236">
                <div class="card-body">
                    <p class="card-text">
                    <h5><a href = "/ingrijiri-paliative">Ingrijiri paliative la domiciliu</a></h5>
                    <hr>
                    Îngrijirea paliativă este îngrijirea menită să amelioreze calitatea vieţii pacienţilor şi familiilor acestora, atunci cînd se confruntă cu o boală
                    </p>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <img src="{{ asset('assets/images/medblog_4.avif') }}" class="col rounded" alt="Paris" width="100%" height="236">
                <div class="card-body">
                    <p class="card-text">
                    <h5><a href = "/pentru-pacienti">Pentru pacienti</a></h5>
                    <hr>
                    Beneficiarii pentru îngrijirea comunitară sunt pacienții cu maladii cronice în stadiu avansat şi/sau după intervenţii chirurgicale mari.
                    </p>

                </div>
            </div>
        </div>

    </div>
</div>

<div class="row indent_sponsors_label">
    <div class="col ">

        <a href="http://vsa.cnam.gov.md/app/verify/">
            <img src="{{ asset('assets/images/cnam.jpeg') }}"  alt="cnam">
        </a>
    </div>

    <div class="col ">

        <a href="http://www.alvogen.ro/">
            <img src="{{ asset('assets/images/alogen.jpeg') }}"  alt="cnam">
        </a>
    </div>

    <div class="col ">

        <a href="http://www.cmf-balti.ms.md/">
            <img src="{{ asset('assets/images/balti.jpeg') }}"  alt="cnam">
        </a>
    </div>

    <div class="col ">

        <a href="http://cmdb.md/">
            <img src="{{ asset('assets/images/col-med.jpeg') }}"  alt="cnam">
        </a>
    </div>

    <div class="col ">

        <a href="https://msmps.gov.md/">
            <img src="{{ asset('assets/images/Emblema_Guvernului_Republicii_Moldova-150x150.jpeg') }}"  alt="cnam">
        </a>
    </div>

</div>


<iframe loading="lazy" src="https://www.google.com/maps/d/embed?mid=1GAEjkQrfH5f9--LrSpLi79urjkzDmNss" width="100%" height="480"></iframe>


</body>
@endsection


