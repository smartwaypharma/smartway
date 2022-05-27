<p>Name: {{ $details['name'] }}</p>
<p>Organisation: {{ $details['organisation'] }}</p>
<p>Current Job title: {{ $details['job_title'] }}</p>
@if($details['phone_number'] != null)
  <p>Phone number: {{ $details['phone_number'] }}</p>
@endif
<p>Email: {{ $details['work_email'] }}</p>
<p>Cover Letter: {{ $details['message'] }}</p>
