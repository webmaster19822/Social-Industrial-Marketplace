
@include('admin.Emailtemplates.header')


<h3 style="font-family: 'Open Sans', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 18px; line-height: 2em; font-weight: normal; margin: 0 auto 10px; padding: 0;">Hello {{$name}},</h3>

<p style="font-family: 'Open Sans', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 15px; line-height: 1.6em; font-weight: normal; margin: 0 auto 10px; padding: 0;">You have received an endorsement from <strong>{{$sender_first_name}} {{$sender_last_name}}</strong>.<br />
  <br />

  <a href="http://app.indyjohn.com">Log in</a> to review and accept their Endorsement, which will be displayed on your Indy John profile. <br />
<br />
Remember to network more efficiently by sharing your Indy John profile with your friends and associates.</p>

@include('admin.Emailtemplates.footer')



                        
