@section('emailsignup')

<!-- Newsletter Signup -->
<div id="newsletter" class="newsletter tint tint-dark-blue" data-speed="2 " data-type="background">
    <div class="text-vcenter">
        <div class="col-lg-4 col-lg-offset-4">
            <h1>Want Updates?</h1>
            <h3>Tune into a community of hundreds of students and alumni that are interested in innovation, entrepreneurship, and startups.</h3>
        </div>
        <div class="col log-8 col-lg-offset-2">
            <form role="form" action="" method="POST">
                <div class="form-group col-lg-4">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group col-lg-4">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group col-lg-12 text-center">
                    <input type="hidden" name="save" value="contact">
                    <button type="submit" class="btn btn-default btn-lg"><i class="fa fa-envelope-o fa-fw"></i>Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
