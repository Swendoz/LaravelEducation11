<h2>
    {{$job->title}}
</h2>
<div>
    Congrats! Your job is now live on our website.
</div>

<p>
    <a href="{{ url('/jobs/') .  $job->id }}">View Your Job Listing</a>
</p>
