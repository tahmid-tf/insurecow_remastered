@extends('admin-master')

@section('content')
<div class="container mt-5">
    <img src="{{ asset('img/logo2.png') }}" alt="" style="width: 170px; display: block; margin: auto">
    <br>

    <h1 class="text-center">User Overview for InsureCow</h1>

    <section class="mt-4">
        <h2>Introduction</h2>
        <p>Welcome to InsureCow, a comprehensive insurance management and farm management system designed to provide a
            seamless experience for farmers, SMEs, NGOs, insurers, and financial institutions. InsureCow integrates
            technology with financial security to ensure sustainable agricultural practices.</p>
    </section>

    <section class="mt-4">
        <h2>Features & Benefits</h2>
        <ul>
            <li><strong>Insurance Management:</strong> Digital cattle insurance registration and policy tracking.</li>
            <li><strong>Farm Management:</strong> Tools to monitor and manage farm operations.</li>
            <li><strong>Payment Gateway:</strong> Secure premium payments and claim settlements.</li>
            <li><strong>Analytics Hub:</strong> Real-time visualization of insurance policies and farm performance.</li>
            <li><strong>Collaborative Platform:</strong> Connects farmers, insurers, and financial institutions.</li>
        </ul>
    </section>

    <section class="mt-4">
        <h2>Homepage Overview</h2>
        <div class="accordion" id="homepageSections">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne">
                        Slider Section
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#homepageSections">
                    <div class="accordion-body">
                        Displays key achievements and relevant images, providing insights into InsureCow's impact and
                        progress.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">
                        About InsureCow
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#homepageSections">
                    <div class="accordion-body">
                        A brief description of InsureCow’s mission and vision, along with an overview of the services
                        offered.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree">
                        Products and Services
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#homepageSections">
                    <div class="accordion-body">
                        Showcased in a slider format, includes:<br>
                        - Insurance Product Designing & Underwriting Services<br>
                        - Cattle Registration Services
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour">
                        Get to Know Us
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#homepageSections">
                    <div class="accordion-body">
                        Educational section about insurance management, risk assessment, policy selection, claims, and
                        financial security.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-4">
        <h2>Conclusion</h2>
        <p>InsureCow is a technology-driven solution designed to streamline cattle insurance and farm management. This
            user manual provides an overview of the homepage structure and key functionalities, helping users navigate
            the platform efficiently. For further support, visit the contact section or refer to our blogs for
            additional insights.</p>
    </section>
</div>



@endsection
