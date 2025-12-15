@extends('layouts.app')

@section('title', 'Our Engineering Services')

@section('content')

{{-- PAGE HEADER --}}
<div class="container-fluid page-header-mechsolvix py-5" style="
    background: linear-gradient(rgba(36, 64, 95, 0.573), rgba(30, 86, 120, 0.5)),
                url('img/our-mission.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-3 mt-4">Our Services</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">
                    Our Services
                </li>
            </ol>
        </nav>
    </div>
</div>

{{-- SERVICES TABS SECTION --}}
<section class="services-tabs-section py-4 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-10 mx-auto text-center">
                <div class="section-intro">
                    <span class="section-badge">OUR EXPERTISE</span>
                    <h2 class="section-title">Engineering Solutions</h2>
                    <p class="section-subtitle">Quality engineering services with precision and innovation</p>
                </div>
            </div>
        </div>

        {{-- Services Tabs Navigation --}}
        <div class="row">
            <div class="col-12">
                <div class="services-tabs-container">
                    <div class="services-tabs-nav">
                        @php
                        $services = [
                        ['id' => 'supervision', 'icon' => 'hard-hat', 'title' => 'Engineering Supervision', 'desc' =>
                        'Quality assurance'],
                        ['id' => 'management', 'icon' => 'chart-line', 'title' => 'Project Management', 'desc' =>
                        'Strategic planning'],
                        ['id' => 'design', 'icon' => 'drafting-compass', 'title' => 'A & E Design', 'desc' =>
                        'Architectural solutions'],

                        // FIXED
                        ['id' => 'feasibility', 'icon' => 'search', 'title' => 'Feasibility Studies', 'desc' =>
                        'Technical analysis'],

                        ['id' => 'interior', 'icon' => 'couch', 'title' => 'Interior Design', 'desc' => 'Aesthetic
                        spaces'],

                        // FIXED
                        ['id' => 'finishing', 'icon' => 'check-circle', 'title' => 'Finishing Supervision', 'desc' =>
                        'Perfection in detail'],

                        ['id' => 'bim', 'icon' => 'cube', 'title' => 'BIM Modeling', 'desc' => 'Digital construction'],
                        ['id' => 'infrastructure', 'icon' => 'road', 'title' => 'Infrastructure Design', 'desc' =>
                        'Utility networks']
                        ];

                        @endphp

                        @foreach($services as $index => $service)
                        <button class="service-tab-btn {{ $index === 0 ? 'active' : '' }}"
                            onclick="scrollToService('detail-{{ $service['id'] }}')">
                            <div class="tab-icon">
                                <i class="fas fa-{{ $service['icon'] }}"></i>
                            </div>
                            <div class="tab-content">
                                <h4>{{ $service['title'] }}</h4>
                                <p>{{ $service['desc'] }}</p>
                            </div>
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- DETAILED SERVICES SECTION --}}
<section id="detail-section" class="detailed-services-section py-5 bg-white">
    <div class="container">
        {{-- Section Header --}}
        <div class="row mb-5">
            <div class="col-lg-10 mx-auto text-center">
                <div class="detail-section-header">
                    <span class="detail-badge">SERVICE DETAILS</span>
                    <h2 class="detail-section-title">Our Specialized Services</h2>
                    <p class="detail-section-subtitle">Detailed overview of our engineering expertise</p>
                </div>
            </div>
        </div>

        @php
        $serviceDetails = [
        [
        'id' => 'supervision',
        'title' => 'Engineering Supervision',
        'icon' => 'hard-hat',
        'tags' => ['Quality Assurance', 'Compliance', 'Site Management'],
        'image' => 'img/about_section1.png',
        'description' => 'Comprehensive oversight ensuring adherence to design specifications and quality standards
        throughout construction lifecycle.',
        'features' => [
        ['icon' => 'clipboard-check', 'title' => 'Material Quality Control', 'desc' => 'Rigorous testing of construction
        materials'],
        ['icon' => 'shield-alt', 'title' => 'Safety Compliance', 'desc' => 'Ensuring OSHA standards and protocols'],
        ['icon' => 'ruler-combined', 'title' => 'Dimensional Accuracy', 'desc' => 'Precise measurement verification'],
        ['icon' => 'calendar-check', 'title' => 'Progress Monitoring', 'desc' => 'Daily site inspections and tracking'],
        ['icon' => 'file-contract', 'title' => 'Documentation', 'desc' => 'Systematic recording of site activities'],
        ['icon' => 'exclamation-triangle', 'title' => 'Risk Mitigation', 'desc' => 'Proactive issue identification']
        ],
        'image_desc' => 'Our team provides on-site supervision throughout the construction phase, ensuring every detail
        meets the highest quality standards. We conduct regular site inspections, monitor progress against timelines,
        and ensure compliance with all safety regulations and building codes.'
        ],
        [
        'id' => 'management',
        'title' => 'Project Management',
        'icon' => 'chart-line',
        'tags' => ['Strategic Planning', 'Resource Management', 'Cost Control'],
        'image' => 'img/carousel3.jpg',
        'description' => 'Strategic oversight ensuring projects delivered on time, within budget, and to highest quality
        standards.',
        'features' => [
        ['icon' => 'calendar-alt', 'title' => 'Schedule Management', 'desc' => 'Detailed project scheduling and
        timeline'],
        ['icon' => 'money-bill-wave', 'title' => 'Budget Control', 'desc' => 'Comprehensive cost management'],
        ['icon' => 'users', 'title' => 'Team Coordination', 'desc' => 'Management of project teams'],
        ['icon' => 'tasks', 'title' => 'Scope Management', 'desc' => 'Clear scope definition and control'],
        ['icon' => 'chart-pie', 'title' => 'Resource Allocation', 'desc' => 'Optimal distribution of resources'],
        ['icon' => 'chart-line', 'title' => 'Performance Tracking', 'desc' => 'Real-time monitoring of KPIs']
        ],
        'image_desc' => 'We employ advanced project management methodologies to coordinate all aspects of your
        construction project. From initial planning to final delivery, we ensure seamless communication between
        stakeholders, efficient resource allocation, and strict adherence to timelines and budgets.'
        ],
        [
        'id' => 'design',
        'title' => 'Architectural & Engineering Design',
        'icon' => 'drafting-compass',
        'tags' => ['Architectural Design', 'Structural Engineering', 'MEP Systems'],
        'image' => 'img/civil.jpg',
        'description' => 'Integrated design solutions combining architectural vision with engineering precision.',
        'features' => [
        ['icon' => 'building', 'title' => 'Architectural Planning', 'desc' => 'Creative space planning and facade
        design'],
        ['icon' => 'bolt', 'title' => 'Structural Design', 'desc' => 'Structural analysis and engineering'],
        ['icon' => 'wind', 'title' => 'MEP Systems', 'desc' => 'Integrated mechanical, electrical, plumbing'],
        ['icon' => 'leaf', 'title' => 'Sustainable Design', 'desc' => 'Green building and energy-efficient solutions'],
        ['icon' => 'code-branch', 'title' => 'Coordination Drawings', 'desc' => 'System coordination and integration'],
        ['icon' => 'balance-scale', 'title' => 'Code Compliance', 'desc' => 'Building codes adherence']
        ],
        'image_desc' => 'Our design team creates innovative architectural solutions that balance aesthetics,
        functionality, and sustainability. We produce detailed engineering drawings, 3D visualizations, and construction
        documents that serve as the blueprint for successful project execution.'
        ],
        [
        'id' => 'feasibility',
        'title' => 'Feasibility Studies',
        'icon' => 'magnifying-glass-chart',
        'tags' => ['Market Analysis', 'Financial Modeling', 'Risk Assessment'],
        'image' => 'img/about.png',
        'description' => 'Comprehensive analysis providing data-driven insights for investment decisions.',
        'features' => [
        ['icon' => 'chart-bar', 'title' => 'Market Analysis', 'desc' => 'Market research and demand forecasting'],
        ['icon' => 'calculator', 'title' => 'Financial Modeling', 'desc' => 'ROI analysis and cash flow projections'],
        ['icon' => 'exclamation-triangle', 'title' => 'Risk Assessment', 'desc' => 'Risk identification and
        quantification'],
        ['icon' => 'search-location', 'title' => 'Site Evaluation', 'desc' => 'Technical assessment of site
        suitability'],
        ['icon' => 'balance-scale', 'title' => 'Regulatory Review', 'desc' => 'Permits and compliance analysis'],
        ['icon' => 'chart-line', 'title' => 'Sensitivity Analysis', 'desc' => 'Scenario planning']
        ],
        'image_desc' => 'Before breaking ground, we conduct thorough feasibility studies to evaluate project viability.
        Our analysis includes market research, financial projections, site assessments, and regulatory compliance
        reviews to ensure your investment is sound and strategically positioned.'
        ],
        [
        'id' => 'interior',
        'title' => 'Interior Design',
        'icon' => 'couch',
        'tags' => ['Space Planning', 'FF&E Selection', 'Lighting Design'],
        'image' => 'img/interior.jpg',
        'description' => 'Transformative interior spaces harmonizing aesthetics with functionality.',
        'features' => [
        ['icon' => 'ruler-combined', 'title' => 'Space Planning', 'desc' => 'Optimal space utilization and layout
        design'],
        ['icon' => 'palette', 'title' => 'Color Scheme Development', 'desc' => 'Comprehensive color palettes
        selection'],
        ['icon' => 'lightbulb', 'title' => 'Lighting Design', 'desc' => 'Ambient, task, and accent lighting solutions'],
        ['icon' => 'chair', 'title' => 'Furniture Selection', 'desc' => 'Curated furniture and fixture specifications'],
        ['icon' => 'layer-group', 'title' => 'Material Specifications', 'desc' => 'Detailed material specifications'],
        ['icon' => 'cube', 'title' => '3D Visualization', 'desc' => 'Realistic renderings and walkthroughs']
        ],
        'image_desc' => 'We create interior environments that inspire productivity, comfort, and engagement. Our design
        approach considers spatial dynamics, lighting effects, material textures, and ergonomic considerations to
        deliver spaces that are both beautiful and practical for daily use.'
        ],
        [
        'id' => 'finishing',
        'title' => 'Finishing Supervision',
        'icon' => 'check-to-slot',
        'tags' => ['Quality Control', 'Finishing Works', 'Handover'],
        'image' => 'img/services2.jpg',
        'description' => 'Meticulous oversight ensuring impeccable quality and attention to detail.',
        'features' => [
        ['icon' => 'tint', 'title' => 'Plumbing Finishes', 'desc' => 'Supervision of sanitary ware installation'],
        ['icon' => 'bolt', 'title' => 'Electrical Finishes', 'desc' => 'Lighting fixture and electrical installation'],
        ['icon' => 'tile', 'title' => 'Tiling & Flooring', 'desc' => 'Quality control of tiling and flooring'],
        ['icon' => 'paint-roller', 'title' => 'Painting Supervision', 'desc' => 'Paint application quality standards'],
        ['icon' => 'door-closed', 'title' => 'Joinery Works', 'desc' => 'Carpentry and door installation quality'],
        ['icon' => 'clipboard-list', 'title' => 'Snag List Management', 'desc' => 'Defect identification']
        ],
        'image_desc' => 'During the final stages of construction, our finishing supervision ensures every detail meets
        exacting standards. We oversee installation of fixtures, finishes, and fittings, conduct thorough quality
        checks, and manage the snagging process to deliver a flawless final product.'
        ],
        [
        'id' => 'bim',
        'title' => 'BIM Modeling',
        'icon' => 'cube',
        'tags' => ['3D Modeling', 'Clash Detection', 'Digital Construction'],
        'image' => 'img/services/building.png',
        'description' => 'Advanced digital modeling for enhanced coordination and clash detection.',
        'features' => [
        ['icon' => 'cube', 'title' => '3D Modeling', 'desc' => '3D model development using Revit'],
        ['icon' => 'search', 'title' => 'Clash Detection', 'desc' => 'Automated identification of conflicts'],
        ['icon' => 'calendar', 'title' => '4D Scheduling', 'desc' => 'Time dimension integration'],
        ['icon' => 'calculator', 'title' => '5D Cost Estimation', 'desc' => 'Quantity takeoff and cost estimation'],
        ['icon' => 'eye', 'title' => 'Visualization', 'desc' => 'High-quality renderings and walkthroughs'],
        ['icon' => 'database', 'title' => 'Data Management', 'desc' => 'Centralized information management']
        ],
        'image_desc' => 'Our BIM services transform traditional construction documentation into intelligent 3D models
        that enable better decision-making. We create coordinated models that identify potential conflicts before
        construction begins, saving time and reducing costly rework on site.'
        ],
        [
        'id' => 'infrastructure',
        'title' => 'Infrastructure Design',
        'icon' => 'road',
        'tags' => ['Utility Networks', 'Road Design', 'Drainage Systems'],
        'image' => 'img/services/lastservice.png',
        'description' => 'Comprehensive design for utility networks and transportation systems.',
        'features' => [
        ['icon' => 'road', 'title' => 'Road Design', 'desc' => 'Road geometry and pavement design'],
        ['icon' => 'tint', 'title' => 'Water Supply Systems', 'desc' => 'Water distribution network design'],
        ['icon' => 'recycle', 'title' => 'Sewerage Systems', 'desc' => 'Wastewater collection system design'],
        ['icon' => 'cloud-rain', 'title' => 'Stormwater Drainage', 'desc' => 'Surface water drainage management'],
        ['icon' => 'bolt', 'title' => 'Electrical Networks', 'desc' => 'Electrical distribution design'],
        ['icon' => 'leaf', 'title' => 'Sustainable Infrastructure', 'desc' => 'Green infrastructure solutions']
        ],
        'image_desc' => 'We design robust infrastructure systems that support community development and economic growth.
        Our expertise includes transportation networks, utility distribution systems, drainage solutions, and
        sustainable infrastructure that meets current needs while accommodating future expansion.'
        ]
        ];
        @endphp

        @foreach($serviceDetails as $index => $service)
        <div id="detail-{{ $service['id'] }}" class="service-detail-wrapper mb-5">
            <div class="detail-card">
                {{-- Mobile Layout: Heading -> Image -> Content -> Features --}}
                <div class="d-block d-lg-none mobile-service-section">
                    {{-- Mobile: Heading --}}
                    <div class="mobile-service-header mb-4">
                        <div class="service-marker">
                            <span class="marker-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <div class="marker-line"></div>
                        </div>
                        <h3 class="service-title">
                            <i class="fas fa-{{ $service['icon'] }} title-icon"></i>
                            {{ $service['title'] }}
                        </h3>
                        <div class="service-category">
                            @foreach($service['tags'] as $tag)
                            <span class="category-tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>

                    {{-- Mobile: Image --}}
                    <div class="mobile-service-image mb-4">
                        <div class="image-container">
                            <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="service-main-image">
                        </div>
                    </div>

                    {{-- Mobile: Content (Description) --}}
                    <div class="mobile-service-content mb-4">
                        <p class="service-intro">{{ $service['description'] }}</p>

                        {{-- Image Description --}}
                        <div class="mobile-image-desc mt-3 p-3 rounded bg-light-blue">
                            <p class="mb-0"><strong>About This Service:</strong> {{ $service['image_desc'] }}</p>
                        </div>
                    </div>

                    {{-- Mobile: Features (Simple Text Boxes) --}}
                    <div class="mobile-service-features">
                        <h4 class="features-title mb-3">Key Features</h4>
                        <div class="features-grid">
                            @foreach($service['features'] as $feature)
                            <div class="feature-card">
                                <div class="feature-card-header">
                                    <i class="fas fa-{{ $feature['icon'] }} feature-icon"></i>
                                    <h5 class="feature-card-title">{{ $feature['title'] }}</h5>
                                </div>
                                <p class="feature-card-desc">{{ $feature['desc'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Desktop Layout: Alternate sides --}}
                <div class="d-none d-lg-block">
                    <div class="row align-items-start">
                        @if($index % 2 == 0)
                        {{-- Desktop: Content Left, Image Right --}}
                        <div class="col-lg-6">
                            <div class="detail-content-side">
                                <div class="service-marker">
                                    <span class="marker-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    <div class="marker-line"></div>
                                </div>
                                <h3 class="service-title">
                                    <i class="fas fa-{{ $service['icon'] }} title-icon"></i>
                                    {{ $service['title'] }}
                                </h3>
                                <div class="service-category">
                                    @foreach($service['tags'] as $tag)
                                    <span class="category-tag">{{ $tag }}</span>
                                    @endforeach
                                </div>
                                <p class="service-intro">{{ $service['description'] }}</p>
                                <div class="detailed-features">
                                    @foreach($service['features'] as $feature)
                                    <div class="feature-item">
                                        <div class="feature-icon-box">
                                            <i class="fas fa-{{ $feature['icon'] }}"></i>
                                        </div>
                                        <div class="feature-content">
                                            <h5>{{ $feature['title'] }}</h5>
                                            <p>{{ $feature['desc'] }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="detail-image-side">
                                <div class="image-container">
                                    <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}"
                                        class="service-main-image">
                                </div>
                                <div class="image-description-card">
                                    <div class="image-desc-content">
                                        <p>{{ $service['image_desc'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        {{-- Desktop: Image Left, Content Right --}}
                        <div class="col-lg-6">
                            <div class="detail-image-side">
                                <div class="image-container">
                                    <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}"
                                        class="service-main-image">
                                </div>
                                <div class="image-description-card">
                                    <div class="image-desc-content">
                                        <p>{{ $service['image_desc'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="detail-content-side">
                                <div class="service-marker">
                                    <span class="marker-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    <div class="marker-line"></div>
                                </div>
                                <h3 class="service-title">
                                    <i class="fas fa-{{ $service['icon'] }} title-icon"></i>
                                    {{ $service['title'] }}
                                </h3>
                                <div class="service-category">
                                    @foreach($service['tags'] as $tag)
                                    <span class="category-tag">{{ $tag }}</span>
                                    @endforeach
                                </div>
                                <p class="service-intro">{{ $service['description'] }}</p>
                                <div class="detailed-features">
                                    @foreach($service['features'] as $feature)
                                    <div class="feature-item">
                                        <div class="feature-icon-box">
                                            <i class="fas fa-{{ $feature['icon'] }}"></i>
                                        </div>
                                        <div class="feature-content">
                                            <h5>{{ $feature['title'] }}</h5>
                                            <p>{{ $feature['desc'] }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- CTA SECTION --}}
<section class="services-cta-section py-5" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="cta-content">
                    <h2 class="cta-title">Ready to Start Your Project?</h2>
                    <p class="cta-subtitle">Contact us for comprehensive engineering solutions</p>
                    <div class="cta-buttons">
                        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg px-4 py-3 me-3">
                            <i class="fas fa-phone-alt me-2"></i> Contact Us
                        </a>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    :root {
        --primary-blue: #57c2ff;
        --secondary-blue: #4ba2ff;
        --light-blue: #e6f2ff;
        --dark-blue: #65b2ff;
        --gray-100: #f8f9fa;
        --gray-200: #e9ecef;
        --gray-300: #dee2e6;
        --gray-700: #495057;
        --inactive-bg: #ffffff;
        --inactive-border: #dee2e6;
        --active-bg: #0066cc;
        --active-color: #ffffff;
    }

    /* Section Spacing */
    .services-tabs-section {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .detailed-services-section {
        padding-top: 4rem;
        padding-bottom: 4rem;
    }

    /* Section Headers */
    .section-badge,
    .detail-badge {
        background: var(--primary-blue);
        color: white;
        padding: 0.4rem 1.25rem;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-bottom: 1rem;
        display: inline-block;
    }

    .section-title,
    .detail-section-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--dark-blue);
        margin-bottom: 0.5rem;
    }

    .section-subtitle,
    .detail-section-subtitle {
        font-size: 1rem;
        color: var(--gray-700);
        max-width: 600px;
        margin: 0 auto;
    }

    /* Tabs Container */
    .services-tabs-container {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        margin-bottom: 2rem;
    }

    .services-tabs-nav {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
    }

    /* Tab Buttons */
    .service-tab-btn {
        background: var(--inactive-bg);
        border: 2px solid var(--inactive-border);
        border-radius: 10px;
        padding: 1rem;
        text-align: left;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        outline: none;
        width: 100%;
    }

    .service-tab-btn:hover {
        border-color: var(--primary-blue);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 102, 204, 0.15);
    }

    /* Active Tab */
    .service-tab-btn.active {
        background: var(--active-bg);
        border-color: var(--active-bg);
        color: var(--active-color);
        box-shadow: 0 6px 15px rgba(0, 102, 204, 0.25);
    }

    .service-tab-btn.active .tab-content h4,
    .service-tab-btn.active .tab-content p {
        color: var(--active-color);
    }

    /* Inactive Tab */
    .service-tab-btn:not(.active) {
        background: white;
        border-color: #e5e7eb;
    }

    .service-tab-btn:not(.active) .tab-content h4 {
        color: #1f2937;
    }

    .service-tab-btn:not(.active) .tab-content p {
        color: #6b7280;
    }

    /* Tab Icon */
    .tab-icon {
        width: 45px;
        height: 45px;
        background: var(--light-blue);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-blue);
        font-size: 1.25rem;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .service-tab-btn.active .tab-icon {
        background: white;
        color: var(--primary-blue);
    }

    .service-tab-btn:not(.active):hover .tab-icon {
        background: var(--light-blue);
        color: var(--primary-blue);
    }

    /* Tab Content */
    .tab-content h4 {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 0.25rem;
        line-height: 1.3;
    }

    .tab-content p {
        font-size: 0.85rem;
        margin: 0;
        line-height: 1.4;
    }

    /* Service Detail Cards */
    .service-detail-wrapper {
        scroll-margin-top: 80px;
        margin-bottom: 3rem;
    }

    .detail-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #f1f5f9;
    }

    /* Service Marker */
    .service-marker {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .marker-number {
        font-size: 2rem;
        font-weight: 800;
        color: var(--light-blue);
        line-height: 1;
        min-width: 40px;
    }

    .marker-line {
        flex: 1;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-blue) 0%, rgba(0, 102, 204, 0.1) 100%);
    }

    /* Service Title */
    .service-title {
        font-size: 1.75rem;
        color: var(--dark-blue);
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .title-icon {
        color: var(--primary-blue);
        font-size: 1.5rem;
    }

    /* Category Tags */
    .service-category {
        display: flex;
        gap: 0.5rem;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
    }

    .category-tag {
        background: var(--light-blue);
        color: var(--primary-blue);
        padding: 0.4rem 1rem;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 500;
        white-space: nowrap;
    }

    /* Service Intro */
    .service-intro {
        font-size: 1.1rem;
        color: var(--gray-700);
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    /* =========================== */
    /* MOBILE SPECIFIC STYLES */
    /* =========================== */
    .mobile-service-section {
        display: flex;
        flex-direction: column;
    }

    .mobile-service-header {
        order: 1;
    }

    .mobile-service-image {
        order: 2;
        margin: 1.5rem 0;
    }

    .mobile-service-content {
        order: 3;
    }

    .mobile-service-features {
        order: 4;
        margin-top: 2rem;
    }

    /* Mobile Image Container */
    .mobile-service-image .image-container {
        height: 250px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .mobile-service-image .service-main-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Mobile Image Description */
    .mobile-image-desc {
        background: var(--light-blue) !important;
        border-left: 4px solid var(--primary-blue);
        font-size: 0.95rem;
        line-height: 1.6;
    }

    /* Mobile Features Grid */
    .features-title {
        font-size: 1.25rem;
        color: var(--dark-blue);
        font-weight: 600;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid var(--light-blue);
    }

    .features-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    .feature-card {
        background: var(--light-blue);
        border-radius: 8px;
        padding: 1.25rem;
        border-left: 4px solid var(--primary-blue);
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 102, 204, 0.15);
    }

    .feature-card-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
    }

    .feature-icon {
        color: var(--primary-blue);
        font-size: 1.25rem;
        width: 40px;
        height: 40px;
        background: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .feature-card-title {
        font-size: 1rem;
        color: var(--dark-blue);
        font-weight: 600;
        margin: 0;
    }

    .feature-card-desc {
        font-size: 0.9rem;
        color: var(--gray-700);
        line-height: 1.5;
        margin: 0;
    }

    /* =========================== */
    /* DESKTOP STYLES */
    /* =========================== */
    /* Features Grid */
    .detailed-features {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin-top: 1.5rem;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1.25rem;
        background: #f8fafc;
        border-radius: 10px;
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }

    .feature-item:hover {
        border-color: var(--primary-blue);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 102, 204, 0.1);
    }

    .feature-icon-box {
        width: 48px;
        height: 48px;
        background: white;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-blue);
        font-size: 1.25rem;
        flex-shrink: 0;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .feature-content h5 {
        font-size: 1rem;
        color: var(--dark-blue);
        margin-bottom: 0.5rem;
        font-weight: 600;
    }

    .feature-content p {
        font-size: 0.9rem;
        color: var(--gray-700);
        margin: 0;
        line-height: 1.5;
    }

    /* Image Container */
    .image-container {
        border-radius: 12px;
        overflow: hidden;
        height: 360px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .service-main-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .image-container:hover .service-main-image {
        transform: scale(1.03);
    }

    /* Image Description Card */
    .image-description-card {
        background: #f8fafc;
        border-radius: 10px;
        padding: 1.5rem;
        border-left: 4px solid var(--primary-blue);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        margin-top: 1.5rem;
        height: auto;
    }

    .image-desc-content p {
        font-size: 0.95rem;
        color: var(--gray-700);
        line-height: 1.6;
        margin: 0;
    }

    /* Desktop: Equal height columns */
    @media (min-width: 992px) {

        .detail-content-side,
        .detail-image-side {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .detail-image-side .image-description-card {
            flex-grow: 1;
            margin-top: 1.5rem;
            height: auto;
        }
    }

    /* CTA Styling */
    .cta-title {
        font-size: 2.5rem;
        color: white;
        margin-bottom: 1rem;
        font-weight: 700;
    }

    .cta-subtitle {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 2.5rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .btn-primary {
        background: linear-gradient(135deg, #ff7e5f 0%, #feb47b 100%);
        border: none;
        border-radius: 50px;
        font-weight: 600;
        padding: 0.875rem 2.5rem;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(255, 126, 95, 0.4);
    }

    .btn-outline-light {
        border-width: 2px;
        border-radius: 50px;
        font-weight: 600;
        padding: 0.875rem 2.5rem;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .services-tabs-nav {
            grid-template-columns: repeat(3, 1fr);
        }

        .detailed-features {
            grid-template-columns: 1fr;
        }

        .image-container {
            height: 320px;
        }
    }

    @media (max-width: 992px) {
        .services-tabs-nav {
            grid-template-columns: repeat(2, 1fr);
        }

        .section-title,
        .detail-section-title {
            font-size: 1.75rem;
        }

        .service-title {
            font-size: 1.5rem;
        }

        .image-container {
            height: 280px;
        }

        .image-description-card {
            padding: 1.25rem;
        }

        .cta-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 768px) {
        .services-tabs-nav {
            grid-template-columns: 1fr;
        }

        .service-tab-btn {
            padding: 1rem;
        }

        .detail-card {
            padding: 1.5rem;
        }

        .service-detail-wrapper {
            margin-bottom: 2rem;
        }

        /* Mobile Features Grid */
        .features-grid {
            grid-template-columns: 1fr;
        }

        .feature-card {
            padding: 1rem;
        }

        .mobile-service-image .image-container {
            height: 220px;
        }

        .cta-title {
            font-size: 1.75rem;
        }

        .cta-subtitle {
            font-size: 1.1rem;
        }

        .cta-buttons .btn {
            display: block;
            width: 100%;
            margin-bottom: 1rem;
        }

        .cta-buttons .btn:last-child {
            margin-bottom: 0;
        }
    }

    @media (max-width: 576px) {

        .section-title,
        .detail-section-title {
            font-size: 1.5rem;
        }

        .service-title {
            font-size: 1.3rem;
        }

        .mobile-service-image .image-container {
            height: 200px;
        }

        .feature-icon {
            width: 35px;
            height: 35px;
            font-size: 1rem;
        }

        .feature-card-title {
            font-size: 0.95rem;
        }

        .feature-card-desc {
            font-size: 0.85rem;
        }

        .mobile-image-desc {
            font-size: 0.9rem;
            padding: 1rem !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.service-tab-btn');
    const serviceSections = document.querySelectorAll('.service-detail-wrapper');
    let isScrolling = false;
    let scrollTimeout;

    // Function to update active tab
    function updateActiveTab(serviceId) {
        tabButtons.forEach(btn => {
            btn.classList.remove('active');
        });

        const activeTab = document.querySelector(`.service-tab-btn[onclick*="${serviceId}"]`);
        if (activeTab) {
            activeTab.classList.add('active');
        }
    }

    // Function to scroll to service
    window.scrollToService = function(serviceId) {
        const element = document.getElementById(serviceId);
        if (element) {
            isScrolling = true;
            updateActiveTab(serviceId);

            element.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });

            // Reset scrolling flag after animation
            setTimeout(() => {
                isScrolling = false;
            }, 1000);
        }
    };

    // Function to find active section on scroll
    function findActiveSection() {
        if (isScrolling) return;

        let currentSection = null;
        let minDistance = Infinity;

        serviceSections.forEach(section => {
            const rect = section.getBoundingClientRect();
            const distance = Math.abs(rect.top);

            // Check if section is in viewport (with some offset)
            if (rect.top <= 150 && rect.bottom >= 150) {
                if (distance < minDistance) {
                    minDistance = distance;
                    currentSection = section.id;
                }
            }
        });

        if (currentSection) {
            updateActiveTab(currentSection);
        }
    }

    // Throttled scroll handler
    function handleScroll() {
        if (scrollTimeout) {
            clearTimeout(scrollTimeout);
        }
        scrollTimeout = setTimeout(findActiveSection, 100);
    }

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll, { passive: true });

    // Initialize first tab as active
    updateActiveTab('detail-supervision');

    // Add keyboard navigation for tabs
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
            e.preventDefault();
            const activeTab = document.querySelector('.service-tab-btn.active');
            if (activeTab) {
                const tabs = Array.from(tabButtons);
                const currentIndex = tabs.indexOf(activeTab);
                let nextIndex;

                if (e.key === 'ArrowDown') {
                    nextIndex = (currentIndex + 1) % tabs.length;
                } else {
                    nextIndex = (currentIndex - 1 + tabs.length) % tabs.length;
                }

                const nextTab = tabs[nextIndex];
                const serviceId = nextTab.getAttribute('onclick').match(/detail-[a-z]+/)[0];
                scrollToService(serviceId);
            }
        }
    });
});
</script>
@endsection
