<form action="{{ route('mail') }}" method="post" role="form" class="php-email-form">
  @csrf
  <div class="form-row">
    <div class="col-md-6 form-group">
      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
      <div class="validate"></div>
    </div>
    <div class="col-md-6 form-group">
      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
      <div class="validate"></div>
    </div>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
    <div class="validate"></div>
  </div>
  <div class="form-group">
    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message (max. 2000 characters)"></textarea>
    <div class="validate"></div>
  </div>
  <div class="mb-3">
    <div class="loading">Loading</div>
      <div class="error-message">
      </div>    
    <div class="sent-message">Your message has been sent. Thank you!</div>
  </div>
  <div class="text-center"><button type="submit">Send Message</button></div>
</form>

<script type="text/javascript">
$(document).ready(function()
{
  $('form').on('submit', function(event)
  {
    event.preventDefault();
    $('.loading').css('display', 'block');
    $('.sent-message').css('display', 'none');
    $('.sent-message').html('');
    $('.error-message').css('display', 'none');
    $('.error-message').html('');
    $.post
    (
      '{{ route('mail') }}', 
      $(this).serialize(),
      function(data)
      {
        $('.sent-message').css('display', 'block')
                          .append('<p>' + data + '</p>');
        $('.loading').css('display', 'none');
      },
    )
    .fail(function(data)
      {
        $('.loading').css('display', 'none');
        let responseText = JSON.parse(data.responseText);
        let errorResponse = responseText['errors'];
        $('.error-message').css('display', 'block');
        for (let errors in errorResponse)
        {
          for (let error in errorResponse[errors])
          {
            let errorMessage = errorResponse[errors][error];
            $('.error-message').append('<p>' + errorMessage + '</p>');
          }

        }
      });
  });
}
);
</script>