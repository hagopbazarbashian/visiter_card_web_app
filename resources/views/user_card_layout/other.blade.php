@if ($cardform->company)
<section id="education" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center">Other</h4>
        </div>

        <div id="timeline-education">
            <!-- FIRST TIMELINE -->
            @if ($cardform->company)
            <h2>Company</h2>
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>C</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">{{$cardform->company ?? ''}}</h6>
                    </div>
                </div>
            </div>
            @endif
            <!-- SECOND TIMELINE -->
            @if ($cardform->department)
            <h2>Department</h2>
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>D</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">{{$cardform->department ?? ''}}</h6>
                    </div>
                </div>
            </div>
            @endif
            @if ($cardform->date)
            <h2>Date</h2>
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>D</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">{{$cardform->date ?? ''}}</h6>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endif

