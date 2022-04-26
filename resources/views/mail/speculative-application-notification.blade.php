<p>Name: {{ $details['name'] }}</p>
<p>Organisation: {{ $details['organisation'] }}</p>
<p>Job title: {{ $details['job_title'] }}</p>
@if($details['phone_number'] != null)
  <p>Phone number: {{ $details['phone_number'] }}</p>
@endif
<p>Work email: {{ $details['work_email'] }}</p>
<p>Message: {{ $details['message'] }}</p>
