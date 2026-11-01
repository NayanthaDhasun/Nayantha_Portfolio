<section id="expertise" class="expertise-section section"><div class="container">
    <div class="section-label"><span>04 / CAPABILITIES</span><span>CONNECTED EXPERTISE</span></div>
    <div class="section-heading"><h2>Complex operations.<br><span class="muted">Clear solutions.</span></h2><p>Functional knowledge meets technical fluency.<br>Built around how your business actually works.</p></div>
    <div class="expertise-grid">@foreach($erpModules as $module)<details class="expertise-item"><summary><span class="module-number">0{{ $loop->iteration }}</span><h3>{{ $module['title'] }}</h3><span class="expand-icon" aria-hidden="true">+</span></summary><div class="module-detail"><p>{{ $module['description'] }}</p><ul>@foreach($module['capabilities'] as $capability)<li>{{ $capability }}</li>@endforeach</ul></div></details>@endforeach</div>
    <div class="skills-row">@foreach($consultingSkills as $group)<div><h3>{{ $group['category'] }}</h3><div class="tags">@foreach($group['skills'] as $skill)<span>{{ $skill['name'] }}</span>@endforeach</div></div>@endforeach</div>
</div></section>
