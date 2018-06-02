

        @extends('main')

@section('title','| contact Expert')

@section('content')
          
        
      <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

<div class = "form-class">
<form action="action_page.php">

    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="fullname" placeholder="Your full name..">

    <label for="email">Email</label>
    <input type="email" id="lname" name="email" placeholder="Your Email Address..">

    
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
  </div>
@endsection