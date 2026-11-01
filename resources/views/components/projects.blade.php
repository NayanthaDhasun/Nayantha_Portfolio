<section id="projects" class="section container">
    <div class="section-label"><span>02 / SELECTED ENGAGEMENTS</span><span>A CLOSER LOOK AT THE WORK</span></div>
    <div class="section-heading"><h2>Real challenges.<br><span class="serif-accent">Practical solutions.</span></h2><p>Connecting operations, data, and people.<br>Explore the thinking behind each project.</p></div>
    <div class="project-filters" role="group" aria-label="Filter projects"><button class="active" data-filter="all" aria-pressed="true">All projects <span>{{ count($projects) }}</span></button><button data-filter="ERP & AI Integration" aria-pressed="false">ERP & AI</button><button data-filter="Financial Analytics & ERP" aria-pressed="false">Analytics</button><button data-filter="Systems Analysis & Agile" aria-pressed="false">Systems analysis</button></div>
    <div class="projects-grid">@foreach($projects as $proj)<article class="project-card project-{{ $loop->iteration }}" data-category="{{ $proj['category'] }}">
        <div class="project-art" aria-hidden="true">
            <span class="art-label">{{ ['01 / CONNECTED OPERATIONS','02 / FINANCIAL INTELLIGENCE','03 / SERVICE DESIGN','04 / HEALTHCARE SYSTEMS'][$loop->index] }}</span>
            @if($loop->index === 0)
                <div class="integration-art"><div class="integration-orbit"></div><div class="integration-core">odoo<span>CONNECTED BUSINESS</span></div><span class="integration-satellite satellite-one">Sales</span><span class="integration-satellite satellite-two">Mobile</span><span class="integration-satellite satellite-three">AI insights</span></div>
            @elseif($loop->index === 1)
                <div class="chart-preview"><div class="chart-top"><span>Financial overview</span><span>↗</span></div><div class="chart-bars"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div><div class="chart-bottom"><span>OPERATIONS → INSIGHT</span><strong>Power BI</strong></div></div>
            @else
                <div class="service-art"><span class="service-glyph">{{ $loop->index === 2 ? '↗' : '+' }}</span><div class="workflow-art"><span>{{ $loop->index === 2 ? 'Discover' : 'Book' }}</span><b>→</b><span>{{ $loop->index === 2 ? 'Design' : 'Schedule' }}</span><b>→</b><span>{{ $loop->index === 2 ? 'Deliver' : 'Consult' }}</span></div></div>
            @endif
            <span class="art-caption">Concept illustration <span>↗</span></span>
        </div>
        <div class="project-body"><div class="project-meta"><span>{{ $proj['category'] }}</span><span>0{{ $loop->iteration }}</span></div><h3>{{ $proj['title'] }}</h3><p>{{ $proj['description'] }}</p><div class="tags">@foreach($proj['tech'] as $tech)<span>{{ $tech }}</span>@endforeach</div><details class="project-details"><summary>Inside the project <span aria-hidden="true">+</span></summary><ul>@foreach($proj['highlights'] as $highlight)<li>{{ $highlight }}</li>@endforeach</ul>@if(isset($proj['client']))<p>Client: {{ $proj['client'] }}</p>@endif<p class="project-impact"><strong>Business impact</strong>{{ $proj['impact'] }}</p></details></div>
    </article>@endforeach</div>
</section>
